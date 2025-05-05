<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/tableOperations.css">
</head>

<body>
    <form action="" method="POST" class='choose-table'>
        <label>Виберіть таблицю бази даних</label><br>
        <select name="choosing_table">
            <option>Choose Table</option>
            <option>Mouses</option>
            <option>Keyboards</option>
            <option>Headphones</option>
            <option>Monitors</option>
            <option>Speakers</option>
            <option>Microphones</option>
            <option>Webcams</option>
            <option>Maipulatives</option>
        </select><br><br>
        <input type="submit" name="chooseTable" value="Вивести таблицю"><br>
        <input type="submit" name="addGoods" value="Додати товар">
        <input type="submit" name="deleteGoods" value="Видалити товар">
        <input type="submit" name="editGoods" value="Зредагувати товар">
    </form>


    <?php
    require_once 'connect.php';

    function ShowAddOrEditForm($tableName, $operationType, $productData)
    {
        $buttonCaption = ($operationType === "add") ? "Додати" : "Зберегти";
        
        $imageData = ($productData[4] != null) ? "Поточне зображження: <br><img src='$productData[4]'> <br><br>Нове зображення: </label><br>" : "Зображення: </label><br>";
        $imageInput = ($productData[4] != null) ? "<input type='hidden' name='imagePath' value='$productData[4]'>" : null;
        $productId = ($productData[0] != null) ? "<label for='id'>Код: </label><br><input type='text' name='productID' value='$productData[0]' readonly><br>" : null;
        return "
        <h2>Додати новий товар в таблицю $tableName</h2>
        <form action='  ' method='POST' enctype='multipart/form-data' class='add-edit-form'>
            <input type='hidden' name='tableName' value='$tableName'>
            <input type='hidden' name='operationType' value='$operationType'>
            $imageInput
            $productId
            <label for='name'>Назва:</label><br>
            <input type='text' name='name' value='$productData[1]' required><br><br>

            <label for='price'>Ціна:</label><br>
            <input type='number' name='price' step='0.01' value='$productData[2]' required><br><br>

            <label for='description'>Опис:</label><br>
            <textarea name='description' required>$productData[3]</textarea><br><br>

            <label for='image'>$imageData <input type='file' name='image' accept='image/*' value='$productData[4]'><br><br>

            <button type='submit' name='saveAddGood'>$buttonCaption</button>
        </form>";
    }

    function SelectProduct($database, $tableName)
    {
        $items = mysqli_query($database, "SELECT ID, Name FROM $tableName;");
        while ($row = mysqli_fetch_row($items)) {
            $names[] = $row;
        }
        $str = "
        <form action='' method='POST' name='tableForm'>
            <input type='hidden' name='tableName' value='$tableName'>
            <label>Поточна таблиця $tableName</label><br><br>
            <label>Виберіть товар</label><br>
            <select name='choosingProduct'>
                <option></option>";

        if ($names != null) {
            foreach ($names as $key => $name)
                $str .= "<option>" . $name[0] . " - " . $name[1] . "</option>";
        }

        $str .= "</select>";
        return $str;
    }


    $choosenTable = (isset($_POST["chooseTable"]) || isset($_POST["addGoods"]) || isset($_POST["deleteGoods"]) || isset($_POST["editGoods"])) ? $_POST["choosing_table"] : null;

    if ($choosenTable == "Choose Table") {
        echo "<p class='alert'>Таблицю не було вибрано</p>";
        return;
    }

    $link = mysqli_connect($host, $user, $password, $database) or die("Помилка:" . mysqli_error($link));


    if (isset($_POST["chooseTable"])) {

        $query = "SELECT * FROM $choosenTable";
        $result = mysqli_query($link, $query) or die("Помилка:" . mysqli_error($link));

        if ($result) {
            $rows = mysqli_num_rows($result);

            echo
            "<table>
                        <tr> 
                            <th colspan='5'>Таблиця $choosenTable</th>
                        </tr>    
                        <tr>
                            <th>ID/Номер</th>
                            <th>Name/Назва</th>
                            <th>Price/Ціна</th>
                            <th>Description/Опис</th>
                            <th>Image/Зображення</th>
                        </tr>";

            for ($i = 0; $i < $rows; ++$i) {
                $row = mysqli_fetch_row($result);
                echo "<tr>";

                for ($j = 0; $j < 5; ++$j) {
                    if (str_contains($row[$j], "\n"))
                        echo "<td>" . str_replace("\n", "<br>", $row[$j]) . "</td>";
                    else
                        echo "<td>$row[$j]</td>";
                }

                echo "</tr>";
            }

            echo "</table>";
            mysqli_free_result($result);
        }
    }

    if (isset($_POST["addGoods"])) {
        echo ShowAddOrEditForm($choosenTable, "add", [null, null, null, null, null]);
    }

    if (isset($_POST["saveAddGood"])) {
        $tableName = $_POST['tableName'];
        $targetDir = "../images/" . $tableName . "/";
        $result = false;
        $operation = ($_POST['operationType'] == "add") ? "додано" : "відредаговано";
        
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        if (!file_exists($targetDir))
            mkdir($targetDir, 0777, true);

        if (($_POST['operationType'] == "add" || $_POST['operationType'] == "edit") && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
            $imagePath = $targetDir . basename($_FILES['image']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
            $result = mysqli_query($link, "INSERT INTO $tableName VALUES (NULL, '$name', " . floatval($price) . ", '$description', '$imagePath')");
        } elseif ($_POST['operationType'] == "edit" && $_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {
            $id = $_POST['productID'];
            $result = mysqli_query($link, "UPDATE $tableName SET Name = '$name', Price = " . floatval($price) . ", Description = '$description' WHERE ID = $id");;
        }

        echo ($result) ? "<p>Товар успішно $operation.</p>" : "<p>Помилка. Товар не $operation</p>";
    }


    if (isset($_POST["deleteGoods"])) {
        $selector = SelectProduct($link, $choosenTable) . "<br><input type='submit' name='deleteProduct' value='Видалити'> </form>";
        echo $selector;
    }


    if (isset($_POST["deleteProduct"])) {
        $tableName = $_POST['tableName'];
        $product = explode(" - ", $_POST['choosingProduct']);

        if ($product != null)
            echo (mysqli_query($link, "DELETE FROM $tableName WHERE (Name = '$product[1]') AND (ID = '$product[0]');")) ? "<p>Товар успішно Видалено.</p>" : "<p>Помилка. Товар не вдалося видалити.</p>";
        else
            echo "<p>Товар не було вибрано.</p>";
    }

    if (isset($_POST["editGoods"])) {
        echo SelectProduct($link, $choosenTable) . "<br><input type='submit' name='editProduct' value='Відредагувати'> </form>";
    }

    if (isset($_POST["editProduct"])) {

        $table = $_POST['tableName'];
        $choosenProduct = explode(' - ', $_POST['choosingProduct']);
        $queryResult = mysqli_query($link, "SELECT * FROM $table WHERE ID = $choosenProduct[0];") or die("Помилка:" . mysqli_error($link));

        $productInfo = mysqli_fetch_row($queryResult);

        echo ShowAddOrEditForm($table, "edit",  $productInfo);
    }
    ?>

</body>

</html>
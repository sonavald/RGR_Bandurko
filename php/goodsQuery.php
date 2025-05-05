<?php
function goodsBlocksShow($db_table) {
    require_once "goodBlock.php";
    require_once "connect.php";

    $link = mysqli_connect($host, $user, $password, $database);

    $query = "SELECT * FROM $db_table";
    $result = mysqli_query($link, $query);
    $rows = mysqli_num_rows($result);


    for ($i = 0; $i < $rows; $i++) {
        $product = mysqli_fetch_row($result);
        ProductMap($product);
    }
}

<?php
function ProductMap($item){
    $name = $item[1];
    $price = $item[2];
    $description = str_replace("\n", "<br>", $item[3]);
    $image = $item[4];
    
    echo "<div class='goods-block'>
            <div class='goods-block-inner'>
                           
                <img src='$image'>
                            
                <hr width='100%' noshade size='2' color='#202020'>
                <p>
                    $name
                </p>
                            
                <div style='position: relative; height: 50px; margin-top: 5%'>
                    <p>$price &#8372</p>
                    <button>
                        <img class='price-cart-img' src='../images/logo/shopping_cart.png'>
                    </button>
                </div>
                <div class='describe'>
                    $description
                </div>
            </div>
        </div>";
}
?>
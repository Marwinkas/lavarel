<link rel="stylesheet" type="text/css" href="css/app.css">
<div class="cards">
<?php

    foreach ($product as $row) {
        echo "<div class='card'>" . "<div class='cardinfo'> <p>Имя товара:</p>" . $row["name"] . "</div>" . "<div class='cardinfo'><p>Цена товара:</p>" .$row["cost"] . "</div>". "<div class='cardinfo'><p>Количество товара:</p>" .$row["amount"] . "</div>". "</div>\r\n";
    }
?>
</div>

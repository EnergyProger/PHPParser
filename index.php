<?php include('infoQuery.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskPHP3</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2 class="header__text">Категорія ноутбуки</h2>
    <div class="main__block">
    <table class="main__table">
        <tr>
            <th>Назва</th>
            <th>Ціна</th>
            <th>Посилання</th>
        </tr>
        <?php foreach ($products as $product) :?>
            <tr>  
                <td><?php echo $product['product-text'];?></td>
                <td><?php echo $product['product-price'];?></td>
                <td><a href="https://hotline.ua<?php echo $product['product-href'];?>"><?php echo $product['product-href'];?></a></td>
            </tr>
        <?php endforeach;?>
    </table>
   </div>
</body>
</html>

<?php
$name='Haitham';
$Name='Taima';
$age=3;
$jop='0';
$boolean=true;
$exp=15;

define('Laravel',8);

const Html = 4;


//echo  "Hello, ".$name;?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $name?></h2>
    <br>
    <?php echo " Halo $name,__" .$Name ?>
    <br>
    <hr>
    <?php if ($name =='Haitham' ):?>
        <?=$name?>
    <?php endif ?>
    <br>

    <?php if ( $age=="3"):?>
    <?=$name?>
    <?php endif ?>
    <br>

<ol>
    <?php for($i = 0 ; $i < 8 ; $i++) : ?>
        <li><?=  $i ?></li>
    <?php endfor ?>
</ol>


</body>
</html>



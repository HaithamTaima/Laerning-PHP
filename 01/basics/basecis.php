<?php
$name ='Haitham ';
$Name='Taima : ';
$jop='00';
$exp='20';
$boolean=true;
$age=0;

define("GREETING", "Welcome to W3Schools.com!");


// echo "Hello, \"$name\"\n";
// echo 'Hello, \'$name\'\n';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- // TODO  -->
    <?php if ($jop):?>
    <h3><?=$name.$Name.GREETING?></h3>
    <?php endif?>
    <!-- // TODO  -->
    <?php if($name=='Haitham' || $age==0) :?>
        <h2><?=$name?></h2>
        <?php endif ?>
    <h1><?php echo $name?></h1>
    <!-- // TODO  -->
    <ol>
        <?php for ($i=0;$i<5;$i++) :?>
        <li>
            <?= $i ?>
        </li>
        <?php endfor ?>
    </ol>
</body>
</html>

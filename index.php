<?php
$color = "blue";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:<?= $color ?> ">
<!-- <body style="background-color:<?php echo $color; ?> "> -->
    <h1>PHP rulez!</h1>
    <?php
        echo "<h1>php rulez i said</h1>";
        $name = "Kestas";
        if (strlen($name) > 9) {
            echo "<h2>" . $name . "</h2>";
        }
    ?>

<h1>another way</h1>

<?php
if($color == "green"){
echo '<div class="container">
        <div class="main">
            <h1>va čia tekstas</h1>
        </div>
    </div>';
 }

?>

<h1>anotherer way</h1>

<?php
if($color == "green"){ ?>

<h1>dalykai vyksta</h1>

<?php } ?>

<?php
for ($i=1; $i < 7; $i++) { ?>
    <h1>  <?= $i ?> </h1>
    <h<?= $i ?>> <?= $i ?>  </h<?= $i ?>>
<?php } ?>

</body>
</html>
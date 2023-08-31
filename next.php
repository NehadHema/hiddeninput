<?php
if (isset($_POST['submit'])) {
    extract($_POST);
    echo "Welcome " . $userName . " and your age is " . $age."<br>";?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="welcome.php" method="post">
     <input type="hidden" name="userName" value="<?= $userName?>">
     <input type="hidden" name="age" value="<?= $age?>">
     <input type="submit" value="Next Page">
    </form>
</body>
</html>
<?php
}?>
  




  
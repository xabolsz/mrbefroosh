

<?php 
  include("includes/header.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>

<main>
<form action="/login" method="POST">
<INPut type="text" name="uesername" placeholder="نام کاربری" required>
<INPut type="password" name="password" placeholder="رمز عبور" required>
<button type="submit">ورود</button>

<a href="signup.php"><h3>ثبت نام</h3></a>
</main>




</body>
</html>

<?php 
  include("includes/footer.php")
?>









</form>
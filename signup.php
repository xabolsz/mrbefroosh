

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

<form action="/signup" method="POST">
<INPut type="email" name="email" placeholder="ایمیل" required>
<INPut type="text" name="uesername" placeholder="نام کاربری" required>
<INPut type="password" name="password" placeholder="رمز عبور" required>
<INPut type="password" name="agin password" placeholder="رمز عبور تکرار" required>

<button type="submit">ثبت نام</button>


</main>




</body>
</html>

<?php 
  include("includes/footer.php")
?>

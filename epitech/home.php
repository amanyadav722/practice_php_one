<?php

session_start();

include ('submit.php');

if(!isset($_SESSION['loggedin'])){
  echo('You need to login first!');
  header('refresh:2;url=index.php');
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>

<h1>Hello Gorus</h1>


<main class="home_user">

      <div class="page-content">Welcome back, Monsier/Madame: <em><?=$_SESSION['name']?>!</em></div>
      <div class="page-content">Your phone number is: <em><?=$_SESSION['phone']?></em></div>
  </main>
</body>
</html>
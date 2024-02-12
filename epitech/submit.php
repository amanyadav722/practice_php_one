<?php
include_once('connection.php');




$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];




$sql = "INSERT INTO users (name, company, email, phone, password) VALUES ('$name', '$company', '$email', '$phone', '$password');";
mysqli_query($conn, $sql);

if ($sql=$conn->prepare('SELECT phone, password FROM users WHERE name = ?')){
    $sql->bind_param('s', $_POST['name']);
    $sql->execute();
}

$sql->store_result();

if($sql->num_rows > 0){
    $sql->bind_result($phone, $password);
    $sql->fetch();
}

if($_POST['password'] ===  $password){
    session_regenerate_id();
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['phone'] = $phone;
    $_SESSION['password'] = $password;
    header('Location: ');
}
else if(!$password){
    echo('Incorrect Password !');
    header('refresh:2;url=index.php');
}
else{
    echo('Incorrect Username !');
    header('refresh:2;url=index.php');
}
// $sql->close{

// };

//header('Location: index.php?success=1');

?>
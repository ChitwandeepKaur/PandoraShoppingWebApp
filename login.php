<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <style>
        body {
            align-items: center;
            background-image: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%);
            display: flex;
            height: 100vh;
            width: 100vw;
            justify-content: center;
            margin: 0;
        }
        form {
            width: 200px;
            height: 250px;
            background: white;
            border-radius: 20px;
        }
        input {
            margin: 20px;
        }
    </style>
</head>
<body>
   <form action="login.php" method="post">
     <?php

if (isset($_POST['submit'])) {
    
$user = $_POST['id'];
$pass = $_POST['pass'];

    $name = array('AhanJais', 'AsjadIqbal', 'Chitwandeep', 'Lovisha');
    $min = 5;
    $max = 10;
    if (strlen($user) < 5) {
        echo "<center>Username must be longer than five</center>" . "<br>";
    }
        if (strlen($user) > 10) {
        echo "<center>Username cannot be longer than ten</center>" . "<br>";
    }
    if (!in_array($user, $name)) {
        echo "<center>Invalid user.</center>";
    } else {
        echo "<center>Welcome</center>" . " " . $user;
    }
}
?>
      <input type="text" name="id" placeholder="Username"> <br>
      <input type="password" name="pass" placeholder="Password"> <br>
      <input type="submit" name="submit">
   </form>    
</body>
</html>
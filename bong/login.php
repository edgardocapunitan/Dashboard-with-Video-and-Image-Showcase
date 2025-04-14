<html>
      <head>
             <title> </title>
      </head>
      <body>
      <center>
      <?php
      session_start();
//username
$validUsername = "bong";
$inputUsername = $_POST["name"];

//password
$validPassword = "capunitan";
$inputPassword = $_POST["pass"];



if ($inputUsername === $validUsername && $inputPassword === $validPassword) {
    $_SESSION['username'] = $inputUsername; 
    header("Location: dashboard.php");
} elseif ($inputUsername !== $validUsername && $inputPassword !== $validPassword) {
    header("Location: ad.php");
} elseif ($inputUsername !== $validUsername) {
    header("Location: ud.php");
} elseif ($inputPassword !== $validPassword) {
    header("Location: pd.php");
}
?>
  

</body>
</html>
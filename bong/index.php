<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('bla.png');
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100vw;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 300px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.2); 
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.9);
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: box-shadow 0.3s; 
        }

        .container:focus-within {
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.9); 
        }
        .container:focus-within .glow {
            text-shadow: 0 0 10px rgba(255, 0, 0, 0.7); 
        }

        .container h1 {
            text-align: center;
            color: #333;
        }

        .container form {
            width: 100%;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center; /* Centering labels */
        }

        .container label {
            color: #fff;
            margin-bottom: 5px;
            transition: color 0.3s; 
            text-align: center; /* Centering label text */
            display: flex; /* Enable flexbox for label and icon alignment */
            align-items: center; /* Center items vertically */
        }

        .container label img {
            width: 20px; /* Adjust the width of the icon */
            height: auto; /* Maintain aspect ratio */
            margin-right: 5px; /* Add some space between the icon and the label */
        }

        .container input[type="text"],
        .container input[type="password"] {
            width: 93%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: box-shadow 0.3s; 
        }

        .container input[type="text"]:focus,
        .container input[type="password"]:focus {
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.7); 
        }

        .container button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: black;
            border: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: box-shadow 0.3s; 
        }

        .container button[type="submit"]:hover {
            background-color: grey;
        }

        .container:focus-within button[type="submit"] {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.7); 
        }

        .forgot-password {
            text-align: center; /* Centering Forgot Password link */
            margin-top: 10px;
            color: #fff;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container" tabindex="0"> 
    <?php
    echo "<h1 class='glow'>Login Form</h1>";
    ?>

    <form action="login.php" method="post">
        <label for="name"><img src="icon.png" alt="Username Icon"> USERNAME</label>
        <input type="text" name="name" id="name">
        <label for="pass"><img src="iconp.png" alt="Password Icon"> PASSWORD</label>
        <input type="password" name="pass" id="pass">
        <button type="submit">SUBMIT</button>
        <a href="forgot.php" class="forgot-password">Forgot Password?</a>
    </form>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Invalid Credentials</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(90deg, white, grey,grey,grey, white);
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(255, 0, 0, 0.9);
            max-width: 400px;
            margin: 0 auto;
        }

        h1 {
            color: #ff6347; /* Coral color */
        }

        p {
            margin-bottom: 20px;
        }

        .button {
            background-color: black; /* Green color */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 4px;
        }

        .button:hover {
            background-color: red; /* Darker green color */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Invalid Credentials</h1>
        <p>The <b>username</b> you entered is denied. Please try again!</p>
        <a href="index.php" class="button">Try Again</a>
    </div>
</body>
</html>

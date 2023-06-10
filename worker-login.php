<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <?php
    echo "<div class='main'>
            <h1>Welcome to the worker page!</h1>
            <div class='credentials'> 
            <p id='small-text'>Give me your credentials:</p>
            <form name='login' action='login.php' method='POST'>
            <b>Username:</b><br> <input type='text' id='user' name='user'><br>
            <b>Password:</b><br> <input type='password' id='pass' name='pass'><br>
            <input type='submit' value='login' >
            <p>Do you want to sign in as an admin? <a href='index.php'>Click here</a></p>
            <div>
        </div>";
    ?>
</body>
</html>
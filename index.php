<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <?php
    echo "<div class='main'>
            <h1>Welcome to the admin page!</h1>
            <div class='credentials'> 
            <p id='small-text'>Give me your credentials:</p>
            <form action='admin-login.php' method='POST'>
            <b>Username:</b><br> <input type='text' name='username'><br>
            <b>Password:</b><br> <input type='password' name='password'><br>
            <input type='submit' value='Login'>
            <p>Do you want to sign in as a worker? <a href='worker-login.php'>Click here</a></p>
            <div>
        </div>";
    ?>
</body>
</html>
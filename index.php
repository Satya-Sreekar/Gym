<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digi Trainer </title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="heading">
        <img src="logo.jpg" alt="">
            <h1>Digital Trainer</h1>
            <div></div>
    </div>
    <div class="log">
        <div class="login">
            <center>
                <h2>LOGIN</h2>
            </center>
            <form action="authentication.php" method="POST">
                <label for="UserName">User Name:</label>
                <input type="text" id="UN" name="UN" placeholder="Enter your User Name" required>
                <label for="password">Password:</label>
                <input type="password" id="pwd" name="pwd" placeholder="Enter your Password" required>
                <div class="select-container">
                    <label for="Membership">Membership:</label>
                    <select id="role" name="role">
                        <option value="2">General</option>
                        <option value="3">Digital Training</option>
                        <option value="4">Personal Training</option>
                        <option value="1">Admin</option>
                    </select>
                    <span class="select-arrow">&#9662;</span>
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
<footer>
    <h3>&copy;Developed by Satya Sreekar Pattaswami</h3>
</footer>
</html>
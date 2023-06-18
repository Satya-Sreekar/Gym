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
    </div>
    <div class="log">
        <div class="login">
            <center>
                <h2>LOGIN</h2>
            </center>
            <form action="Select.php" method="POST">
                <label for="UserName">User Name:</label>
                <input type="text" id="UserName" name="UserName" placeholder="Enter your User Name" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your Password" required>
                <div class="select-container">
                    <label for="Membership">Membership:</label>
                    <select id="role" name="role">
                        <option value="General">General</option>
                        <option value="Digital Training">Digital Training</option>
                        <option value="Personal Training">Personal Training</option>
                        <option value="Admin">Admin</option>
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
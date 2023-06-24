<?php
session_start();
if (!isset($_SESSION['UN'])) {
    header("location:index.php");
    exit;
}
?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digi Trainer</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="heading">
        <img src="logo.jpg" alt="">
        <h1>Digital Trainer</h1>
        <button onclick="window.location.href = 'logout.php';">Logout</button>
    </div>
    <div class="log">
        <div class="login">
            <center>
                <h2>Select Muscle Group</h2>
                <form action="process.php" method="POST">
                    <table>
                        <tr>
                            <th><button type="submit" name="msl" value="shoulder">Shoulder</button></th>
                            <th><button type="submit" name="msl" value="chest">Chest</button></th>
                        </tr>
                        <tr>
                            <th><button type="submit" name="msl" value="bicep">Bicep</button></th>
                            <th><button type="submit" name="msl" value="tricep">Tricep</button></th>
                        </tr>
                        <tr>
                            <th><button type="submit" name="msl" value="legs">Legs</button></th>
                            <th><button type="submit" name="msl" value="abdomen">Abdomen</button></th>
                        </tr>
                        <tr>
                            <th><button type="submit" name="msl" value="circuit">Circuit</button></th>
                            <th><button type="submit" name="msl" value="general">General</button></th>
                        </tr>
                    </table>
                </form>
            </center>
        </div>
    </div>
</body>

<footer>
    <h3>&copy; Developed by Satya Sreekar Pattaswami</h3>
</footer>

</html>

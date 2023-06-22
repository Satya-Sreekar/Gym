<?php
session_start();
if(!isset($_SESSION['UN']))
{
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
            <table>
                    <tr>
                    <th><button>Shoulder</button></th>
                    <th><button>Chest</button></th>
                    </tr>
                    <tr>
                    <th><button>Bicep</button></th>
                    <th><button>Tricep</button></th>
                    </tr>
                    <tr>
                    <th><button>Legs</button></th>
                    <th><button>Abdomen</button></th>
                    </tr>
                    <tr>
                    <th><button>Circuit</button></th>
                    <th><button>General</button></th>
                    </tr>
            </table>
            </center>
        </div>
    </div>
</body>
<footer>
    <h3>&copy;Developed by Satya Sreekar Pattaswami</h3>
</footer>
</html>
<?php
session_start();
if (!isset($_SESSION['UN'])) {
    header("location:index.php");
    exit;
}
require 'DBinfo.php';
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
                    <?php
                    // Retrieve the selected muscle group from the form
                    $selectedMuscleGroup = $_POST['msl'];

                    // Query the database to fetch the table rows based on the selected muscle group
                    $query = "SELECT eqip FROM $selectedMuscleGroup";
                    $result = mysqli_query($conn, $query);

                    // Fetch the rows as an associative array
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    // Close the database connection
                    mysqli_close($conn);
                    ?>

                    <div id="dropdownDiv"></div>
                    <button onclick="generateAdditionalDropdowns()">Generate Additional Dropdowns</button>
                    <div id="additionalDropdowns"></div>

                    <script>
                        var selectedOption = "";

                        function generateDropdown() {
                            var dropdownDiv = document.getElementById("dropdownDiv");
                            dropdownDiv.innerHTML = "";

                            var muscleGroupDropdown = document.createElement("select");
                            muscleGroupDropdown.name = "muscleGroup";
                            <?php foreach ($rows as $row) { ?>
                                var option = document.createElement("option");
                                option.value = "<?php echo $row['eqip']; ?>";
                                option.text = "<?php echo $row['eqip']; ?>";
                                muscleGroupDropdown.appendChild(option);
                            <?php } ?>
                            dropdownDiv.appendChild(muscleGroupDropdown);

                            var setsDropdown = document.createElement("select");
                            setsDropdown.name = "sets";
                            var setsOptions = ["1", "2", "3", "4", "5", "6"];
                            for (var i = 0; i < setsOptions.length; i++) {
                                var option = document.createElement("option");
                                option.value = setsOptions[i];
                                option.text = setsOptions[i];
                                setsDropdown.appendChild(option);
                            }
                            dropdownDiv.appendChild(setsDropdown);

                            var repsDropdown = document.createElement("select");
                            repsDropdown.name = "reps";
                            var repsOptions = ["8", "10", "12", "15", "20", "25"];
                            for (var i = 0; i < repsOptions.length; i++) {
                                var option = document.createElement("option");
                                option.value = repsOptions[i];
                                option.text = repsOptions[i];
                                repsDropdown.appendChild(option);
                            }
                            dropdownDiv.appendChild(repsDropdown);
                        }

                        document.addEventListener("DOMContentLoaded", function () {
                            generateDropdown();
                        });

                        function generateAdditionalDropdowns() {
                            if (selectedOption !== "") {
                                var dropdownDiv = document.getElementById("additionalDropdowns");
                                dropdownDiv.innerHTML = "";

                                var muscleGroupDropdown = document.createElement("select");
                                muscleGroupDropdown.name = "muscleGroup";
                                <?php foreach ($rows as $row) { ?>
                                    if ("<?php echo $row['eqip']; ?>" !== selectedOption) {
                                        var option = document.createElement("option");
                                        option.value = "<?php echo $row['eqip']; ?>";
                                        option.text = "<?php echo $row['eqip']; ?>";
                                        muscleGroupDropdown.appendChild(option);
                                    }
                                <?php } ?>
                                dropdownDiv.appendChild(muscleGroupDropdown);

                                var setsDropdown = document.createElement("select");
                                setsDropdown.name = "sets";
                                var setsOptions = ["1", "2", "3", "4", "5", "6"];
                                for (var i = 0; i < setsOptions.length; i++) {
                                    var option = document.createElement("option");
                                    option.value = setsOptions[i];
                                    option.text = setsOptions[i];
                                    setsDropdown.appendChild(option);
                                }
                                dropdownDiv.appendChild(setsDropdown);

                                var repsDropdown = document.createElement("select");
                                repsDropdown.name = "reps";
                                var repsOptions = ["8", "10", "12", "15", "20", "25"];
                                for (var i = 0; i < repsOptions.length; i++) {
                                    var option = document.createElement("option");
                                    option.value = repsOptions[i];
                                    option.text = repsOptions[i];
                                    repsDropdown.appendChild(option);
                                }
                                dropdownDiv.appendChild(repsDropdown);
                            }
                        }
                    </script>
                </form>
            </center>
        </div>
    </div>

    <footer>
        <h3>&copy; Developed by Satya Sreekar Pattaswami</h3>
    </footer>
</body>

</html>

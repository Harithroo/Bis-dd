<html>

<head>
        <title>Our tutors</title>
        <link rel=stylesheet type=text/css href="st.css?v=<?php echo time();?>">
</head>

<body>
        <?php
        echo "<h1>Online Academy</h1>";
        echo "<nav><h3>";
        echo "<a href='index.php'>Home</a> | <a href='Our tutors.php'>Our Tutors</a> | <a href='add.php'>Add tutor</a>";
        echo "</h3></nav>";
        include '../private/initialize.php'; // initialize the web site
        $varray = Tutor::find_all();
        echo "Click on tutor name for more details<br><br>";
        echo "<table class='all' border='1'><tr>";
        echo "<th>Name</th><th>Email</th><th>Subjects to teach</th><th>Update Subjects</th><th>Delete tutor</th></tr>";
        foreach ($varray as $tutor) {
                echo "<tr>";
                echo "<td> <a href= view.php?id=" . $tutor->ID . ">" . $tutor->Name . "</td>";
                echo "<td>" . $tutor->Email . " </td>";
                echo "<td>" . $tutor->Subjects_to_teach . " </td>";
                echo "<td> <a href= update.php?id=" . $tutor->ID . "> update </td>";
                echo "<td> <a href= delete.php?id=" . $tutor->ID . "> delete </td>";
                echo "</tr>";
        }
        echo "</table>";
        ?>
</body>

</html>
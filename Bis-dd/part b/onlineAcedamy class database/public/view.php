<html>

<head>
	<title>View Our tutors</title>
	<link rel=stylesheet type=text/css href="st.css?v=<?php echo time();?>">
</head>

<body>
	<?php
	echo "<h1>Online Academy</h1>";
	echo "<nav><h3>";
	echo "<a href='index.php'>Home</a> | <a href='Our tutors.php'>Our Tutors</a> | <a href='add.php'>Add tutor</a>";
	echo "</h3></nav>";
	include '../private/initialize.php'; // initialize the web site
	$id = $_GET['id'];
	if (!$id) {
		echo "problem";
	} else {
		$specific_tutor = Tutor::find_by_id($id);
		echo " <p> Details of the selected item </p> ";

		echo "<table>";
		echo "<tr> <td><b> Tutor id </b> </td> <td>" . $specific_tutor->ID . "</td> </tr>";
		echo "<tr> <td> <b> Name </b> </td> <td>" . $specific_tutor->Name . "</td> </tr>";
		echo "<tr> <td> <b> Email </b> </td> <td>" . $specific_tutor->Email . "</td> </tr>";
		echo "<tr> <td> <b> Phone number </b> </td> <td>" . $specific_tutor->Phone_number . "</td> </tr>";
		echo "<tr> <td> <b> Qualifications </b> </td> <td>" . $specific_tutor->Qualifications . "</td> </tr>";
		echo "<tr> <td> <b> Subjects to teach </b> </td> <td>" . $specific_tutor->Subjects_to_teach . "</td> </tr>";
		echo "<tr> <td> <b> Rate per hour </b> </td> <td>" . $specific_tutor->Rate_per_hour . "</td> </tr>";
		echo "</table>";
	}
	?>
</body>

</html>
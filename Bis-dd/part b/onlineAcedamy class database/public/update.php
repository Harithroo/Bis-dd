<html>

<head>
	<title>Update Our tutors</title>
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
	$specific_tutor = Tutor::find_by_id($id);	//call the find_by_id() function; we identify the record to be updated; get all its values

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		//if there is a post action create the array $tutorDetails and use the function merge_attributes($tutorDetails)
		$tutorDetails = [];									//in $tutorDetails array we collect all the new values 
		$tutorDetails['Name'] = $_POST['Name'];
		$tutorDetails['Email'] = $_POST['Email'];
		$tutorDetails['Phone_number'] = $_POST['Phone_number'];
		$tutorDetails['Qualifications'] = $_POST['Qualifications'];
		$tutorDetails['Subjects_to_teach'] = $_POST['Subjects_to_teach'];
		$tutorDetails['Rate_per_hour'] = $_POST['Rate_per_hour'];
		$specific_tutor->merge_attributes($tutorDetails);
		$results = $specific_tutor->update();
		if ($results) {
			echo "<br>Successful updating";
		}
		echo " <p> Details of the updated item </p> ";
		echo "<table>";
		echo "<tr> <td><b> Tutor id </b> </td> <td>" . $specific_tutor->ID . "</td> </tr>";
		echo "<tr> <td> <b> Name </b> </td> <td>" . $specific_tutor->Name . "</td> </tr>";
		echo "<tr> <td> <b> Email </b> </td> <td>" . $specific_tutor->Email . "</td> </tr>";
		echo "<tr> <td> <b> Phone number </b> </td> <td>" . $specific_tutor->Phone_number . "</td> </tr>";
		echo "<tr> <td> <b> Qualifications </b> </td> <td>" . $specific_tutor->Qualifications . "</td> </tr>";
		echo "<tr> <td> <b> Subjects to teach </b> </td> <td>" . $specific_tutor->Subjects_to_teach . "</td> </tr>";
		echo "<tr> <td> <b> Rate per hour </b> </td> <td>" . $specific_tutor->Rate_per_hour . "</td> </tr>";
		echo "</table>";
	} else {
		//if there is no post action present the values of the record in a form to be updated
		echo " <p> Use the following form to update the selected item <br> ";
		echo  "<form action=update.php?id=" . $id . " method='post'>";
		echo "<table>";
		echo "<tr> <td> Subjects_to_teach </td> <td> <textarea name='Subjects to teach' rows='5' cols='30'>$specific_tutor->Subjects_to_teach</textarea> </td> </tr>";
		echo "</table>";
		echo "<input type='hidden' name ='Name' value='$specific_tutor->Name' >";
		echo "<input type='hidden' name ='Email' value='$specific_tutor->Email' >";
		echo "<input type='hidden' name ='Phone_number' value='$specific_tutor->Phone_number' >";
		echo "<input type='hidden' name ='Qualifications' value='$specific_tutor->Qualifications' >";
		echo "<input type='hidden' name ='Rate_per_hour' value='$specific_tutor->Rate_per_hour' >";
		echo " <input type='submit' value='Update Record' />";
		echo "</form>";
	}
	?>
</body>

</html>
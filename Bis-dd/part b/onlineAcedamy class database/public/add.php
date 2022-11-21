<html>

<head>
	<title>Add Our tutors</title>
	<link rel=stylesheet type=text/css href="st.css?v=<?php echo time();?>">
</head>

<body>
	<?php
	echo "<h1>Online Academy</h1>";
	echo "<nav><h3>";
	echo "<a href='index.php'>Home</a> | <a href='Our tutors.php'>Our Tutors</a> | <a href='add.php'>Add tutor</a>";
	echo "</h3></nav>";
	include '../private/initialize.php'; // initialize the web site
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		$tutorDetails = [];									//in $tutorDetails array we collect all the new values 
		$tutorDetails['Name'] = $_POST['Name'];
		$tutorDetails['Email'] = $_POST['Email'];
		$tutorDetails['Phone_number'] = $_POST['Phone_number'];
		$tutorDetails['Qualifications'] = $_POST['Qualifications'];
		$tutorDetails['Subjects_to_teach'] = $_POST['Subjects_to_teach'];
		$tutorDetails['Rate_per_hour'] = $_POST['Rate_per_hour'];

		$tutor = new Tutor;						// we create a new object with the values we just entered
		$tutor->Name = $tutorDetails["Name"];
		$tutor->Email = $tutorDetails["Email"];
		$tutor->Phone_number = $tutorDetails["Phone_number"];
		$tutor->Qualifications = $tutorDetails["Qualifications"];
		$tutor->Subjects_to_teach = $tutorDetails["Subjects_to_teach"];
		$tutor->Rate_per_hour = $tutorDetails["Rate_per_hour"];

		$results = $tutor->create();		// we call the function 'create' that is a method of tutor class

		if ($results) {
			echo "New Record added successfuly";
		}
	} else {

		echo " <p> Use the following form to enter details for the new item (record / object) <br> ";

		echo  "<form action=add.php method='post'>";
		echo "<table>";
		echo "<tr> <td> Name </td> <td> <input type='text' name ='Name'> </td> </tr>";
		echo "<tr> <td> Email </td> <td> <input type='text' name ='Email'> </td> </tr>";
		echo "<tr> <td> Phone number </td> <td> <input type='text' name ='Phone_number'> </td> </tr>";
		echo "<tr> <td> Qualifications </td> <td> <input type='text' name ='Qualifications'> </td> </tr>";
		echo "<tr> <td> Subjects to teach </td> <td> <textarea name='Subjects_to_teach' rows='5' cols='30'> </textarea> </td> </tr>";
		echo "<tr> <td> Rate per hour </td> <td> <input type='text' name ='Rate_per_hour'> </td> </tr>";
		echo "</table>";
		echo " <br> <br> <input type='submit' value='Add New' />";
		echo "</form>";
	}
	?>
</body>

</html>
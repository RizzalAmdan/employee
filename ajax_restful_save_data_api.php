<?php	
	
	//header("Content-Type: application/json");

	$fullname 		= $_POST['fullname'];	
    $phone1 		= $_POST['phone1'];
    $phone2 		= $_POST['phone2'];
    $dob 		    = $_POST['dob'];
    $hired_date 	= $_POST['hired_date'];
    $department 	= $_POST['department'];
    $nationality    = $_POST['nationality'];
    $fullname	    = $_POST['fullname'];
    $address 	    = $_POST['address'];
    $email 		    = $_POST['email'];
    $gender 		= $_POST['gender'];
	
	$user_data = array("fullname"      => $fullname,
						"phone1"        => $phone1,
						"phone2"        => $phone2,
						"dob"           => $dob,
						"hired_date"    => $hired_date,
						"department"    => $department,
						"nationality"   => $nationality,
						"address"       => $address,
						"email"         => $email,
						"gender"        => $gender
						);
	//print_r($user_data);	
	
	if ($fullname=="") {
		print "Error ! check Fullname";
	
	} elseif ($email=="") {
		print "Error ! check Email";
	
	} elseif ($nationality=="") {
		print "Error ! check Nationality";
	
	} elseif ($department=="") {
		print "Error ! check Department";
	
	} elseif ($dob=="") {
		print "Error ! check D-O-B";
		
	} else {	
			/////////save into employee.csv file ///////////////
			// Path to the existing CSV file
			$file = 'employee.csv';

			// Open the CSV file in append mode
			if (($handle = fopen($file, 'a')) !== false) {
				// Write the data as a CSV row
				fputcsv($handle, $user_data);
				
				// Close the file after writing
				fclose($handle);
				
				echo "Data Inserted Succesfully.";
			} else {
				echo "Error opening the file.";
			}
			////////////////////////////////////////////////////	

			$json_data = json_encode($user_data);
			print $json_data;
	}
	
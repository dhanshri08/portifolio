<?php
require_once "conn.php"; // Fetch data

if (isset($_POST['name'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];

$sql = "UPDATE 	employees SET name='$name' WHERE id=$id";

// Execute the query
if ($link->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $link->error;
}
}
if (isset($_POST['address'])) {
    $id = $_POST['id'];
    $address = $_POST['address'];

	$sql = "UPDATE 	employees SET address='$address' WHERE id=$id";

	// Execute the query
	if ($link->query($sql) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $link->error;
	}
}
if (isset($_POST['contact'])) {
    $id = $_POST['id'];
    $contact = $_POST['contact'];

	$sql = "UPDATE 	employees SET contact='$contact' WHERE id=$id";

	// Execute the query
	if ($link->query($sql) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $link->error;
	}
}
if (isset($_POST['about'])) {
    $id = $_POST['id'];
    $about = $_POST['about'];

	$sql = "UPDATE 	employees SET about='$about' WHERE id=$id";

	// Execute the query
	if ($link->query($sql) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $link->error;
	}
}
if (isset($_POST['skills'])) {
    $id = $_POST['id'];
    $skills = $_POST['skills'];

	$sql = "UPDATE 	employees SET skills='$skills' WHERE id=$id";

	// Execute the query
	if ($link->query($sql) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $link->error;
	}
}
if (isset($_POST['email'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];

	$sql = "UPDATE 	employees SET email='$email' WHERE id=$id";

	// Execute the query
	if ($link->query($sql) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $link->error;
	}
}
	
?>

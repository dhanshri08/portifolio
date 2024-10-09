<?php
require_once "conn.php";// Fetch data
$sql = "SELECT * FROM employees";
$result = $link->query($sql);
?>
<style>


ul {
    list-style-type: none; 
    padding: 0;
    margin: 0;
}
li {
    display: inline;
    margin-right: 10px;
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Double Click to Edit</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    
    <ul id="roleList">
        <?php while ($row = $result->fetch_assoc()): ?>
		<h2> Personal Details </h2>
            <b>Name </b>- <li data-id="<?php echo $row['id']; ?>" class="editableName"><?php echo $row['name']; ?></li>
			</br></br>
			<b>Address </b>- <li data-id="<?php echo $row['id']; ?>" class="editableAddress"><?php echo $row['address']; ?></li>
			</br></br>
			<b>Contact </b>- <li data-id="<?php echo $row['id']; ?>" class="editableContact"><?php echo $row['contact']; ?></li>
			</br></br>
			
			<b>Email </b>- <li data-id="<?php echo $row['id']; ?>" class="editableEmail"><?php echo $row['contact']; ?></li>
			</br></br>
			<h2> About Section </h2>
			<li data-id="<?php echo $row['id']; ?>" class="editableAbout"><?php echo $row['about']; ?></li>
			</br></br>
			<h2> Skills Section </h2>
			<li data-id="<?php echo $row['id']; ?>" class="editableSkills"><?php echo $row['skills']; ?></li>
			
			
			
        <?php endwhile; ?>
    </ul>

    <script>
        $(document).ready(function() {
            $('.editableName').dblclick(function() {
                const li = $(this);
                const currentRole = li.text();
                const input = $('<input>', 
				{
                    value: currentRole,
                    type: 'text',
                    blur: function() {
                        const newRole = $(this).val();
                        const id = li.data('id');
                        
                        $.ajax({
                            url: 'update.php',
                            type: 'POST',
                            data: { id: id, name: newRole },
                            success: function(response) {
                                li.text(newRole); // Update the displayed role
                            }
                        });
                    }
                });
                li.html(input);
                input.focus(); // Focus on the input
            });
        });
		
		$(document).ready(function() {
            $('.editableAddress').dblclick(function() {
                const li = $(this);
                const currentRole = li.text();
                const input = $('<input>', 
				{
                    value: currentRole,
                    type: 'text',
                    blur: function() {
                        const newRole = $(this).val();
                        const id = li.data('id');	
                        // AJAX request to update the role
                        $.ajax({
                            url: 'update.php',
                            type: 'POST',
                            data: { id: id, address: newRole },
                            success: function(response) {
                                li.text(newRole); // Update the displayed role
                            }
                        });
                    }
                });
                li.html(input);
                input.focus(); // Focus on the input
            });
        });
		$(document).ready(function() {
            $('.editableContact').dblclick(function() {
                const li = $(this);
                const currentRole = li.text();
                const input = $('<input>', 
				{
                    value: currentRole,
                    type: 'text',
                    blur: function() {
                        const newRole = $(this).val();
                        const id = li.data('id');	
                        // AJAX request to update the role
                        $.ajax({
                            url: 'update.php',
                            type: 'POST',
                            data: { id: id, contact: newRole },
                            success: function(response) {
                                li.text(newRole); // Update the displayed role
                            }
                        });
                    }
                });
                li.html(input);
                input.focus(); // Focus on the input
            });
        });
		$(document).ready(function() {
            $('.editableEmail').dblclick(function() {
                const li = $(this);
                const currentRole = li.text();
                const input = $('<input>', 
				{
                    value: currentRole,
                    type: 'text',
                    blur: function() {
                        const newRole = $(this).val();
                        const id = li.data('id');	
                        // AJAX request to update the role
                        $.ajax({
                            url: 'update.php',
                            type: 'POST',
                            data: { id: id, email: newRole },
                            success: function(response) {
                                li.text(newRole); // Update the displayed role
                            }
                        });
                    }
                });
                li.html(input);
                input.focus(); // Focus on the input
            });
        });
		$(document).ready(function() {
            $('.editableAbout').dblclick(function() {
				
                const li = $(this);
                const currentRole = li.text();
                const textarea = $('<textarea>', {
                    text: currentRole,
                    blur: function() {
                        const newRole = $(this).val();
                        const id = li.data('id');

                        // AJAX request to update the role
                        $.ajax({
                            url: 'update.php',
                            type: 'POST',
                            data: { id: id, about: newRole },
                            success: function(response) {
                                if (response === "Success") {
                                    li.text(newRole); // Update the displayed role
                                } else {
                                    li.text(newRole);
                                }
                            },
                            error: function() {
                                alert("AJAX request failed.");
                            }
                        });
                    }
                });

                li.html(textarea); // Replace text with textarea
                textarea.focus(); // Focus on the textarea
            });
        });
	 $(document).ready(function() {
            $('.editableSkills').dblclick(function() {
				
                const li = $(this);
                const currentRole = li.text();
                const textarea = $('<textarea>', {
                    text: currentRole,
                    blur: function() {
                        const newRole = $(this).val();
                        const id = li.data('id');

                        // AJAX request to update the role
                        $.ajax({
                            url: 'update.php',
                            type: 'POST',
                            data: { id: id, skills: newRole },
                            success: function(response) {
                                if (response === "Success") {
                                    li.text(newRole); // Update the displayed role
                                } else {
                                    li.text(newRole);
                                }
                            },
                            error: function() {
                                alert("AJAX request failed.");
                            }
                        });
                    }
                });

                li.html(textarea); // Replace text with textarea
                textarea.focus(); // Focus on the textarea
            });
        });

/*
		$(document).ready(function() {
            $('.editableSkills').dblclick(function() {
                const li = $(this);
                const currentRole = li.text();
                const input = $('<input>', 
				{
                    value: currentRole,
                    type: 'textarea',
                    blur: function() {
                        const newRole = $(this).val();
                        const id = li.data('id');	
                        // AJAX request to update the role
                        $.ajax({
                            url: 'update.php',
                            type: 'POST',
                            data: { id: id, skills: newRole },
                            success: function(response) {
                                li.text(newRole); // Update the displayed role
                            }
                        });
                    }
                });
                li.html(input);
                input.focus(); // Focus on the input
            });
        });
*/
    </script>
</body>
</html>

<?php
$link->close();
?>

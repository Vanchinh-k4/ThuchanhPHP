<?php
// get the data from the form
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

// get the rest of the data for the form
$password = $_POST['password'];
$phone = $_POST['phone'];

// for the heard_from radio buttons, display a value of 'Unknown' if the user doesn't select a radio button
$heard_from = isset($_POST['heard_from']) ? $_POST['heard_from'] : 'Unknown';

// for the wants_updates check box, display a value of 'Yes' or 'No'
$wants_updates = isset($_POST['wants_updates']) ? 'Yes' : 'No';

// get the contact_via value
$contact_via = $_POST['contact_via'];

// get the comments
$comments = $_POST['comments'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <main>
        <h1>Account Information</h1>

        <label>Email Address:</label>
        <span><?php echo htmlspecialchars($email); ?></span><br>

        <label>Password:</label>
        <span><?php echo htmlspecialchars($_POST['password']); ?></span><br>

        <label>Phone Number:</label>
        <span><?php echo htmlspecialchars($_POST['phone']); ?></span><br>

        <label>Heard From:</label>
        <span><?php
            $heard_from = isset($_POST['heard_from']) ? $_POST['heard_from'] : 'Unknown';
            echo htmlspecialchars($heard_from);
        ?></span><br>

        <label>Send Updates:</label>
        <span><?php
            $wants_updates = isset($_POST['wants_updates']) ? 'Yes' : 'No';
            echo htmlspecialchars($wants_updates);
        ?></span><br>

        <label>Contact Via:</label>
        <span><?php echo htmlspecialchars($_POST['contact_via']); ?></span><br><br>

        <span>Comments:</span><br>
        <span><?php echo htmlspecialchars($_POST['comments']); ?></span><br>        
    </main>
</body>
</html>

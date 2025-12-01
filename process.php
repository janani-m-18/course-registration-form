<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fullname = htmlspecialchars(trim($_POST['fullname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $course = htmlspecialchars(trim($_POST['course']));
    $department = htmlspecialchars(trim($_POST['department']));
    $semester = htmlspecialchars(trim($_POST['semester']));
    $reason = htmlspecialchars(trim($_POST['reason']));
    
    $errors = array();
    
    if (empty($fullname)) $errors[] = "Full name is required";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email required";
    if (empty($phone) || !preg_match("/^[0-9]{10}$/", $phone)) $errors[] = "Phone must be 10 digits";
    if (empty($course)) $errors[] = "Course selection is required";
    if (empty($department)) $errors[] = "Department is required";
    if (empty($semester)) $errors[] = "Semester is required";
    if (empty($reason)) $errors[] = "Reason is required";
    
    if (count($errors) > 0) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Registration Error</title>
            <link rel="stylesheet" href="styles.css">
        </head>
        <body>
            <div class="container">
                <div class="error-box">
                    <h2>❌ Validation Errors</h2>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="index.php" class="back-btn">Go Back to Form</a>
                </div>
            </div>
        </body>
        </html>
        <?php
        exit();
    }
    
} else {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        
        <div class="success-box">
            <div class="success-icon">✓</div>
            <h1 class="success-title">Registration Completed Successfully</h1>
            <p class="success-message">Your course registration has been submitted successfully!</p>
        </div>

        <div class="details-box">
            <h2>📋 Registration Details</h2>
            
            <table class="details-table">
                <tr>
                    <td class="label">Full Name:</td>
                    <td class="value"><?php echo $fullname; ?></td>
                </tr>
                <tr>
                    <td class="label">Email:</td>
                    <td class="value"><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td class="label">Phone Number:</td>
                    <td class="value"><?php echo $phone; ?></td>
                </tr>
                <tr>
                    <td class="label">Course Selected:</td>
                    <td class="value"><strong><?php echo $course; ?></strong></td>
                </tr>
                <tr>
                    <td class="label">Department:</td>
                    <td class="value"><?php echo $department; ?></td>
                </tr>
                <tr>
                    <td class="label">Semester:</td>
                    <td class="value"><?php echo $semester; ?></td>
                </tr>
                <tr>
                    <td class="label">Reason:</td>
                    <td class="value"><?php echo nl2br($reason); ?></td>
                </tr>
            </table>

            <div class="button-group">
                <a href="index.php" class="back-btn">Register Another Course</a>
            </div>
        </div>

    </div>
</body>
</html>
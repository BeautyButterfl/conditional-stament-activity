<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Verification Result</title>
</head>
<body>
    <h2>Age Verification Result</h2>
    <?php
    $message = "Age is not provided.";
    if (!empty($_POST['age'])) {
        $message = ($_POST['age'] >= 18) ? "You are old enough to enter." : "You are too young to enter.";
    }
    echo $message;
    ?>
</body>
</html>

<?php
// process_quiz.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form inputs
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    
    // Build the command to call the Python script.
    // Use escapeshellarg() to secure each argument.
    $command = escapeshellcmd("python quiz_processor.py " . escapeshellarg($q1) . " " . escapeshellarg($q2) . " " . escapeshellarg($q3));
    
    // Execute the command and capture the output.
    $output = shell_exec($command);
    
    // Assume the Python script outputs JSON containing the quiz result.
    $resultData = json_decode($output, true);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Quiz Result</title>
</head>
<body>
  <h1>Your Quiz Result</h1>
  <?php
    if (isset($resultData)) {
        echo "<p>" . $resultData['result'] . "</p>";
    } else {
        echo "<p>There was an error processing your quiz. Please try again.</p>";
    }
  ?>
  <a href="quiz.php">Try Again</a>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['expression'])) {
    $expression = $_POST['expression'];

    // Basic input sanitization
    $expression = preg_replace("/[^0-9\+\-\*\/\(\)\.]/", "", $expression);
    try {
        // Evaluate the expression safely
        $result = eval("return $expression;");
        
        // Save the calculation to history
        file_put_contents("history.log", "$expression = $result\n", FILE_APPEND);

        // Redirect to the main page with result
        header("Location: index.php?result=" . urlencode($result));
    } catch (Exception $e) {
        header("Location: index.php?result=Error");
    }
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="post">
    <input type="text" name="input_string" required>
    <input type="submit" name="submit" value="submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $input = $_POST['input_string'];
    $length = strlen($input);
    
    echo "<h3>Input:</h3>";
    echo "<p>" . htmlspecialchars($input) . "</p>";
    
    echo "<h3>Output:</h3><p>";
    
    for ($i = 0; $i < $length; $i++) {
        $char = $input[$i];
        $output = strtoupper($char);
        $output .= str_repeat(strtolower($char), $length - 1);
        echo $output;
    }

    echo "</p>";
}
?>

</body>
</html>
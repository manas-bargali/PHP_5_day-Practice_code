<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <?php
    // Enable error reporting for debugging
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    function factorial($n) {
        if ($n < 0) {
            echo "Cannot compute factorial of negative numbers";
            return false;  // Return false to indicate error
        } elseif ($n == 0) {
            return 1;  // 0! = 1
        } else {
            $fact = 1;
            for ($i = $n; $i >= 1; $i--) {
                $fact *= $i;
            }
            return $fact;
        }
    }

    // Test the function (remove in production)
    echo "Factorial of 5: " . factorial(5) . "<br>";
    echo "Factorial of 0: " . factorial(0) . "<br>";
    echo "Factorial of -1: " . factorial(-1) . "<br>";
    ?>
</body>
</html>
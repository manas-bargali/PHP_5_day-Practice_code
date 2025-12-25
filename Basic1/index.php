<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
 ?>" method="get">
     <input type="number" name="num1" placeholder="enter first number">
     <select name="operator" >
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>  
     </select>
    <input type="number" name="num2" placeholder="enter second number">
    <button type="submit">Calculate</button>

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['num1'])) {
    $num1 = (float)$_GET['num1'];
    $num2 = (float)$_GET['num2'];
    $operator = $_GET['operator'];
    $result = '';

    switch ($operator) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'sub':
            $result = $num1 - $num2;
            break;
        case 'mul':
            $result = $num1 * $num2;
            break;
        case 'div':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Division by zero';
            }
            break;
        default:
            $result = 'Invalid operator';
    }

    echo "<p>Result: $result</p>";
}
?>

# cd /home/build-f-dn/Desktop/DSA_problems_Selftaught/programming_concepts/php/Basic1 && php -S localhost:8000
    
</body>
</html>
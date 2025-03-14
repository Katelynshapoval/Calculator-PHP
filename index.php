<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["operator"];
    $result = "";
    switch ($operator) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            $result = $num1 / $num2;
            break;
    }

    switch ($operator) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            if ($num2 == 0) {
                $result = "Cannot divide by zero";
            } else {
                $result = $num1 / $num2;
            }
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>

<body>
    <h1>PHP Simple Calculator</h1>
    <form method="GET" action="index.php">
        <label for="num1">Number 1: </label>
        <input type="number" name="num1" required>
        <br><br>
        <label for="num2">Number 2: </label>
        <input type="number" name="num2" required>
        <br><br>

        <label for="operator">Operator: </label>
        <select name="operator" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <br><br>

        <input type="submit" value="Calculate">
    </form>

    <h2>Result: <?php if (isset($result)) echo $result; ?></h2>
</body>

</html>
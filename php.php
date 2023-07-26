<?php
$result = '';
if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Cannot divide by zero';
            }
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Standard Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .calculator {
            max-width: 250px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .calculator input[type="number"], .calculator select {
            width: 100%;
            margin-bottom: 10px;
            padding: 5px;
        }
        .calculator input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <form method="post">
            <input type="number" name="num1" placeholder="Enter first number" required>
            <select name="operator" required>
                <option value="">Select Operator</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="number" name="num2" placeholder="Enter second number" required>
            <input type="submit" name="calculate" value="Calculate">
            <input type="text" value="<?php echo $result; ?>" readonly>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        #calculator {
            width: 100%;
            max-width: 350px;
            margin: 20px auto;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .calculator-button {
            width: 50px;
            height: 50px;
            font-size: 20px;
            text-align: center;
            line-height: 50px;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
        }

        .row {
            display: flex;
            justify-content: center;
        }

        .result {
            font-size: 24px;
            text-align: right;
            margin: 10px 0;
            padding: 5px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        @media only screen and (max-width: 768px) {
            .calculator-button {
                width: 40px;
                height: 40px;
                font-size: 18px;
                line-height: 40px;
            }
        }

        @media only screen and (max-width: 480px) {
            .calculator-button {
                width: 30px;
                height: 30px;
                font-size: 14px;
                line-height: 30px;
            }
        }
    </style>
</head>
<body>
        <center><h1>THE STANDARDED CALCULATOR</h1></center>
    <div id="calculator">
        <div class="result" id="display">0</div>
        <div class="row">
            <div class="calculator-button" onclick="clearDisplay()">C</div>
            <div class="calculator-button" onclick="deleteDigit()">&#9003;</div>
            <div class="calculator-button" onclick="appendCharacter('/')">/</div>
            <div class="calculator-button" onclick="appendCharacter('*')">*</div>
        </div>
        <div class="row">
            <div class="calculator-button" onclick="appendCharacter('7')">7</div>
            <div class="calculator-button" onclick="appendCharacter('8')">8</div>
            <div class="calculator-button" onclick="appendCharacter('9')">9</div>
            <div class="calculator-button" onclick="appendCharacter('-')">-</div>
        </div>
        <div class="row">
            <div class="calculator-button" onclick="appendCharacter('4')">4</div>
            <div class="calculator-button" onclick="appendCharacter('5')">5</div>
            <div class="calculator-button" onclick="appendCharacter('6')">6</div>
            <div class="calculator-button" onclick="appendCharacter('+')">+</div>
        </div>
        <div class="row">
            <div class="calculator-button" onclick="appendCharacter('1')">1</div>
            <div class="calculator-button" onclick="appendCharacter('2')">2</div>
            <div class="calculator-button" onclick="appendCharacter('3')">3</div>
            <div class="calculator-button" onclick="calculate()">=</div>
        </div>
        <div class="row">
            <div class="calculator-button" onclick="appendCharacter('0')">0</div>
            <div class="calculator-button" onclick="appendCharacter('.')">.</div>
        </div>
    </div>

    <script>
        let display = document.getElementById('display');
        let expression = '';

        function appendCharacter(char) {
            expression += char;
            updateDisplay();
        }

        function clearDisplay() {
            expression = '';
            updateDisplay();
        }

        function deleteDigit() {
            expression = expression.slice(0, -1);
            updateDisplay();
        }

        function calculate() {
            try {
                const result = eval(expression);
                expression = result.toString();
                updateDisplay();
            } catch (error) {
                expression = 'Error';
                updateDisplay();
            }
        }

        function updateDisplay() {
            display.innerText = expression;
        }
    </script>


     <center><footer> Desigined by <a href="https://okoronwachukwujr.netlify.app">Justme</a></center>
</body>
</html>


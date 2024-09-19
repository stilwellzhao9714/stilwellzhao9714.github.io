<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>簡易計算機</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .calculator {
            width: 220px;
            margin: 100px auto;
        }
        .display {
            width: 100%;
            height: 50px;
            font-size: 24px;
            text-align: right;
            padding-right: 10px;
            margin-bottom: 10px;
            border: none;
            background-color: #fff;
        }
        .buttons button {
            width: 50px;
            height: 50px;
            margin: 5px;
            font-size: 18px;
            cursor: pointer;
        }
        .buttons button:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <input type="text" class="display" disabled>
        <div class="buttons">
            <button onclick="append('7')">7</button>
            <button onclick="append('8')">8</button>
            <button onclick="append('9')">9</button>
            <button onclick="append('/')">÷</button>
            <button onclick="append('4')">4</button>
            <button onclick="append('5')">5</button>
            <button onclick="append('6')">6</button>
            <button onclick="append('*')">×</button>
            <button onclick="append('1')">1</button>
            <button onclick="append('2')">2</button>
            <button onclick="append('3')">3</button>
            <button onclick="append('-')">−</button>
            <button onclick="append('0')">0</button>
            <button onclick="append('.')">.</button>
            <button onclick="calculate()">=</button>
            <button onclick="append('+')">+</button>
            <button onclick="clearDisplay()">C</button>
        </div>
    </div>
    <script>
        function append(value) {
            document.querySelector('.display').value += value;
        }
        function calculate() {
            let expression = document.querySelector('.display').value;
            try {
                let result = eval(expression);
                document.querySelector('.display').value = result;
            } catch (error) {
                alert('表達式錯誤');
            }
        }
        function clearDisplay() {
            document.querySelector('.display').value = '';
        }
    </script>
</body>
</html>

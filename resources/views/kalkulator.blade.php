<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Sederhana</title>
	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
		}

		h1 {
			text-align: center;
		}

		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}

		input[type="text"] {
			width: 200px;
			padding: 5px;
			margin-bottom: 10px;
			text-align: right;
			border: none;
			border-radius: 5px;
			box-shadow: 0px 0px 5px grey;
		}

		.button {
			width: 50px;
			height: 50px;
			margin: 5px;
			background-color: #f2f2f2;
			border: none;
			border-radius: 5px;
			box-shadow: 0px 0px 3px grey;
			cursor: pointer;
		}

		.button:hover {
			background-color: #d9d9d9;
		}
	</style>
</head>
<body>
	<h1>Kalkulator Sederhana</h1>
	<div class="flex-container align-center">
		<input type="text" id="result" disabled>
        <br><br><hr>
		<button class="button" onclick="inputNumber('7')">7</button>
		<button class="button" onclick="inputNumber('8')">8</button>
		<button class="button" onclick="inputNumber('9')">9</button>
        <br>
		<button class="button" onclick="inputNumber('4')">4</button>
		<button class="button" onclick="inputNumber('5')">5</button>
		<button class="button" onclick="inputNumber('6')">6</button>
        <br>
		<button class="button" onclick="inputNumber('1')">1</button>
		<button class="button" onclick="inputNumber('2')">2</button>
		<button class="button" onclick="inputNumber('3')">3</button>
        <br>
		<button class="button" onclick="inputNumber('0')">0</button>
        <br>
		<button class="button" onclick="operation('*')">x</button>
		<button class="button" onclick="operation('+')">+</button>
		<button class="button" onclick="operation('-')">-</button>
        <br>
		<button class="button" onclick="operation('/')">:</button>
		<button class="button" onclick="clearResult()">C</button>
		<button class="button" onclick="calculate()">=</button>
    </div>

    <script type="text/javascript">
            let result = document.getElementById('result');

            function inputNumber(number) {
                result.value += number;
            }

            function operation(operator) {
                result.value += ' ' + operator + ' ';
            }

            function clearResult() {
                result.value = '';
            }

            function calculate() {
                let expression = result.value;
                result.value = eval(expression);
            }
    </script>
    </body>
    </html>

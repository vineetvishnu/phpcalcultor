<!DCOTYPE HTML5>
	<html>

	<head>
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Mate+SC&display=swap');

			body {
				
				font-family: 'Mate SC', serif;
				font-weight: 300;
				overflow-x: hidden;
				background-color: rgb(3, 16, 41);
			}

			h1{
				color: white;
				position: relative;
				top: 10%;
				left: 41%;
				animation: text-animate 2s ease infinite;
				
			}
			
			@keyframes text-animate{
				0%{transform: scale(0.9); color: chartreuse;}
				50%{transform: scale(1); color: white;}
				100%{transform: scale(0.9); color: chartreuse;}
			}
			
			table {
				box-shadow: 1px 1px 2px #fff, 0 0 25px #ffeded, 0 0 5px #ebebeb;
				border-radius: 12px;
				position: absolute;
				top: 30%;
				left: 50%;
				transform: translate(-50%);
			}

			td {
				width: 160px;
				border-radius: 12px;
				text-align: center;
			}

			tr {
				background-color: #032630;
				border-radius: 12px;
			}

			input {
				width: 130px;
				text-align: end;
				font-size: 25px;
				border-radius: 5px;
				border: 2px inset white;
				border-bottom: 1px solid black;
				border-right: 1px solid black;
				font-family: 'Mate SC', serif;
				font-weight: 500;

			}

			p {
				background-color: white;
				width: 130px;
				height:30px;
				font-size: 25px;
				border: 2px inset white;
				border-radius: 5px;
				color: black;
				font-family: 'Mate SC', serif;
				text-align: end;
				overflow-x: auto;

			}

			#output>input {
				text-align: center;
				background-color: #f7f0cb;
				font-size: 14px;
				border: 2px outset #fff;
				border-radius: 12px;
				margin: 10px 8px;
				padding: 4px;
			}

			select {
				font-family: 'Mate SC', serif;
				background-color: #f7f0cb;
				font-size: 14px;
				border-radius: 12px;
				margin: 10px 8px;
				padding: 4px;
			}

		</style>

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<title>
			basic php calculator
		</title>
	</head>

	<body>
		<h1>PHP Calculator</h1>
		<section id="calci">
			<form method="POST">
				<table border="1">

					<tr class="b1">
						<td colspan="1">
							<fieldset>
								<legend style=" color:white;">Input:</legend>

								<input type="text" id="a" name="num1"  value="0"><br><br>
								<input type="text" id="b" name="num2"  value="0">

							</fieldset>
							<select name="operation">
								<option value="SELECT">Select Operand</option>
								<option value="ADD">Addition</option>
								<option value="SUB">Subtraction</option>
								<option value="MUL">Multiplication</option>
								<option value="DIV">Division</option>
							</select>
						</td>

						<td colspan="1" id="output">

							<input id="submit-btn" type="submit" name="submit" value="Submit">

							<fieldset style="width: auto; height:88px;">

								<legend style=" color:white; h">Output:</legend>
								<p>

									<?php
							
									if(isset($_POST['submit'])){
																	
										$num1 = $_POST['num1'];
										$num2 = $_POST['num2'];
										$operation= $_POST['operation'];								
								
									switch($operation){
										case "SELECT": echo "NaN";
											break;
											
										case "ADD": $sum = $num1+$num2;
											echo "{$sum}";
											break;
											
										case "SUB": $sub = $num1-$num2;
											echo "{$sub}";
											break;
											
										case "MUL": $mul = $num1*$num2;
											echo "{$mul}";
											break;
											
										case "DIV": $div = $num1/$num2;
											echo "{$div}";
											break;
										
//										default: echo "Nan";
											
										}
									}
							 	?>

								</p>
							</fieldset>
						</td>
					</tr>
				</table>
			</form>
		</section>
	</body>

	</html>

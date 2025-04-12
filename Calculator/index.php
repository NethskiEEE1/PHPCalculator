 <!DOCTYPE html>
 <html>
 <head>
 	<title>Simple Calculator | PHP Dev</title>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	
 	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
 </head>
 <body>
 	<style>
 		body {
 			display: flex;
 			justify-content: center;
 			align-items: center;
 			min-height: 50vh;
 			margin: 0;
 			background: url("picture/calculator.jpg");
 		}

 		.container {
 			width: 100%;
 			max-width: 400px;
 			text-align: center;
 			padding: 20px;
 		}

 		.form-control, .btn {
 			width: 50%; /* Adjusted width */
 		}

 		.result {
 			font-size: 18px;
 			color: #333;
 		}
 	</style>
 	<div class="container" style="margin-top: 20px">
 		
 		<!-- Calculator form -->
 		<center><form method="post" action="calculator.php" class="form">
 			<div class="form-group me-2">
 				<label for="number1" class="firstName">First Number:</label>
 				<input name="number1" type="text" class="form-control" id="number1" required>
 			</div>
 			<div class="form-group me-2">
 				<label for="operation">Operation:</label>
 				<select name="operation" class="form-control" id="operation" required>
 					<option value="plus">Plus</option>
 					<option value="minus">Minus</option>
 					<option value="multiply">Multiply</option>
 					<option value="divided by">Divide</option>
 				</select>
 			</div>
 			<div class="form-group me-2">
 				<label for="number2">Second Number:</label>
 				<input name="number2" type="text" class="form-control" id="number2" required>
 			</div>
 			<button name="submit" type="submit" class="btn btn-primary">Calculate</button>
 		</form>
 	</div>
 </body>
 </html>
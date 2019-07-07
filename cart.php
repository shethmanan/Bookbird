<html>
	<head>
		<style type="text/css">
			body{
				background: #dfe3e6;
			}

			.bookname{
				font-size: 20px;
				font-weight: bold;
			}
			.bookqty{
				font-size: 20px;
				font-weight: bold;
				position: fixed;
				right: 60px;
			}
			.bg{
				padding-top: 94px;
			}
			.fore{					   
			    border: 3.5px solid #60676c;
			    border-radius: 20px;
			    background: azure;
			    padding: 30px;
			    padding-top: 40px;
			    color: #a95406;
			}		
			#c{
				font-size: 30px;
			    font-family: monospace;
			    font-weight: bold;
			    color: #7d3c00;
			    margin-left: 20px;
			}
			#b2{
				padding: 10px;
				border: none;
				background-color: #dfe3e6;
				color: white;
				border-radius: 8px;
				 position: absolute;
				 font-family: monospace;
			    font-size: 15px;
			    right: 30px;
			    bottom: 613.021;
			}
			#b1{
				padding: 17px;
			    border: none;
			    background-color: #a95406;
			    color: white;
			    border-radius: 8px;
			    
			    position: absolute;
			    right: 32px;
			    margin-top: 10px;
			    font-weight: 900;
			    font-family: monospace;
			    font-size: 20px;
			    letter-spacing: 1px;
			}
		</style>
	</head>
	<body>
		<div class="bg">
			<span id="c">Your Cart:</span>
			<input type="button" id="b2" value="Clear Cart">
			<div class="fore">
				<div>  <span class="bookname">Book Name</span> <span class="bookqty">Quantity</span></div>
				<hr>
			
		<?php
			// echo "asd";
			// $uname = "manan";
			$uname = $_GET["uname"];
			$dbname = "book_store";
			$tablename = "cart";
			$conn = new mysqli("localhost","root","",$dbname);
			if($conn->connect_error){
				die("connectoion failed". $conn->connect_error);
			}
			$sql = "select * from $tablename where uname LIKE '$uname'";
			$result = $conn->query($sql);
			if($result->num_rows > 0){

				while ($row = $result->fetch_assoc()) {
					$output_name = $row["pname"];
					$output_qty = $row["qty"];
					echo "<div> <span class='bookname'> $output_name </span> <span class='bookqty'>$output_qty</span> </div>";
				}
			}

		?>
		</div>
		<div>
			
			<input type="button" id="b1" value="Checkout ->">
		</div>
	</div>
	</body>
</html>
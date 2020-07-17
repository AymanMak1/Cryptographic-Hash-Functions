<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		* {
			margin: 0;

			box-sizing: border-box;
		}

		h1 {
			color: red;
			border: 4px solid black;
			margin: 16px;
			text-align: center;
		}

		.hash {
			font-size: 18px;
		}

		.length {
			color: green;
			font-weight: bold;
			font-size: 1.5rem;
		}

		.label {
			color: dodgerblue;
			font-weight: bold;
			font-size: 25px;
		}

		.sha1 {
			border: 2px solid red;
		}

	</style>
</head>

<body align="center">
	<h1>Hashes Functions example</h1>

	<div class="hash">
		<?php
            
            $name="Nada";
            // $str="a" 
            echo "<div class=\"label\"> md4 hash:<br> </div>";
            echo "<h3>" . hash("md4",$name) ."</h3>";
            echo "<div class=\"label\"> md5 hash:<br> </div>";
            echo "<h3>" . md5($name) ."</h3>";
    
            echo "<div class=\"label\"> sha1 hash:<br> </div>";
            echo "<h3>" . sha1($name) ."</h3>";
            echo "la longeur de hash sha1 du mot 'Nada' est :". "<div class=\"length\">". strlen(sha1($name))."</div>"."<br> <br>";

            echo "<div class=\"label\"> sha256 hash:<br> </div>";
            echo "<h3>" . hash("sha256",$name) ."</h3>";
			
            echo "<div class=\"label\"> sha384 hash:<br> </div>";
            echo "<h3>" . hash("sha384",$name) ."</h3>";
			
            echo "<div class=\"label\"> sha512 hash:<br> </div>";
            echo "<h3>" . hash("sha512",$name) ."</h3>";
            echo "la longeur de hash sha512 du mot 'Nada' est :"."<div class=\"length\">".strlen(hash("sha512",$name))."</div>"."<br> <br>";
			
            echo "<div class=\"label\">whirlpool hash:<br> </div>";	
            echo "<h3>" . hash("whirlpool",$name) ."</h3>";
			
            echo "<div class=\"label\"> tiger192,4 hash:<br> </div>";
            echo "<h3>" . hash("tiger192,4",$name) ."</h3>";
        
        ?>


	</div>
</body>

</html>

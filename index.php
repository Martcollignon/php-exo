

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title> S'il te plait, prête moi ta voiture ! </title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="_styles/normalize.css" />
		<link rel="stylesheet" type="text/css" href="_styles/style.css" />
		
		</head>

	<body>
		<div class="container">
		<h1>Dis papa... Est-ce que je peux avoir ta BM si... </h1>
		
		<?php
			error_reporting(E_WARNING | E_ERROR);
		
			$a = $_GET["a"];
			$b = $_GET["b"];
			$c = $_GET["c"];
			$d = $_GET["d"];
			$e = $_GET["e"];
			$f = $_GET["f"];
			
			if((isset($a) && $a =="true") && (isset($b) && $b =="true") && (isset($c) && $c =="true") && (isset($d) && $d =="true") && (isset($e) && $e =="true") && (isset($f) && $f =="true")){
				echo "<div class='reponse'> Ca va pas non plus, petit fils de p*te </div>";
			}
			
			else if((isset($a) && $a =="true") && (isset($b) && $b =="false") && (isset($c) && $c =="true") && (isset($d) && $d =="true") && (isset($e) && $e =="true") && (isset($f) && $f =="true")){
				echo "<div class='reponse'> Ca va, allais... <img src='http://blog.chacun-son-auto.com/wp-content/uploads/2014/08/2014-BMW-i8.jpg' width='400' /> </div>";
			}
			
			else if((isset($a) && $a =="false") && (isset($b) && $b =="false") && (isset($c) && $c =="false") && (isset($d) && $d =="false") && (isset($e) && $e =="false") && (isset($f) && $f =="false")){
				echo "<div class='reponse'> Tu me poses une question là ? </div>";
			}
			
			
			
		?>
		
		<form method="get" class="pure-form">
			
			<div class="grid_left">
				<p>Pour aller à l'école</p> 
				<input type="radio" name="a" value="true" id="a_true" required="required">
				<label for="a_true">Oui</label>
				<input type="radio" name="a" value="false" id="a_false" required="required" checked>
				<label for="a_false">Non</label>
				
				
				<p>Pour aller au resto avec ma copine</p> 
				<input type="radio" name="b" value="true" required="required" id="b_true">
				<label for="b_true">Oui</label>
				<input type="radio" name="b" value="false" required="required" id="b_false" checked>
				<label for="b_false">Non</label>
				
				
				<p>Pour aller chercher tata à la gare</p> 
				<input type="radio" name="c" value="true" required="required" id="c_true">
				<label for="c_true">Oui</label>
				<input type="radio" name="c" value="false" required="required" id="c_false" checked>
				<label for="c_false">Non</label>
			</div>
			<div class="grid_right">
			
				<p>Après je nettoierais la voiture</p> 
				<input type="radio" name="d" value="true" required="required" id="d_true">
				<label for="d_true">Oui</label> 
				<input type="radio" name="d" value="false" required="required" id="d_false" checked>
				<label for="d_false">Non</label>
			
			
				<p>J'irais faire les courses</p> 
				<input type="radio" name="e" value="true" required="required" id="e_true">
				<label for="e_true">Oui</label> 
				<input type="radio" name="e" value="false" required="required" id="e_false" checked>
				<label for="e_false">Non</label>
				
				
				<p>J'irais t'acheter un cadeau</p> 
				<input type="radio" name="f" value="true" required="required" id="f_true">
				<label for="f_true">Oui</label>
				<input type="radio" name="f" value="false" required="required" id="f_false" checked>
				<label for="f_false">Non</label>
			</div>
			
			<div class="clear"></div>
			
			
			<input type="submit" value="Allez, s'il te plaît papa !">
			<a href="" class="git">Le code sur Github</a>
		
		</form>
		
		
		
		</div>
	</body>
</html>
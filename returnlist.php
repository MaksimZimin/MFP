<?php 
$test = 'Наименование списка ul';
$tst = 'Наименование списка ol';
$arr = ['Sony', 'Panasonic', 'Samsung'];
$arrOl = ['Jaguar', 'Bently', 'Rover'];
$h3_1 = 'Наименование списка ul_1';
$h3_2 = 'Наименование списка ol';
$ul;
$ol; 

 	function outputDate($h3_1) {
 		$html = '<h3>';
 		$html .= $h3_1;
 		$html .= '</h3>';
 		return $html;
	}

	print_r(outputDate($h3_1));
?>

<?phpp

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
	<body>
			<div>
				<h3>Наименование списка ul</h3>
				<ul>
					<li>Sony</li>
					<li>Panasonic</li>
					<li>Samsung</li>
				</ul>
			</div>
			
			<div>
			<h3>Наименование списка ol</h3>
				<ol>
					<li>Jaguar</li>
					<li>Bently</li>
					<li>Rover</li>
				</ol>
			</div>
			<?php 
			echo $test; 
			echo '<h3>' . $test . '</h3>';
			echo '<h3>' . $tst . '</h3>';
			?>


		<ul>
			<?php foreach ($arr as $item) { ?>
				<li>
					<?php echo $item; ?>
				</li>
			<?php } ?>
		</ul>

		<ol>
			<?php foreach ($arrOl as $item) : ?>
				<li>
					<?php echo $item; ?>
				</li>
			<?php endforeach ?>
		</ol>					
	</body>
</html>



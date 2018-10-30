<!DOCTYPE html>
<html>
<head>
	<title>Tugas Tekotek</title>
</head>
<body>
	<?php
	echo "<h3>Tekotek-kotek anak ayam turun 100</h3>";
	echo "<br>";
	for ($i=99; $i>=1 ; $i--) {
		if($i%2==0){
			echo '<p style="color:brown; font-family:"Helvetica"">'."Mati satu tinggal $i".'</p>';
		}
		else{
			echo '<p style="color:orange; font-family:"Helvetica"">'."Mati satu tinggal $i".'</p>';
		}
	}
	?>
</body>
</html>
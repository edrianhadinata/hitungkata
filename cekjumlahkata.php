<?php
	
	include('ClassKata.php');
	
	//web form untuk mengecek jumlah kata 
	//author : edrian hadinata
	
	$pesan ="Belum ada proses";
	if(isset($_POST['cek'])):
		
		$CekKata =new Kata($_POST['karangan']);
		
		$pesan = "Jumlah kata : ".$CekKata->getJumlahKarakter();
		
		echo "<div style='background-color:#f056f0;padding:10px;'>".$pesan."</div>";
	else:
		echo "<div style='background-color:#f0f034;padding:10px;'>".$pesan."</div>";
	endif;
?>

<html>
	<head>
		<title> Cek Jumlah Kata </title>
	</head>
	
	<body>
		<h2>Cek Jumlah Kata dalam Karangan</h2>
		<form method='post' action='cekjumlahkata.php'>
			<input type='hidden' name='cek' value='1'>
			<p>Karangan : </p>
			<textarea cols='100' rows='20' name='karangan'></textarea>
			<br>
			<br>
			<input type='submit' value='Cek Jumlah'>
		</form>
	
	</body>
</html>

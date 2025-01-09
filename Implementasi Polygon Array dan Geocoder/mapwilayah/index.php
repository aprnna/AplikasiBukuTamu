<!DOCTYPE html>
<html>
<head>
	<title>Kmz Wilayah</title>
</head>
<body>
	<form action="index.php" method="post">
		<label>Array Coordinate</label><br>
		<textarea name="coordinate" rows="15" style="width: 1000px"></textarea><br>
		<input type="submit" value="Proses" name="proses_coord"><br>
		<label>Hasil :</label><br>
		<p>
			<?php
				if(isset($arr_hasil)){
					echo "tes";
				}
			?>
		</p>
	</form>
</body>
</html>
<?php
if(isset($_POST['proses_coord'])){
	try	{
		$arr_coord = explode(",", $_POST['coordinate']);
	} catch(Exception $e){
		echo $e;
	}
	if(count($arr_coord)>1){		
		foreach ($arr_coord as $key => $value) {
			if($key % 2 == 0){				
				$lng = $value;
			} else {
				$lat = $value;
			}
			if($key>0){
				echo '{lat : '.$lat.', lng : '.$lng.'},<br>';
			}
		}
		//var_dump($arr_coord);	
	}
}
?>
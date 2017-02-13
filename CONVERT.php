<?php 
	
	
	$array_base = array(2,8,10,16);
	$json = array();
	$json["data"] = array();
	$date = date("Y-m-d H:i:s");
	
	foreach ($array_base as $key => $base) {
		if($base !== $_POST["base"]*1){
			
			$data["numBe"] = $_POST["number"];
			$data["baseBe"] = $_POST["base"];
			$data["numAf"] = base_convert($_POST["number"],$_POST["base"]*1,$base);
			$data["baseAf"] = $base;
			array_push($json["data"], $data);
		}

	}
	$json["date"] = $date;
	
	echo json_encode($json); 
?>
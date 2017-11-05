<?php
	$res = isset($_POST["ho_ten"]) ? $_POST["ho_ten"] : "";
	//var_dump(isset($_POST["ho_ten"]));
	$ret = "";
	if($res){
		$ret = [
			"data" => [
				"ho_ten" => $res
			],
			"error_code" => "success"
		];
	}
	else { 
		$ret = [
			"data" => "",
			"error_code" => "failure"
		];
	}
	echo json_encode($ret);
?>
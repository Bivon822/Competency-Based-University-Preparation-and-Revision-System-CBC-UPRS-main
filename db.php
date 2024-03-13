<?php
require('connect.php');
function create($table,$data)
{
	global $conn;
	//$dql = "INSERT INTO users SET(username=?, admin=?, email=?, password=?) 
	$sql ="INSERT INTO $table SET ";

	 $i = 0;
		foreach ($data as $key => $value) {
			if($i == 0){
				$sql = $sql . " $key=?";
			}else{
				$sql = $sql . ", $key=?";
			}
			$i++;
		}
		$stmt = executeQuery($sql,$data);
		$id = $stmt->insert_id;
		return $id;

} 

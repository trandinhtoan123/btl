<?php
$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");
$query = "SELECT * FROM tbl_sample ORDER BY id";
$statement = $connect->prepare($query);
if($statement->execute())
{
	while($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		$data[] = $row;
	}

	echo json_encode($data);
}

?>


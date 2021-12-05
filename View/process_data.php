<?php

$connect = new PDO('mysql:host=localhost;dbname=blog', 'louay', '010607.Lk');

if(isset($_POST["query"]))
{	

	$data = array();

	$condition = preg_replace('/[^A-Za-z0-9\- ]/', '', $_POST["query"]);

	$query = "
	SELECT title FROM articles 
		WHERE title LIKE '%".$condition."%' 
		ORDER BY post_id DESC 
		LIMIT 10
	";

	$result = $connect->query($query);

	$replace_string = '<b>'.$condition.'</b>';

	foreach($result as $row)
	{
		$data[] = array(
			'title'		=>	str_ireplace($condition, $replace_string, $row["title"])
		);
	}

	echo json_encode($data);
}

?>
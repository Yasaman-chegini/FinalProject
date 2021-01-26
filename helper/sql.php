<?php 


try 
{
     $conn = new PDO("mysql:host={$config['db']['servername']};dbname={$config['db']['dbname']};charset=utf8", $config['db']['username'], $config['db']['password']);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
{
     echo "Connection failed: " . $e->getMessage();
    die("site nemitone kaar kone");

    // exit();
}
function sqlSelect2(){
	echo "string";
}
function sqlSelect($table , $cols  = [] , $order = ["id" => "DESC"] , $limit = [ 0 , 100] , $leftJoin = [] , $where = [] , $groupBy=[]    )
{
	GLOBAL $conn;


	// SELECT username,name 
	//from users 
	// left join posts on post.id = users.id
	// left join articles on articles.id = users.id

	//where

	// GROUP BY seed

	// ORDER BY
	// LIMIT
	$query = [];
	$query[] = "SELECT";
	if (count($cols) == 0) 
		$query[] = "*";
	else
		$query[] = join(" , " , $cols);

	$query[] = "FROM";
	$query[] = $table;

	foreach ($leftJoin as $key => $value) 
		$query[] = "LEFT JOIN {$value['table']} ON {$value['col_1']} = {$value['col_2']}";

	if (is_array($where))
		$query[] = whereGenerator($where);
	else if(is_string($where))
		$query[] = $where;

	if (count($groupBy) > 0) 
	{
		$query[] = "GROUP BY";
		$query[] = join(" , " , $groupBy); 
	}


	if (count($order) > 0) 
	{
		$query[] = "ORDER BY";
		$temp = [];
		foreach ($order as $key => $value) 
		{
			$temp[] = "{$key} {$value}";
		}
		$query[] = join(" , " , $temp); 
	}

	if (count($limit) > 0) 
	{
		$query[] = "LIMIT";
		$query[] = join(" , " , $limit);
	}


	$query = join(" " , $query);

	$stmt = $conn->prepare($query);

	if (is_array($where))
		foreach ($where as $key => $value) 
		{
			$coltemp = ":" . str_replace(".", "", "{$value['key']}w{$key}");
			$stmt->bindValue("{$coltemp}" , $value['value']);
		}
	$stmt->execute();



	return [
			"error" => false ,
			"errors" => [] ,
			"query" => $query , 
			"result" => $stmt->fetchAll(PDO::FETCH_OBJ) ,

			];


}

function sqlDelete($table , $where)
{
	GLOBAL $conn;
	// DELETE FROM users WHERE id = 2 AND name LIKE 
	$query = [];
	$query[] = "DELETE FROM ";
	$query[] = $table;
	if (is_array($where))
		$query[] = whereGenerator($where);
	else if(is_string($where))
		$query[] = $where;

	$query = join(" " , $query);


	$stmt = $conn->prepare($query);

	if (is_array($where))
		foreach ($where as $key => $value) 
		{
			$coltemp = ":" . str_replace(".", "", "{$value['key']}w{$key}");
			$stmt->bindValue("{$coltemp}" , $value['value']);
		}

	$stmt->execute();


	return [
			"error" => false ,
			"errors" => [] ,
			"query" => $query , 
			"rowCount" => $stmt->rowCount() ,

			];
	

}

function sqlInsert($table , $data)
{
	GLOBAL $conn;

	// INSERT INTO users (username , password) VALUES (:username , :password)

	// $cols = "";
	// $values;

	// foreach ($data as $key => $value) 
	// { 
	// 	$cols .= $key . ",";
	// }
	// $cols = substr($cols, 0 , strlen($cols) - 1);
	// echo $cols;

	// var_dump(array_keys($data));
	// $cols = join(" , " , array_keys($data));
	// echo $cols;

	// $values =  ":".join(" , :" , array_keys($data));
	// echo $values;

	$query = [];
	$query[] = "INSERT INTO";
	$query[] = $table;
	$query[] = "(";
	$query[] = join(" , " , array_keys($data));
	$query[] = ")";
	$query[] = "VALUES";
	$query[] = "(";
	$query[] = ":".join(" , :" , array_keys($data));
	$query[] = ")";

	$query = join(" " , $query);
	// echo $query;
	$stmt = $conn->prepare($query);
	foreach ($data as $key => $value) 
	{
		$stmt->bindValue(":{$key}" , $value);
	}
	$stmt->execute();


	return [
			"error" => false ,
			"errors" => [] ,
			"query" => $query ,
			"lastInsertId" => $conn->lastInsertId()

			];





}

function sqlUpdate($table , $data , $where)
{
	GLOBAL $conn;
	// UPDATE users SET username = :username , password = :password where 
 	$query = [];
 	$query[] = "UPDATE";
 	$query[] = $table;
 	$query[] = "SET";

 	$temp = [];
 	foreach ($data as $key => $value) 
 	{
 		$temp[] = "{$key} = :{$key}";
 	}
 	$query[] = join( " , " , $temp);

	if (is_array($where))
		$query[] = whereGenerator($where);
	else if(is_string($where))
		$query[] = $where;



	$query = join(" " , $query);


	$stmt = $conn->prepare($query);

	if (is_array($where))
		foreach ($where as $key => $value) 
		{
			$coltemp = ":" . str_replace(".", "", "{$value['key']}w{$key}");
			$stmt->bindValue("{$coltemp}" , $value['value']);
		}

	foreach ($data as $key => $value) 
	{
		$stmt->bindValue(":{$key}" , $value);
	}
	$stmt->execute();

	return [
			"error" => false ,
			"errors" => [] ,
			"query" => $query ,
			"rowCount" => $stmt->rowCount() ,

			];

}


function whereGenerator($data)
{
	$query = [];
	foreach ($data as $key => $value) 
	{
		$coltemp = ":" . str_replace(".", "", "{$value['key']}w{$key}");
		$temp = "{$value['key']} {$value['operation']} {$coltemp}";
		if (isset($value['condition']) && $key < count($data) - 1 ) 
			$temp .= " {$value['condition']}";
		$query[] = $temp;
	}
	$query = join(" " , $query);
	if (strlen($query) > 0) 
		$query = "WHERE ".$query;
	return $query;
}


?>
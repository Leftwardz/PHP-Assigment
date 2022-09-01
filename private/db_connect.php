<?php 

function db_connect() {
  	$connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  	if ($connection->connect_errno){
  		$error = $connection->connect_error;
  		$msg = 'Error to connecto into database: ';
  		$msg .= $error . $connection->errno;
  		exit($msg);
  	}
  	return $connection;
}

function db_disconnect($connection){
	if(isset($connection)){
		$connection->close();
	}
}

?>
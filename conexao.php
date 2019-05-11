<?php 
	
	function db_connect(){
	    $conn = new PDO("mysql:host=localhost;dbname=crudnayra", "root", "");
	  
	    return $conn;
	}

?>
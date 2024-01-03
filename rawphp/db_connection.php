<?PHP 
$con=mysql_connect("db","user","password");
if(!$con){
	die("Could not connect ".mysql_error());
	}
	mysql_select_db("users",$con);
?>

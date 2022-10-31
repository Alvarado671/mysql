<?php
$db_host="bwdbtmhxbumbfzcgxk9r-mysql.services.clever-cloud.com"; //localhost server 
$db_user="uhyhffzwak3dojfu";	//database username
$db_password="ahulrS1V2qeEzgoaqecZ";	//database password   
$db_name="bwdbtmhxbumbfzcgxk9r";	//database name

try
{
	$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}

?>




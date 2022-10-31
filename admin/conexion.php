<?php
function conectar(){
    $host="bwdbtmhxbumbfzcgxk9r-mysql.services.clever-cloud.com";
    $user="uhyhffzwak3dojfu";
    $pass="ahulrS1V2qeEzgoaqecZ";
    $bd="bwdbtmhxbumbfzcgxk9r";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
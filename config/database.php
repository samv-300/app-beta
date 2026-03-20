<?php
//Local database configuration 
$local_host     = 'localhost'; //127.0.0.1
$local_dbname   = 'app_beta';
$local_username = 'postgres';
$local_password = 'unicesmag';
$local_port     = '5432';

//Supabase database configuration 
$supa_host      = 'aws-1-us-east-2.pooler.supabase.com';
$supa_dbname    = 'postgres';
$supa_username  = 'postgres.pqkxsdvsnoundpaauxtk';
$supa_password  = "unicesmag@@";
$supa_port      = "6543";

$local_data_connection =  "
    host=$local_host  
    dbname=$local_dbname
    user=$local_username
    password=$local_password
    port=$local_port   
";
$supa_data_connection =  "
    host=$supa_host  
    dbname=$supa_dbname
    user=$supa_username
    password=$supa_password
    port=$supa_port   
";

//local connection
$local_conn = pg_connect($local_data_connection);
if(!$local_conn) {
    echo "Error: Unable to connect to local database ";
    exit();
}else{
    echo "Local succes connection !!!";
}
//supa connection
/*$supa_conn = pg_connect($supa_data_connection);
if(!$supa_conn) {
    echo "<br> Error: Unable to connect to supabase database ";
    exit();
}else{
    echo "<br>Supabase succes connection !!!";
}

//"database configuration file:local conn"
*/
 ?>

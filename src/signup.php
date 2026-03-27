<?php 
//CONECTARSE A LA BASE DE DATOS 
include('../config/database.php');

//get data
$f_name     =   $_POST['fname' ]  ;
$l_name     =   $_POST['lname' ]  ;
$e_mail     =   $_POST['email' ]  ;
$m_phone    =   $_POST['mphone']  ;
$p_sswd     =   $_POST['psswd']  ;
$enc_pass   = md5($p_sswd);

//query to insert into SQL
$sql ="INSERT INTO users(firstname, lastname, email, mobile_phone, password) 
    values('$f_name', '$l_name', '$e_mail','$m_phone','$enc_pass')";
//execute query
pg_query($sql);



$checkEmail = "SELECT * FROM USERS WHERE email = '$e_mail'";
$resultEmail = pg_query($local_conn, $checkEmail);

if (pg_num_rows($resultEmail) > 0) {
    echo "Error: el email ya está registrado";
    exit;
}

$checkPhone = "SELECT * FROM USERS WHERE mobile_phone = '$m_phone'";
$resultPhone = pg_query($local_conn, $checkPhone);

if (pg_num_rows($resultPhone) > 0) {
    echo "Error: el número de teléfono ya está registrado";
    exit;
}

$enc_pass = password_hash($p_sword, PASSWORD_BCRYPT);

?>
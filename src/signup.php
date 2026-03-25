<?php 
//CONECTARSE A LA BASE DE DATOS 
include('../config/database.php');

//get data
$f_name     =   $_POST['fname' ]  ;
$l_name     =   $_POST['lname' ]  ;
$e_mail     =   $_POST['email' ]  ;
$m_phone    =   $_POST['mphone']  ;
$p_sswd     =   $_POST['passwd']  ;
$enc_pass   = md5($p_sswd);

//query to insert into SQL
$sql ="INSERT INTO users(firstname, lastname, email, mphone, password) 
    values('$f_name', '$l_name', '$e_mail','$m_phone','$enc_pass')";
//execute query
pg_query($sql);

?>
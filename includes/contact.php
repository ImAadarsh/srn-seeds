<?php
include ("connect.php");


$data_array =  array(
    "email" => $_POST['email'],
    "name" => $_POST['name'],
    "phone" => $_POST['phone'],
    "message" => $_POST['comments'],
    
);
    $make_call = callAPI1('POST', 'addContact', $data_array,null);
    $response = json_decode($make_call, true);
    if($response['message']){
        echo "<script>alert('".$response['message']."')
        window.location.href='../index.php';
        </script>";
    }  

?>
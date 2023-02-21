<?php
if(isset($_POST)){
    $countryCode = $_POST['countryCode'];
    $phone = $_POST['number'];
    $message = urlencode($_POST['message']);
    if(isset($_POST['use_web']) && $_POST['use_web']  == "on"){
        $use_web = "1";
    }
    else{
        $use_web = "0"; 
    }
    ;
    $code = "";
    $data = "https://api.whatsapp.com/send/?phone=$countryCode$phone&text=$message&type=phone_number&app_absent=$use_web";
    header("Location: $data");
}
?>
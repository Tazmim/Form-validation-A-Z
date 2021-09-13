<?php

//validate
function validation($msg,$type='danger'){

    return "<p class=\"alert alert-{$type}\">{$msg}
    <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";

}

//email check

function emailcheck($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;

    }
    else{
        return false;

    }

}
// inst email check
function instEmail(  $email, array $mails)
{
    $mail_arr = explode('@',$email);
    $last = end($mail_arr);

    //return $last;

    if(in_array($last,$mails)){

        return true;
    }
    else{
        return false;
    }
    //phone number

   



}
//phone number validation

function phone_Num($cell){

    if(substr($cell,0,2)=='01'||substr($cell,0,4)=='8801'||substr($cell,0,5)=='+8801'){
        return true;

    }
    else {
        return false;
    }

   
    
}
//username validation

function username($uname){
    if(strlen($uname)<=5 || strlen($uname)>=70){
        return false;
    }
    else{
        return true;
    }



}

//Holding data in form

function hold_data($name)
{
  if(isset($_POST[$name]))
  {
      echo $_POST[$name];
  }
  else{
      echo "";
  }
    
}
//form clean

function form_clen(){

    $_POST = "";
}

















?>
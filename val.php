
<?php

$errors = []; 
//validate name 
if(empty($name)){
    $errors['name'] = "Field Required"; 
}elseif(!filter_var($name,FILTER_VALIDATE_STRING)){
    $errors['name']   = "Invalid name";
 }


//validate email 
if(empty($email)){
    $errors['email'] = "Field Required";
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
   $errors['Email']   = "Invalid Email";
}

// validate password 
if(empty($password)){
    $errors['password'] = "Field Required";
}elseif(strlen($password) < 6){
    $errors['Password'] = "Length Must be >= 6 characters";
}


// validate address
if(empty($address)){
    $errors['address'] = "Field Required";
}elseif(strlen($address) < 10){
    $errors['address'] = "Length Must be >= 10 characters";
}

//validate url
if(empty($url)){
    $errors['url'] = "Field Required"; 
}elseif(!filter_var($email,FILTER_VALIDATE_URL)){
    $errors['url']   = "Invalid url";
 }




?>


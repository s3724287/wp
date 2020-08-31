<?php

session_start();

    //define variables and set to empty values

    


if (isset($_COOKIE["remember"] )) {
    $name = $_COOKIE["name"];
    $email = $_COOKIE["email"];
    $phone = $_COOKIE["phone"];
} else {
    $name = "";
    $email = "";
    $phone = "";
}

    $name_error = $email_error =$phone_error = " ";
    $success = " ";

    //form is submited with POST method
    if($_SERVER["REQUEST_METHOD"] == "POST"){


    if(empty($_POST["name"]))      
    {
        $name_error = "Name is required ";

    } else if (preg_match("/^[a-zA-Z \-.']{1,100}$/", $_POST["name"])) {
 
        $name = $_POST["name"];

    
    }else{
        $name_error = "Incorrect characters";
            
        }
        
    //email Required       
    if(empty($_POST["email"])){

    $email_error = "email is required" ;


    } else{


    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
        $email = $email;
    }

        $email_error = "Did you mean to type this: {$email} ";  
    }

    //
    if(empty($_POST["subject"])){
        $subject = " ";

        }else{

            $subject = preg_replace('/[\x00-\x1F\x7F]/u', '', $_POST["subject"]);
            $subject = $_POST["subject"]; 

        }




    //phone number required
    if(preg_match("/^(\(04\)|04|\+614)( ?\d){8}$/" , $_POST["phone"])){

        $phone = $_POST["phone"];

    
    }else{
        

        $phone_error = "Only Australian number are allowed";

    }


    if(empty($_POST["message"])){
    $message = "";    

    }else{
    
        $message = preg_replace('/[\x00-\x1F\x7F]/u', '', $_POST["message"]);
        $message = $_POST["message"];

    }

    if(isset($_POST["remember"])) {
        setcookie ("name" ,$name,time()+ (10 * 365 * 24 * 60 * 60));
        setcookie ("email" ,$email,time()+ (10 * 365 * 24 * 60 * 60));
        setcookie ("phone" ,$phone,time()+ (10 * 365 * 24 * 60 * 60));
        setcookie ("subject" ,$subject,time()+ (10 * 365 * 24 * 60 * 60));
    }

    save_data($email, $name, $subject, $message);

    }

    



function save_data($email, $name, $subject, $message  )
{

    $array = array("{$email}, {$name}, {$subject}, {$message}") ;
                    
  
    // opening the file "data.csv" for writing 
    $file = fopen("../a3/mail.csv","w"); 
      
    // formatting each row of data in CSV format  
    // and outputting it 
    foreach ($array as $line) 
    { 
        fputcsv($file, explode(',', $line)); 
    } 
      
    // closing the file 
    fclose($file); 


}
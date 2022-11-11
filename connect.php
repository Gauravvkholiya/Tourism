<?php
    $firstname = filter_input(INPUT_POST,'firstname');
    
    $email = filter_input(INPUT_POST,'email');
    $password = filter_input(INPUT_POST,'password');
    echo $firstname;
    $conn = new mysqli("localhost","root","","toursim");
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
        
    }else{
        $stmt = $conn->prepare("insert into users(name,email,password)values(?,?,?,?)");
        $stmt->bind_param("sss",$name,$email,$password);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        //header("Location: login.html"); 
    }

?>
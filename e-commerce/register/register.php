<?php
    $host="localhost";
    $username="root";
    $password="";
    $db="e-commerce";
    $nome=$_POST['nome'];
    $cognome=$_POST['cognome'];
    $email=$_POST['email'];
    $pswd=$_POST['pswd'];
    $connessione= new mysqli($host,$username,$password,$db);
    if(!$connessione){
        echo "Connessione non riuscita".$connessione->connect_error;
    }
    $query="INSERT INTO utenti(nome,cognome,email,pswd) VALUES('$nome','$cognome','$email','$pswd')";
    $result=$connessione->query($query);
    if($result>0){
        echo "Query eseguita";
        header("Location: ../protetta/protetta.php");
    }
?>
<?php
    $host="localhost";
    $username="root";
    $password="";
    $db="e-commerce";
    $email=$_POST['email'];
    $pswd=$_POST['pswd'];
    $connessione= new mysqli($host,$username,$password,$db);
    if(!$connessione){
        echo "Connessione non riuscita".$connect_error;
    }
    $query="SELECT * FROM utenti WHERE email = '$email' AND pswd='$pswd'";
    $result=$connessione->query($query);
    $id_utente=$connessione->query("SELECT id FROM utenti WHERE email = '$email' AND pswd='$pswd'");
    if($result->num_rows > 0){
        echo "Utente nel db";
        $row = $id_utente->fetch_assoc();
        $id = $row['id'];
        session_start();
        $_SESSION['id_utente']=$id;
        header("Location: ../acquisti/acquisti.html");
    }
?>
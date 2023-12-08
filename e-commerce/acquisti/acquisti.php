<?php
        $host="localhost";
        $username="root";
        $password="";
        $db="e-commerce";
        $acquisto=$_POST['acquisto'];
        session_start();
        $id_utente=$_SESSION['id_utente'];
        echo $id_utente;
        $connessione= new mysqli($host,$username,$password,$db);
        if(!$connessione){
            echo "Connessione non riuscita".$connessione->connect_error;
        }
        $query="INSERT INTO acquisti(id_utente,nome,venditore,costo) VALUES('$id_utente','$acquisto','','')";
        $result=$connessione->query($query);
        if($result>0){
            echo "Query eseguita";
        }
?>
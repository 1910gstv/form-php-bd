<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "insert";

$conn = mysqli_connect($server , $username , $password , $dbname);

if(isset($_POST['submit'])) {

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['idade']) && !empty($_POST['endereco'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $endereco = $_POST['endereco'];

        $query = "insert into form(name, email, idade, endereco) values('$name', '$email', '$idade', '$endereco')";

        $run = mysqli_query($conn, $query) or die(mysqli_error());

        if($run){
            echo "Formulário enviado com sucesso";
        }
        else {
            echo "Formulário não foi enviado";
        }

    }
    else {
        echo "All fields required";
    }

}


?>
<?php

$Nome       = $_POST['Nome'];
$email      = $_POST['email'];
$mensagem   = $_POST['mensagem'];
$From       = 'mauric_fl@hotmail.com';

$headers      = "MIME-Version: 1.1\n";
$headers     .= "Content-type: text/html; charset=utf-8\n";
$headers     .= "From: $nome <$From>\n";
$headers     .= "Return-Path: $From\n";
$headers     .= "Reply-to: $email\n";

mail($email, $mensagem, $headers, $From);
header('Location:obrigado.php');


?>
<?php

$recepient = "kurluchan@gmail.com";
$sitename = "Game Website";

$name = trim($_POST["name"]);
$lastname = trim($_POST["lastname"]);
$email = trim($_POST["email"]);
$message = trim($_POST["message"]);

$info = "Name: $name \nТLast name: $lastname \nEmail: $email \nMassege: $message";

$pagetitle = "New message from \"$sitename\"";
mail($recepient, $pagetitle, $info, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
<?php
//Les données en provenance du formulaire
$nom = $_POST["nom"];
$email = $_POST["email"];
$prenom = $_POST["prenom"];
$datetime = $_POST["datetime"];
$nombre = $_POST["nombre"];

//connexion à la base de données
$conn = new PDO("mysql:host=localhost;dbname=reservation;charset=utf8mb4", "admin", "simplon64", []);

//Requêtes SQL
$sql = "INSERT INTO reservation(nom,prenom,email,datetime,nombre) VALUES (:nom, :prenom, :email, :datetime, :nombre)";

//Envoi de la requêtes SQL à la base de données
$stmt = $conn->prepare($sql);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':datetime', $datetime);
$stmt->bindParam(':nombre', $nombre);
$stmt->execute();
<?php

//connexion à la base de données
$conn = new PDO("mysql:host=localhost;dbname=reservation;charset=utf8mb4", "admin", "simplon64", []);

//requêtes SQL+envoi
$stmt = $conn->prepare("SELECT * FROM reservation");
$stmt->execute();

//récupération de tous les enregistrements sous forme de tableau
$reservation = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($reservation);


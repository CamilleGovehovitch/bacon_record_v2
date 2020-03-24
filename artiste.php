<?php include'application/bdd_connection.php';

$artistesQuery = 'SELECT * FROM User';
$artistesResultSet = $pdo->prepare($artistesQuery);
$artistesResultSet->execute();
$artistes = $artistesResultSet->fetchAll();

$artisteQuery = 'SELECT * FROM User WHERE Id=?';
$artisteResultSet = $pdo->prepare($artisteQuery);
$artisteResultSet->execute([$_GET['id']]);
$artiste = $artisteResultSet->fetch();

$cardQuery = 'SELECT Card FROM User WHERE Id=? ';
$cardResultSet = $pdo->prepare($cardQuery);
$cardResultSet->execute([$_GET['id']]);
$card = $cardResultSet->fetch();

$albumQuery = 'SELECT * FROM Album WHERE User_Id=?';
$albumResultSet = $pdo->prepare($albumQuery);
$albumResultSet->execute([$_GET['id']]);
$albums = $albumResultSet->fetchAll();

$songQuery = 'SELECT * FROM Song WHERE User_Id=?';
$songResultSet = $pdo->prepare($songQuery);
$songResultSet->execute([$_GET['id']]);
$songs = $songResultSet->fetchAll();

$template = 'artiste';
include 'layout.phtml';
?>
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

function inputSanitizer($formDatas) {
    $formDatas = htmlspecialchars($formDatas);
    $formDatas = trim($formDatas);
    $formDatas = stripslashes($formDatas);

    return $formDatas;
}


if(isset($_POST['newsletter'])){
    $emailSanitized = inputSanitizer($_POST["newsletter"]);
    if(filter_var($emailSanitized, FILTER_VALIDATE_EMAIL)){
        $emailReq = $pdo->prepare('SELECT * FROM NewsLetter WHERE Email = ?');
        $emailReq->execute([$emailSanitized]);
        $emailExist = $emailReq->rowCount();
        if($emailExist == 0){
            $newsLetterReq = 'INSERT INTO Newsletter (Email) VALUES (?)';
            $resultSet = $pdo->prepare($newsLetterReq);
            $resultSet->execute([$_POST['newsletter']]);

            $newsLetterRecorded = 'Votre email a bien été enregistré';

            $to = $_POST['newsletter'];
            $subject = "Newsletter Subscription";
            $txt = "Hello fellaz, you have subcribed to our newsletter! If you want to unsubscribe click on the following link:";
            $headers = "From: webmaster@example.com" . "\r\n" . "CC: somebodyelse@example.com";
            mail($to,$subject,$txt,$headers);
        } else {
            $errEmailExist = 'L\'email entré est déjà utilisée, veuillez entrer un email valide.';
        }
    }
}
$template = 'artiste';
include 'layout.phtml';
?>
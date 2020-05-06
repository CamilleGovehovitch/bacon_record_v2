<?php
include'../application/bdd_connection.php';
//
//function inputSanitizer($formDatas) {
//    $formDatas = htmlspecialchars($formDatas);
//    $formDatas = trim($formDatas);
//    $formDatas = stripslashes($formDatas);
//
//    return $formDatas;
//}
//
//
//if(isset($submitNewsLetter)){
//    if(isset($_POST['newsletter'])){
//        $emailSanitized = inputSanitizer($_POST["newsletter"]);
//        if(filter_var($emailSanitized, FILTER_VALIDATE_EMAIL)){
//            $emailReq = $pdo->prepare('SELECT * FROM NewsLetter WHERE Email = ?');
//            $emailReq->execute([$emailSanitized]);
//            $emailExist = $emailReq->rowCount();
//            var_dump($emailExist);
//            if($emailExist == 0){
//                $newsLetterReq = 'INSERT INTO Newsletter (Email) VALUES (?)';
//                $resultSet = $pdo->prepare($newsLetterReq);
//                $resultSet->execute([$_POST['newsletter']]);
//
//                $newsLetterRecorded = 'Votre email a bien été enregistré';
//
//                $to = $_POST['newsletter'];
//                $subject = "Newsletter Subscription";
//                $txt = "Hello fellaz, you have subcribed to our newsletter! If you want to unsubscribe click on the following link:";
//                $headers = "From: webmaster@example.com" . "\r\n" . "CC: somebodyelse@example.com";
//                mail($to,$subject,$txt,$headers);
//            } else {
//                $errEmailExist = 'L\'email entré est déjà utilisée, veuillez entrer un email valide.';
//            }
//        }
//    }
//}



//if(isset($_POST["newsletter"])){
//    $emailSanitized = inputSanitizer($_POST["newsletter"]);
//    if (!filter_var($emailSanitized, FILTER_VALIDATE_EMAIL)) {
//        $emailReq = $pdo->prepare('SELECT * FROM NewsLetter WHERE Id = ?');
//        $emailReq->execute([$emailSanitized]);
//        $emailExist = $emailReq->rowCount();
//        if($emailExist === 0){
//
//        }
//    }else {
//        $newsLetterReq = 'INSERT INTO Newsletter (Email) VALUES(?)';
//        $resultSet = $pdo->prepare($newsLetterReq);
//        $resultSet->execute([$_POST['newsletter']]);
//
//        $newsLetterRecorded = 'Votre email a bien été enregistré';
//
//        $to = $_POST['newsletter'];
//        $subject = "Newsletter Subscription";
//        $txt = "Hello fellaz, you have subcribed to our newsletter! If you want to unsubscribe click on the following link:";
//        $headers = "From: webmaster@example.com" . "\r\n" . "CC: somebodyelse@example.com";
//        mail($to,$subject,$txt,$headers);
//    }
//
//}

//
//$query = 'INSERT INTO Newsletter (Email) VALUES (?)';
//$resultSet = $pdo->prepare($query);
//$resultSet->execute([$_POST['newsletter']]);
//
//$to = $_POST['newsletter'];
//$subject = "Newsletter Subscription";
//$txt = "Hello fellaz, you have subcribed to our newsletter! If you want to unsubscribe click on the following link:";
//$headers = "From: webmaster@example.com" . "\r\n" . "CC: somebodyelse@example.com";
//mail($to,$subject,$txt,$headers);
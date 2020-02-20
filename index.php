<?php include'application/bdd_connection.php';

$query = 'SELECT * FROM User ';
$resultSet = $pdo->query($query);
$artistes = $resultSet->fetchAll();

$query = 'SELECT * FROM News';
$resultSet = $pdo->query($query);
$news = $resultSet->fetchAll();


if(isset($_POST["newsletter"])){
    $email = $_POST["newsletter"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//            $emailErr = "Invalid email format";
//            echo $emailErr;
    }else {
        $query = 'INSERT INTO Newsletter (Email) VALUES(?)';
        $resultSet = $pdo->prepare($query);
        $resultSet->execute([$_POST['newsletter']]);

        $to = $_POST['newsletter'];
        $subject = "Newsletter Subscription";
        $txt = "Hello fellaz, you have subcribed to our newsletter! If you want to unsubscribe click on the following link:";
        $headers = "From: webmaster@example.com" . "\r\n" . "CC: somebodyelse@example.com";
        mail($to,$subject,$txt,$headers);
    }

}

$template = 'index';
include 'layout.phtml';
?>
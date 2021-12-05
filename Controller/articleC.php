<?php

include  $_SERVER['DOCUMENT_ROOT'] . "/ecotopia/config.php";
include_once  $_SERVER['DOCUMENT_ROOT'] . "/ecotopia//Model/article.php";
require $_SERVER['DOCUMENT_ROOT'] . "/ecotopia/mailer/autoload.php";
require $_SERVER['DOCUMENT_ROOT'] . "/ecotopia/sms/twilio/vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Twilio\Rest\Client;



class articleC
{
    function ajouterArticle($article)
    {
        $sql = "INSERT INTO articles (title, body, descr, img, likes, author, datep) 
        VALUES (:title,:body,:descr, :img,:likes, :author,:dates)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'title' => $article->getTitle(),
                'body' => $article->getBody(),
                'descr' => $article->getDesc(),
                'img' => $article->getImg(),
                'likes' => $article->getLikes(),
                'author' => $article->getAuthor(),
                'dates' => $article->getDate(),
            ]);
            $sql = "SELECT * FROM user";
            $query = $db->prepare($sql);
            $query->execute();
            $liste = $query->fetchAll();

            $mail = new PHPMailer();
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'louay.kahlaoui@esprit.tn';                      //email mteik
            $mail->Password   = '201JMT2043';             //SMTP password
            $mail->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $mail->isHTML(true);

            $mail->setFrom('louay.kahlaoui@esprit.tn', $article->getTitle());


            $sid    = "ACba9bef90b6a40080a511ca078e7a0227";
            $token  = "faf1141db25137cd2f7959e07c32ebc2";
            $twilio = new Client($sid, $token);
            foreach ($liste as $a) {   // email eli bch tabath bih
                $mail->addAddress($a['email']);   // email leli theb tabaathloo

                $mail->Subject = 'Ecotopia: Check out our new article!!!';
                $mail->Body    = $article->getBody();
                $mail->send();
                if($a['phone']!=NULL){
                $message = $twilio->messages
                    ->create(
                        $a['phone'], // to 
                        array(
                            "from" => "+12312416952",
                            "body" => "Ecotopia: Check out this new article! '".$article->getTitle()."'"
                        )
                    );
                    $message->sid;
                }
            }
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    function afficherArticles()
    {
        $sql = "SELECT * FROM articles where post_id";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    function MostLikedArticles()
    {
        $sql = "SELECT * FROM articles where Likes > 20";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function recupererArticle($post_id)
    {
        $sql = "SELECT * from articles where post_id=$post_id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $article = $query->fetch();
            return $article;
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    function modifierArticle($article, $post_id)
    {
        try {

            $db = config::getConnexion();
            $t = $article->getTitle();
            $b = $article->getBody();
            $d = $article->getDesc();
            $i = $article->getImg();
            $sql = "UPDATE articles SET 
            title= '" . $t . "', 
            descr= '" . $d . "', 
            img= '" . $i . "',
            body= '" . $b . "'
        WHERE post_id= '" . $post_id . "'";
            $query = $db->prepare($sql);
            $query->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    function supprimerArticle($id)
    {
        $sql = "DELETE FROM articles WHERE post_id=:id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    function verifEmail($email)
    {
        $sql = "SELECT * FROM user WHERE email=:e";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindValue(':e', $email);
            $query->execute();

            $n = $query->rowCount();

            return $n;
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    function insertToken($em, $token)
    {
        $sql = "INSERT INTO reset (email, token) VALUES ('$em','$token')";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    function resetmail($email, $message)
    {
        $mail = new PHPMailer();
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'louay.kahlaoui@esprit.tn';                      //email mteik
        $mail->Password   = '201JMT2043';             //SMTP password
        $mail->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->isHTML(true);

        $mail->setFrom('louay.kahlaoui@esprit.tn', 'Password Reset');
        // email eli bch tabath bih
        $mail->addAddress($email);   // email leli theb tabaathloo

        $mail->Subject = 'Ecotopia: Password Reset!!!';
        $mail->Body    = $message;
        $mail->send();
    }
    function checkToken($token)
    {
        $sql = "SELECT * FROM reset WHERE token=:t";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindValue(':t', $token);
            $query->execute();



            return $query;
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    function updatePass($pass, $email)
    {

        $hashed = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "UPDATE user SET password='" . $hashed . "'WHERE email=:e";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindValue(':e', $email);
            $query->execute();
            $sql = "DELETE from reset where email='$email'";
            $query = $db->prepare($sql);
            $query->execute();
            header("location:index.php");
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
}
/* $sql = "UPDATE articles SET title ='" . $_POST["title"] . "', descr ='" . $_POST["description"] . "', img ='" . $_POST["img"] . "', body ='" . $_POST["text_body"] . "' where post_id='" . $i . "'";
  //$article = new article($_POST['title'], $_POST['text_body'], $_POST['description'], $_POST['img'], 0, $_SESSION["user"], date("Y-m-d"), NULL);
  try {
    $query = $db->prepare($sql);
    $query->execute();
    header('Location:Articles.php');
  } catch (PDOException $e) {
  }*/

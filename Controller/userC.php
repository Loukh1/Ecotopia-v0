<?php
include $_SERVER['DOCUMENT_ROOT'] . '/ecotopia/config3.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/ecotopia/Model/user.php';
require $_SERVER['DOCUMENT_ROOT'] . "/ecotopia/mailer/autoload.php";
require $_SERVER['DOCUMENT_ROOT'] . "/ecotopia/sms/twilio/vendor/autoload.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Twilio\Rest\Client;

class userC
{
	function supprimeruser($email)
	{
		$sql = "DELETE FROM utilisateurs WHERE email=:email";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':email', $email);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}
	function afficheruser()
	{
		$sql = "SELECT * FROM utilisateurs";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}
	function ajouteruser($user)
	{
		$sql = "INSERT INTO utilisateurs(fname, lname, email, user, password, confirm, birthday, ville, adressee, codee, telephonee, question, questionn ) 
			VALUES (:fname, :lname, :email, :user, :password, :confirm, :birthday, :ville, :adressee, :codee, :telephonee, :question, :questionn)";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				'fname' => $user->getfname(),
				'lname' => $user->getlname(),
				'email' => $user->getemail(),
				'user' => $user->getuser(),
				'password' => $password = hash('sha256', $user->getpassword()),

				'confirm' => $password = hash('sha256', $user->getconfirm()),
				'birthday' => $user->getbirthday(),
				'ville' => $user->getville(),
				'adressee' => $user->getadressee(),
				'codee' => $user->getcodee(),
				'telephonee' => $user->gettelephonee(),
				'question' => $user->getquestion(),
				'questionn' => $user->getquestionn(),



			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function connexionUser($email, $password)
	{
		$sql = "SELECT * FROM Utilisateur WHERE Email='" . $email . "' and Password = '" . $password . "'";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();
			$count = $query->rowCount();
			if ($count == 0) {
				$message = "pseudo ou le mot de passe est incorrect ";
			} else {
				$x = $query->fetch();
				$message = $x['role'];
			}
		} catch (Exception $e) {
			$message = " " . $e->getMessage();
		}
		return $message;
	}
	function verifEmail($email)
    {
        $sql = "SELECT * FROM utilisateurs WHERE email=:e";
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
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                       
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'louay.kahlaoui@esprit.tn';                      
        $mail->Password   = '201JMT2043';             
        $mail->SMTPSecure = 'ssl';                                 
        $mail->Port       = 465;                                    
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

        $hashed = hash('sha256', $pass);
        $sql = "UPDATE utilisateurs SET password='" . $hashed . "'WHERE email=:e";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindValue(':e', $email);
            $query->execute();
            $sql = "DELETE from reset where email='$email'";
            $query = $db->prepare($sql);
            $query->execute();
            header("location:../index.php");
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
}

<?php

include  $_SERVER['DOCUMENT_ROOT']."/ecotopia/config.php";
include_once  $_SERVER['DOCUMENT_ROOT']."/ecotopia//Model/article.php";

class articleC {
    function ajouterArticle($article){
        $sql="INSERT INTO articles (title, body, descr, img, likes, author, datep) 
        VALUES (:title,:body,:descr, :img,:likes, :author,:dates)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute([
                'title' => $article->getTitle(),
                'body' => $article->getBody(),
                'descr' => $article->getDesc(),
                'img' => $article->getImg(),
                'likes' => $article->getLikes(),
                'author' => $article->getAuthor(),
                'dates' => $article->getDate(),
<<<<<<< Updated upstream
            ]);			
=======
            ]);
            $sql = "SELECT * FROM user";
            $query = $db->prepare($sql);
            $query->execute();
            $liste = $query->fetchAll();

            $mail = new PHPMailer();
            $mail->isSMTP();                                           
            $mail->Host       = 'smtp.gmail.com';                       
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'ecotopia.tn@gmail.com';                      
            $mail->Password   = '010607azerty';             
            $mail->SMTPSecure = 'ssl';                                  
            $mail->Port       = 465;                                   
            $mail->isHTML(true);

            $mail->setFrom('ecotopia.tn@gmail.com', $article->getTitle());


            $sid    = "ACba9bef90b6a40080a511ca078e7a0227";
            $token  = "faf1141db25137cd2f7959e07c32ebc2";
            $twilio = new Client($sid, $token);
            foreach ($liste as $a) {   // email eli bch tabath bih
                $mail->addAddress($a['email']);   // email leli theb tabaatloo

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
                   // $message->sid;
                }
            }
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
>>>>>>> Stashed changes
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }
    function afficher(){
        $sql="SELECT * FROM articles where post_id";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    function afficherArticles(){
        $sql="SELECT * FROM articles where post_id < 15";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    function afficherArticles2(){
        $sql="SELECT * FROM articles where post_id > 14";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    function recupererArticle($post_id){
        $sql="SELECT * from articles where post_id=$post_id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $article=$query->fetch();
            return $article;
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    function modifierArticle($article, $post_id){
        try {
            
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE articles SET 
                    title= :t, 
                    body= :b, 
                    descr= :d, 
                    img= :i,
                    datep= :dp
                WHERE post_id= :id'
            );
            $query->execute([
                't' => $article->getTitle(),
                'b' => $article->getBody(),
                'd' => $article->getDesc(),
                'i' => $article->getImg(),
                'dp' => $article->getDate(),
                'id' => $post_id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function supprimerArticle($id){
        $sql="DELETE FROM articles WHERE post_id=:id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id', $id);
        try{
            $req->execute();
        }
        catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
}
?>
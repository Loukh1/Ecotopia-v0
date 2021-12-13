<?php

include  $_SERVER['DOCUMENT_ROOT']."/ecotopia/config2.php";
include_once  $_SERVER['DOCUMENT_ROOT']."/ecotopia/Model/comment.php";

class commentC {
    function ajouterComment($comment){
        $sql="INSERT INTO comments (article_id,user_id,name,comment,date) 
        VALUES (:a, :u,:n, :c,:d)";
        $db = config2::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute([
                'a' => $comment->getArticleid(),
                'u' => $comment->getUserid(),
                'n' => $comment->getName(),
                'c' => $comment->gettext(),
                'd' => $comment->getDatec(),
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }
    function recuperercomment($id)
    {
        $sql="SELECT * FROM comments where id ='$id'";
        $db = config2::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();
            $comment=$query->fetch();
            return $comment;
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    function afficherComments($id){
        $sql="SELECT * FROM comments where article_id = $id";
        $db = config2::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    function afficher(){
        $sql="SELECT * FROM comments where id";
        $db = config2::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    function modifiercomment($comment, $id){
        try {
            
            $db = config2::getConnexion();
            $t = $comment->gettext();
            $sql="UPDATE comments SET 
            comment= '" . $t . "'
        WHERE id= '" . $id . "'";
            $query = $db->prepare($sql);
            $query->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    function supprimerC($id){
        $sql="DELETE FROM comments WHERE id=:id";
        $db = config2::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id', $id);
        try{
            $req->execute();
        }
        catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
/*
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
    }*/
}
?>
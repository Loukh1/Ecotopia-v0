<?php
class comment{
    private $comment_id=NULL;
    private $user_id=NULL;
    private $article_id=NULL;
    private $name=NULL;
    private $text=NULL;
    private $datec=NULL;

    function __construct($comment_id,$article_id,$user_id,$name,$text,$datec)
    {
       $this->comment_id = $comment_id;
       $this->article_id = $article_id;
       $this->user_id = $user_id;
       $this->name = $name;
       $this->text = $text;
       $this->datec = $datec; 
    }
    function getCommentId(){
        return $this->comment_id;
    }
    function getArticleid(){
        return $this->article_id;
    }
    function getText(){
        return $this->text;
    }
    function getName(){
        return $this->name;
    }
    function getDatec(){
        return $this->datec;
    }
    function getUserid(){
        return $this->user_id;
    }
    function setCommentId(int $id){
        $this->comment_id = $id;
    }
    function setArticleId(int $id){
        $this->article_id = $id;
    }
    function setUserId(int $id){
        $this->user_id = $id;
    }
    function setText(string $t){
        $this->text = $t;
    }
    function setName(string $t){
        $this->name = $t;
    }
    function setDate(string $date){
        $this->datec = $date;
    }
}
?>
<?php
	class user{
		private $fname=null;
		private $lname=null;
		private $email=null;
		private $user=null;
        private $password=null;
        private $confirm=null;
        private $birthday=null;
        private $ville=null;
        private $adressee=null;
        private $codee=null;
        private $telephonee=null;
        private $question=null;
        private $questionn=null;
		private $status=null;
		

		function __construct($fname, $lname, $email, $user, $password, $confirm, $birthday, $ville, $adressee, $codee, $telephonee, $question, $questionn,$status){
			$this->fname=$fname;
			$this->lname=$lname;
			$this->email=$email;
			$this->user=$user;
            $this->password=$password;
            $this->confirm=$confirm;
            $this->birthday=$birthday;
            $this->ville=$ville;
            $this->adressee=$adressee;
            $this->codee=$codee;
            $this->telephonee=$telephonee;
            $this->question=$question;
            $this->questionn=$questionn;
			$this->status=$status;


			
		}
		function getfname(){
			return $this->fname;
		}
		function getlname(){
			return $this->lname;
		}
		function getemail(){
			return $this->email;
		}
		function getuser(){
			return $this->user;
		}
        function getpassword(){

			return $this->password;
		}
        function getconfirm(){
			return $this->confirm;
		}
        function getbirthday(){
			return $this->birthday;
		}
        function getville(){
			return $this->ville;
		}
        function getadressee(){
			return $this->adressee;
		}
        function getcodee(){
			return $this->codee;
		}
        function gettelephonee(){
			return $this->telephonee;
		}
        function getquestion(){
			return $this->question;
		}
        function getquestionn(){
			return $this->questionn;
		}
		function getstatus(){
			return $this->status;
		}

	
		function setfname(string $fname){
			$this->fname=$fname;
		}
		function setlname(string $lname){
			$this->lname=$lname;
		}
		function setemail(string $email){
			$this->email=$email;
		}
		function setuser(string $user){
			$this->user=$user;
		}
        function setpassword(string $password){
			$this->password=$password;
		}
        function setconfirm(string $confirm){
			$this->confirm=$confirm;
		}
        function setbirthday(string $birthday){
			$this->user=$user;
		}
        function setville(string $ville){
			$this->ville=$ville;
		}
        function setadressee(string $adressee){
			$this->adressee=$adressee;
		}
        function setcodee(string $codee){
			$this->codee=$codee;
		}
        function settelephonee(string $telephonee){
			$this->telephonee=$telephonee;
		}
        function setquestion(string $question){
			$this->question=$question;
		}
        function setquestionn(string $questionn){
			$this->questionn=$questionn;
		}
		function setstatus(string $status){
			$this->status=$status;
		}
		
	}


?>
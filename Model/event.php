<?php
	class event{
		private $nom_e=null;
		private $dated_e=null;
		private $datef_e=null;
		private $gov_e=null;
		private $lieu_e=null;
		private $adresse_e=null;
		private $cp_e=null;
		private $ville_e=null;
		private $desc_e=null;


		
		private $password=null;
		function __construct($nom_e,$dated_e,$datef_e,$gov_e,$lieu_e, $adresse_e,$cp_e,$ville_e,$desc_e){
			
			$this->nom_e=$nom_e;
			$this->gov_e=$gov_e;
			$this->dated_e=$dated_e;
			$this->datef_e=$datef_e;
			$this->lieu_e=$lieu_e;
			$this->adresse_e=$adresse_e;
			$this->cp_e=$cp_e;
			$this->ville_e=$ville_e;
			$this->desc_e=$desc_e;
		}
	
		function getnom_e(){
			return $this->nom_e;
		}
	/* 	function getimg_e(){
			return $this->img_e;
		} */
		function getadresse_e(){
			return $this->adresse_e;
		}
		function getgov_e(){
			return $this->gov_e;
		}
		function getdesc_e(){
			return $this->desc_e;
		}
		function getdated_e(){
			return $this->dated_e;
		}
		function getdatef_e(){
			return $this->datef_e;
		}
		function getlieu_e(){
			return $this->lieu_e;
		}
		function getcp_e(){
			return $this->cp_e;
		}
		function getville_e(){
			return $this->ville_e;
		}





		function setNom_e(string $nom_e){
			$this->nom=$nom_e;
		}
		function setimg_e(string $img_e){
			$this->img_e=$img_e;
		}
		function setadresse_e(string $adresse_e){
			$this->adresse_e=$adresse_e;
		}
		function setgov_e(string $gov_e){
			$this->gov_e=$gov_e;
		}
		function setdated_e(string $dated_e){
			$this->dated_e=$dated_e;
		}
		function setdatef_e(string $datef_e){
			$this->datef_e=$datef_e;
		}
		function setdesc_e(string $desc_e){
			$this->desc_e=$desc_e;
		}
function setcp_e(string $cp_e){
			$this->cp_e=$cp_e;
		}
		
		function setlieu_e(string $lieu_e){
			$this->lieu_e=$lieu_e;
		}
		function setville_e(string $ville_e){
			$this->ville_e=$ville_e;
		}



		
	}


?>
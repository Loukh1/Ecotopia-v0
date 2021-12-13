<?php
	include  $_SERVER['DOCUMENT_ROOT'] . "/ecotopia/config.php";
	include_once  $_SERVER['DOCUMENT_ROOT'] . "/ecotopia/Model/event.php";
		class eventC {
			
		function afficherevent(){
		 	$sql="SELECT * FROM event";
		 	$db = config::getConnexion();
			try{
		 		$liste = $db->query($sql);
		 		return $liste;
		 	}
		 	catch(Exception $e){
				echo 'Erreur: '.$e->getMessage();
		 	}
		}
	
		 function supprimerevent($id_e){
		 	$sql="DELETE FROM event WHERE id_e=:id_e";
		 	$db = config::getConnexion();
		 	$req=$db->prepare($sql);
		 	$req->bindValue(':id_e', $id_e);
		 	try{
		 		$req->execute();
		 	}
		 	catch(Exception $e){
				echo 'Erreur: '.$e->getMessage();
		 	}
		 }
		function ajouterevent($event){
			$sql="INSERT INTO event (nom_e, gov_e,dated_e,datef_e, lieu_e, adresse_e,cp_e,ville_e,desc_e) 
			VALUES (:nom_e,:gov_e,:dated_e,:datef_e, :lieu_e,:adresse_e, :cp_e, :ville_e ,:desc_e )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom_e' => $event->getnom_e(),
					'gov_e' => $event->getgov_e(),
					'dated_e'=>$event->getdated_e(),
					'datef_e'=>$event->getdatef_e(),
					'lieu_e' => $event->getlieu_e(),
					'adresse_e' => $event->getadresse_e(),
					'cp_e' => $event->getcp_e(),
					'ville_e' => $event->getville_e(),
					'desc_e' => $event->getdesc_e()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function recupererevent($id){
			$sql="SELECT * from event where id_e='$id' ";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$event=$query->fetch();
				return $event;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierevent($event, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE event SET 
						nom_e= :nom_e, 
						dated_e=:dated_e,
						datef_e=:datef_e,
						gov_e= :gov_e, 
						lieu_e= :lieu_e, 
						adresse_e= :adresse_e, 
						cp_e= :cp_e,
						ville_e=:ville_e,
						desc_e=:desc_e
					WHERE id_e= :id_e'
				);
				$query->execute([
					'nom_e' => $event->getnom_e(),
					'dated_e'=>$event->getdated_e(),
					'datef_e'=>$event->getdatef_e(),
					'gov_e' => $event->getgov_e(),
					'lieu_e' => $event->getlieu_e(),
					'adresse_e' => $event->getadresse_e(),
					'cp_e' => $event->getcp_e(),
					'ville_e' => $event->getville_e(),
					'desc_e' => $event->getdesc_e(),
					'id_e' => $id
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		        function rechercher($value){
            $db = config::getConnexion();
            $SEARCH=$db->prepare("SELECT * FROM event WHERE nom_e LIKE :value");
            $value="%".$value."%";
            $SEARCH->bindParam("value",$value);
            $SEARCH->execute();
            return $SEARCH;
        }
	

	}
/*

  isset($_POST["nom"]) &&
  isset($_POST["dateB"]) &&
  isset($_POST["datE"]) &&
  isset($_POST["gov"]) &&
  isset($_POST["lieu"]) &&
  isset($_POST["ville"]) &&
  isset($_POST["adress"]) &&
  isset($_POST["zip"]) &&
  isset($_POST["desc"])
) {
  if (
    !empty($_POST["nom"]) &&
    !empty($_POST["dateB"]) &&
    !empty($_POST["datE"]) &&
    !empty($_POST["gov"]) &&
    !empty($_POST["lieu"]) &&
    !empty($_POST["ville"]) &&
    !empty($_POST["adress"]) &&
    !empty($_POST["zip"]) &&
    !empty($_POST["desc"])
  
*/
?>
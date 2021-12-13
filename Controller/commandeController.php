
<?php
include_once  $_SERVER['DOCUMENT_ROOT']."/ecotopia/config.php";
class commandeController{
  function addcommande($num,$qty)
   {
     $sql="insert into commande(id_client,quantite_total,numCommande,date) values (:id_client,:quantite_total,:numCommande,:date)";
     $db = config::getConnexion();
     $now = new DateTime();
		 $now->format('Y-m-d H:i:s');
     try
     {
         $req=$db->prepare($sql);
         $req->bindValue(':id_client',1);

         $req->bindValue(':quantite_total',$qty);
         
         $req->bindValue(':numCommande',$num);
         $req->bindValue(':date',date('Y-m-d H:i:s'));
            $req->execute();
     }

     catch (Exception $e)
     {
         
       // if($e->getCode()==23000)
       // {
       //     $sql1="update panier set qty=qty-1 where id_produit='$id_produit'";
       // $db=config::getConnexion();
       // try
       // {
       //     $db->query($sql1);
       // }
       // catch (Exception $e)
       // {
       //     echo 'error: '.$e->getMessage();
       // }
     }

   }
     
  function getCommande() //affichage du commande
   {
     $sql="select * from commande order by date desc ";
     $db= config::getConnexion();
     try
     {
       return $db->query($sql);
     }
     catch (Exception $e)
     {
       echo 'Error: '.$e->getMessage();
     }

   }
   function getCommandebystateP() //affichage du commande
   {
     $sql="select * from commande order by FIELD(state,'pending','delivering','delivered') ";
     $db= config::getConnexion();
     try
     {
       return $db->query($sql);
     }
     catch (Exception $e)
     {
       echo 'Error: '.$e->getMessage();
     }

   }
   function getCommandebystateD1() //affichage du commande
   {
     $sql="select * from commande order by FIELD(state,'delivering','pending','delivered') ";
     $db= config::getConnexion();
     try
     {
       return $db->query($sql);
     }
     catch (Exception $e)
     {
       echo 'Error: '.$e->getMessage();
     }

   }
   function getCommandebystateD2() //affichage du commande
   {
     $sql="select * from commande order by FIELD(state,'delivered','delivering','pending') ";
     $db= config::getConnexion();
     try
     {
       return $db->query($sql);
     }
     catch (Exception $e)
     {
       echo 'Error: '.$e->getMessage();
     }

   }
   function getsCommande() //affichage du commande
   {
     $sql="select * from commande order by date desc limit 1";
     $db= config::getConnexion();
     try
     {
       $query=$db->query($sql);
       $query->execute();
       $com=$query->fetch();
       return $com;
     }
     catch (Exception $e)
     {
       echo 'Error: '.$e->getMessage();
     }


   }
   function getCommandes($idclient) //affichage du commande
   {
     $sql="select * from commande where id_client=$idclient";
     $db= config::getConnexion();
     try
     {
       $query=$db->query($sql);
       $query->execute();
       $com=$query->fetch();
       return $com;
     }
     catch (Exception $e)
     {
       echo 'Error: '.$e->getMessage();
     }

   }
   function getsCommandes($idcommande) //affichage du commande
   {
     $sql="select * from commande where id_commande=$idcommande";
     $db= config::getConnexion();
     try
     {
       $query=$db->query($sql);
       $query->execute();
       $com=$query->fetch();
       return $com;
     }
     catch (Exception $e)
     {
       echo 'Error: '.$e->getMessage();
     }

   }
  
   function deletCommande($idcommande) //annuler commande
   {
       $sql="delete from commande where id_commande='$idcommande'";
       $db=config::getConnexion();
       try
       {
           $db->query($sql);
       }
       catch (Exception $e)
       {
           echo 'error:'.$e->getMessage();
       }
   }
   function updatecommandestated1($idcommande) 
   {
       $sql="update commande set state='delivering' where id_commande='$idcommande'";
       $db=config::getConnexion();
       try
       {
           $db->query($sql);
       }
       catch (Exception $e)
       {
           echo 'error: '.$e->getMessage();
       }
   }
   function updatecommandestated2($idcommande) 
   {
       $sql="update commande set state='delivered' where id_commande=$idcommande";
       $db=config::getConnexion();
       try
       {
           $db->query($sql);
       }
       catch (Exception $e)
       {
           echo 'error: '.$e->getMessage();
       }
   }
   

    function calcul(){
        $sql="select count(quantite_total) as total, state as state from commande";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
  }
 ?>
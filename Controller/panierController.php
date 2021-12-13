<?php
include "../config4.php";
class panierController{
    function addToCart($id_produit,$idcl)
    {
  		$sql="insert into panier(id_client,id_produit) values (:id_client,:id_produit)";
  		$db = config::getConnexion();
  		try
      {
          $req=$db->prepare($sql);
      		$req->bindValue(':id_client',$idcl);
      		$req->bindValue(':id_produit',$id_produit);
             $req->execute();
      }

      catch (Exception $e)
      {
        //echo 'Erreur: ' . $e->getMessage();
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
  function getCart() //affichage du panier
    {
      $sql="select * from panier";
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
    function showProd() //affichage prod dans shop
    {
      $sql="select * from produits ";
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
    function getProd($id_produit) //prend un produit (produit)
    {
        $sql="select * from produits where id='$id_produit'";
        $db=config::getConnexion();
        try
        {
            return $db->query($sql)->fetch();
        }
        catch (Exception $e)
        {
            echo 'error:'.$e->getMessage();
        }
    }
    function deleteCart($id_produit,$id) //remove specifique
    {
        $sql="delete from panier where id_produit='$id_produit' and id_client='$id'";
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
    function deleteallCart() //remove (panier) 
    {
        $sql="delete from panier";
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

    function updateCart($idP,$Nqty,$id)
    {
        $sql="update panier set qty='$Nqty' where id_produit='$idP' and id_client='$id'";
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
}
class commandeController{
  function addcommande($num,$qty,$idcli,$e)
   {
     $sql="insert into commande(id_client,quantite_total,numCommande,date,email) values (:id_client,:quantite_total,:numCommande,:date,:e)";
     $db = config::getConnexion();
     $now = new DateTime();
		 $now->format('Y-m-d H:i:s');
     try
     {
         $req=$db->prepare($sql);
         $req->bindValue(':id_client',$idcli);

         $req->bindValue(':quantite_total',$qty);
         
         $req->bindValue(':numCommande',$num);
         $req->bindValue(':date',date('Y-m-d H:i:s'));
         $req->bindValue(':e',$e);
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
     $sql="select * from commande ";
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
     $sql="select * from commande where id_client=$idclient order by date desc limit 1";
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
   function getCommandesid($idclient,$idcom) //affichage du commande
   {
     $sql="select * from commande where id_client=$idclient and idcommande=$idcom";
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
   function deletdetailCommande($id_detailcommande) //annuler detailcommande
   {
       $sql="delete from detailcommande where idcommande='$id_detailcommande'";
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
   
   function updatecommande($idcommande,$qunatite_total) //modifier la quantite total du produit
   {
       $sql="update detailcommande set qty='Nqty' where id_produit='$idcommande'";
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
   
}

class commandedetailController{
  function adddetailcommande($Q,$idprod,$idcommande)
   {
     $sql="insert into detailcommande(id_produit,qty,idcommande) values (:id_produit,:qty,:idcommande)";
     $db = config::getConnexion();
     
     try
     {
         $req=$db->prepare($sql);
         $req->bindValue(':id_produit',$idprod);
         $req->bindValue(':qty',$Q);
         $req->bindValue(':idcommande',$idcommande);
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

  function showdetailcommande() //affichage du detailcommande
    {
      $sql="select * from detailcommande ";
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
    function showdetailscommande($idcom) //affichage du detailcommande
    {
      $sql="select * from detailcommande where idcommande=$idcom ";
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
    
}
?>
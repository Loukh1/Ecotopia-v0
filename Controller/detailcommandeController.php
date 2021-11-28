<?php

class commandedetailController{
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


    function showdetailcommandes($idcommande) //affichage du detailcommande
    {
      $sql="select * from detailcommande where idcommande=$idcommande ";
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
?>
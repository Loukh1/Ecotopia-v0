<?PHP
class Panier{
	private $id_panier;
	private $id_client;
    private $id_produit;
    private $qty;

	

	function __construct($id_client,$id_produit,$qty){
		$this->id_client=$id_client;
		$this->id_produit=$id_produit;
		$this->qty=$qty;

	}

	function getid_panier(){
		return $this->id_panier;
	}
	function setid_panier($id_panier){
		$this->id_panier=$id_panier;
	}
    function getid_produit(){
		return $this->id_produit;
	}
	function setid_produit($id_produit){
		$this->id_produit=$id_produit;
	}
    function getid_client(){
		return $this->id_client;
	}
	function setid_client($id_client){
		$this->id_client=$id_client;
	}
    function getqty(){
		return $this->qty;
	}
	function setqty($qty){
		$this->qty=$qty;
	}

}

?>
<?PHP
class DetailCommande{
	private $id_detailcommande;
	private $id_produit;
    private $idcommande;
    private $qty;

	

	function __construct($idcommande,$qty,$id_produit){
		$this->idcommande=$idcommande;
		$this->qty=$qty;
        $this->id_produit=$id_produit;

	}

	function getidcommande(){
		return $this->idcommande;
	}
	function setidcommande($idcommande){
		$this->idcommande=$idcommande;
	}
    function getid_detailcommande(){
		return $this->id_detailcommande;
	}
	function setid_detailcommande($id_detailcommande){
		$this->id_detailcommande=$id_detailcommande;
	}
    function getid_produit(){
		return $this->id_produit;
	}
	function setid_produit($id_produit){
		$this->id_produit=$id_produit;
	}
    function getqty(){
		return $this->qty;
	}
	function setqty($qty){
		$this->qty=$qty;
	}

}

?>
<?PHP
class Commande{
	private $id_Commande;
	private $id_client;
    private $numCommande;
    private $qunatite_total;
	private $date;

	

	function __construct($id_client,$id_Commande,$qunatite_total,$numCommande,$date){
		$this->id_client=$id_client;
		$this->id_commande=$id_commande;
		$this->qunatite_total=$qunatite_total;
        $this->numCommande=$numCommande;
		$this->date=$date;
	}

	function getid_Commande(){
		return $this->id_Commande;
	}
	function setid_Commande($id_Commande){
		$this->id_Commande=$id_Commande;
	}
    function getnumCommande(){
		return $this->numCommande;
	}
	function setnumCommande($numCommande){
		$this->numCommande=$numCommande;
	}
    function getid_client(){
		return $this->id_client;
	}
	function setid_client($id_client){
		$this->id_client=$id_client;
	}
    function getqunatite_total(){
		return $this->qunatite_total;
	}
	function setqunatite_total($qunatite_total){
		$this->qunatite_total=$qunatite_total;
	}
	function getdate(){
		return $this->date;
	}
	function setdate($date){
		$this->date=$date;
	}

}

?>


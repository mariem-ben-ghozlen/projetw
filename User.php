<?php 
include 'dbconfig.php';
class User{
	private $login;
    private $pwd;
	private $role;
    public $conn;	

	public function __construct($login,$pwd,$conn)
	{
		$this->login=$login;
		$this->pwd=$pwd;
		$c=new Database();
		$this->conn=$c->connexion();
		
	}
	function getLog()
	{
		return $this->login;
	}
    function getPWD()
	{
		return $this->pwd;
		
	}
	 function getRole()
	{
		return $this->role;
		
	}

	public function Logedin($conn,$login,$pwd)
	{
		$req="select * from client where cin='$login' && mot_de_passe='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>
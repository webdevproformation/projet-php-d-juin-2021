<?php 
class Bdd{
    private $host = "localhost";
    private $login = "root";
    private $passwd = ""; 
    private $db_name = "demo";
    public $connexion ;
    static public $pdo ;
    // singleton 

    static function getPdo(){
        if(self::$pdo == null){
            self::$pdo = new Bdd();
            return self::$pdo ;
        }
        return self::$pdo ;
    }

    public function __construct()
    {
        $adresse_bdd = "mysql:dbname=$this->db_name;host=$this->host;charset=utf8";
        $this->connexion = new PDO($adresse_bdd,$this->login,$this->passwd);
        // PDO très facile de changer de gestionnaire de bases de données 
        // MySQL x XAMySQLPP ou MAMySQLP
        // PostGRE 
        // Oracle
        // MS Server 
        // SQlite
    }
    /**
     * requete préparée dans la base de données 
     */
    public function query($sql , $params = []){
        $requete = $this->connexion->prepare($sql);
        $requete->execute($params);
        return  $requete->fetchAll(PDO::FETCH_OBJ);
    }
}
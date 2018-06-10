<?php

/**
 * Created by PhpStorm.
 * User: fofana
 * Date: 04/06/2018
 * Time: 14:54
 */
class connexionPdo
{

    /**
     * Instance de la classe SPDO
     *
     * @var SPDO
     * @access private
     */
    private $PDOInstance = null;

    /**
     * Instance de la classe SPDO
     *
     * @var SPDO
     * @access private
     * @static
     */
    private static $instance = null;

    /**
     * Constante: nom d'utilisateur de la bdd
     *
     * @var string
     */
    const DEFAULT_SQL_USER = 'root';

    /**
     * Constante: hôte de la bdd
     *
     * @var string
     */
    const DEFAULT_SQL_HOST = 'localhost';

    /**
     * Constante: hôte de la bdd
     *
     * @var string
     */
    const DEFAULT_SQL_PASS = '';

    /**
     * Constante: nom de la bdd
     *
     * @var string
     */
    const DEFAULT_SQL_DTB = 'hotel';

    /**
     * Constructeur
     *
     * @param void
     * @return void
     * @see PDO::__construct()
     */
    public function __construct()
    {
        $this->PDOInstance = new PDO('mysql:dbname='.self::DEFAULT_SQL_DTB.';host='.self::DEFAULT_SQL_HOST,self::DEFAULT_SQL_USER ,self::DEFAULT_SQL_PASS);
    }

    public static function getInstance()
    {
        if(is_null(self::$instance))
        {
            self::$instance = new connexionPdo();
        }
        return self::$instance;
    }

    public function query($query)
    {
        return $this->PDOInstance->query($query);
    }

    public function execute($query)
    {
        return $this->PDOInstance->exec($query);
    }

    public static function getLesChambres(){

        $catalogueChambres = connexionPdo::getInstance()->query("SELECT * FROM chambre ORDER BY numero");

        $lesChambres = $catalogueChambres->fetchAll();

        return $lesChambres;

    }

    public static function chambreEstLibre($numeroChambre, $dateDarrivee, $dateDepart){

        $chambreEstLibre = connexionPdo::getInstance()->query("SELECT * FROM reservation WHERE dateReservation BETWEEN $dateDarrivee AND $dateDepart AND numero = $numeroChambre");

        return $chambreEstLibre->fetchAll();
    }
    public static function reserverChambre($numero,$date,$nom,$prenom,$mail){

        $catalogueChambres = connexionPdo::getInstance()->query("SELECT * FROM chambre ORDER BY numero");

        $lesChambres = $catalogueChambres->fetchAll();

        return $lesChambres;
    }

    public static function getLaChambre($numeroChambre){

        $chambreEstLibre = connexionPdo::getInstance()->query("SELECT * FROM chambre WHERE numero = $numeroChambre");

        return $chambreEstLibre->fetchAll();
    }

    public function insertReservation($numeroChambre,$dateReservation,$nom,$prenom,$mail){

        if( empty($numeroChambre) || empty($dateReservation) || empty($nom) || empty($prenom) || empty($mail)){

            return false;
        }
        connexionPdo::$instance->execute("INSERT INTO reservation VALUES(null,'$numeroChambre','$dateReservation','$nom','$prenom','$mail')");

        return true;
    }

}
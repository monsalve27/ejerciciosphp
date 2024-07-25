<?php   

class Coche{
    private static $kilometrajeTotal = 0;

    public static function getKilometajeTotal(){
        return Coche::$kilometrajeTotal;
    }

    private $marca;
    private $modelo;
    private $kilometraje;

    public function __construct($ma, $mo){
        $this->marca = $ma;
        $this->modelo = $mo;
        $this->kilometraje = 0;
    }

    public function getKilometraje(){
        return $this->kilometraje;
    }
    public function recorre($km){
        $this->kilometraje += $km;
        Coche::$kilometrajeTotal += $km;
    }
}
?>
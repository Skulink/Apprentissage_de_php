<?php
namespace Tutoriel;
class Personnage{

    protected static $max_vie = 120;

    protected $vie = 80;
    protected $atk = 20;
    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return int
     */
    public function getVie()
    {
        return $this->vie;
    }

    /**
     * @return int
     */
    public function getAtk()
    {
        return $this->atk;
    }

    public function regenerer($vie = null){
        if(is_null($vie)){
            $this->vie = self::$max_vie;
        } else {
            $this->vie = $this->vie + $vie;
        }
    }

    public function mort(){
        return $this->vie <= 0;
    }



    protected function empecher_negatif(){
        if($this->vie < 0 ) {
            $this->vie = 0;
        }
    }

    public function attaque($cible){
        $cible->vie -= $this->atk;
        $cible->empecher_negatif();
    }
}
<?php
namespace Tutoriel;

    class archer extends Personnage{

        public $arc = 3;
        protected $vie = 40;


        public function __construct($nom){
            $this->vie = $this->vie / 2;
            parent::__construct($nom);
        }

        public function attaque($cible){
            $cible->vie -= $this->atk;
           parent::attaque($cible);
        }
    }

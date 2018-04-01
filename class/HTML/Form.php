<?php

namespace Tutoriel\HTML;

/**
 * Class Form
 * Permet de génerer un formulaire rapidement et simplement
 */
class Form{

    /**
     * @var array Données utilisées par le formulaire
     */
    protected $data;

    /**
     * @var string tag utilisé pour entourer les champs
     *
     */
    public $surround = 'p';

    /**
     * @param array $data Données utilisées par le formulaire
     */
    public function __construct($data = array()){
        $this->data=$data;
    }

    /**
     * @param $html String Code html a entourer
     * @return string
     */
    protected function surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    /**
     * @param $index String Index de la valeur a recuperer
     * @return string
     */
    protected function getvalue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param $name string
     * @return string
     */
    public function input($name){
        return $this->surround(
            '<input type="text" name="'.$name.'" value="'. $this->getValue($name) .'"">'
        );
    }

    /**
     * @return string
     */
    public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>');
    }



}
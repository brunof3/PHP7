<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Caneta
 *
 * @author bruno
 */
class Caneta {
    public $modelo;
    private $cor;
    private $ponta;
    private $tampada;
    
    function __construct($modelo, $cor, $ponta) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->setTampada(true);
        //$this->tampada = true;
        
    }

    
    function getModelo() {
        return $this->modelo;
    }
    function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    function getCor() {
        return $this->cor;
    }
    function setCor($cor) {
        $this->cor = $cor;
    }
    function getPonta() {
        return $this->ponta;
    }
    function setPonta($ponta) {
        $this->ponta = $ponta;
    }
    function getTampada() {
        return $this->tampada;
    }
    function setTampada($tampada) {
        $this->tampada = $tampada;
    }   
}

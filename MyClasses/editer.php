<?php

class editer{

    private $num_M;
    private $num_P;
    private $participe;

    public function __construct()
    {
        $this->num_M = 0;
        $this->num_P = 0;
        $this->participe = -1;
    }

    public function getNum_M(){
        return $this->num_M;
    }

    public function getNum_P(){
        return $this->num_P;
    }

    public function getParticipe(){
        return $this->participe;
    }

    public function setNum_M($num_M){
        $this->num_M = $num_M;
    }

    public function setNum_P($num_P){
        $this->num_P = $num_P;
    }

    public function setParticipe($participe){
        $this->participe = $participe;
    }

}

?>
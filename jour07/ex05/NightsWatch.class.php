<?php

  class NightsWatch{
    public $tab;

    function __construct(){
      $this->tab = array();
    }

    function recruit($s){
      if (array_key_exists("IFighter", class_implements($s)))
        array_push($this->tab, $s);
    }

    function fight(){
      foreach ($this->tab as $value)
        $value->fight();
    }
  }

?>

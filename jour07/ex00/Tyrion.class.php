<?php
  class Tyrion extends Lannister{
    function __construct(){
      parent::__construct();
      print("My name is Tyrion".PHP_EOL);
    }

    function getSize(){
      print("Short");
    }

    function houseMotto(){
      print(parent::houseMotto());
    }
  }
?>

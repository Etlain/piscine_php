<?php
  class House{
    function introduce(){
      return (print(static::getHouseName()." of ".static::getHouseSeat()." : \"".static::getHouseMotto()."\"\n"));
    }
  }
?>

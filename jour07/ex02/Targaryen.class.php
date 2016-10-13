<?php
  class Targaryen{
    function resistsFire(){
      return false;
    }

    function getBurned(){
      if (static::resistsFire())
        return ("emerges naked but unharmed");
      else
        return ("burns alive");
    }
  }
?>

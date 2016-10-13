<?php

  class Tyrion
  {
    function sleepWith($s)
    {
      if (get_class($s) === 'Sansa')
        print("Let's do this." . PHP_EOL);
      else
        print("Not even if I'm drunk !" . PHP_EOL);
    }
  }

?>

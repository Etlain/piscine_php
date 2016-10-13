<?php

  class Jaime
  {
    function sleepWith($s)
    {
      if (get_class($s) === 'Cersei')
        print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
      else if (get_class($s) === 'Sansa')
        print("Let's do this." . PHP_EOL);
      else
        print("Not even if I'm drunk !" . PHP_EOL);
    }
  }

?>

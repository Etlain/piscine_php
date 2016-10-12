<?php
class Color{
  public $red = 0;
  public $green = 0;
  public $blue = 0;
  static $verbose = FALSE;

    function __construct(array $kwargs){
      if (array_key_exists('rgb', $kwargs))
      {
          $nbr = intval($kwargs['rgb']);
          $this->red = ($nbr & 0xff0000) >> (4 * 4);
          $this->green = ($nbr & 0x00ff00) >> (2 * 4);
          $this->blue = $nbr & 0x0000ff;
      }
      else
      {
        if (array_key_exists('red', $kwargs))
          $this->red = intval($kwargs['red']);
        if (array_key_exists('blue', $kwargs))
          $this->blue = intval($kwargs['blue']);
        if (array_key_exists('green', $kwargs))
          $this->green = intval($kwargs['green']);
      }
      if (self::$verbose == TRUE)
        print(self::__toString()." constructed.\n");
    }

    static function doc(){
      return (file_get_contents("Color.doc.txt"));
    }

    function add($color){
      $red = $color->red + $this->red;
      $green = $color->green + $this->green;
      $blue = $color->blue + $this->blue;
      $tab = array('red' => $red,'green' => $green,'blue' => $blue);
      return(new Color($tab));
    }

    function sub($color){
      $red = $this->red - $color->red;
      $green = $this->green - $color->green;
      $blue = $this->blue - $color->blue;
      $tab = array('red' => $red,'green' => $green,'blue' => $blue);
      return(new Color($tab));
    }

    function mult($mult){
      $red = $this->red * $mult;
      $green = $this->green * $mult;
      $blue = $this->blue *$mult;
      $tab = array('red' => $red,'green' => $green,'blue' => $blue);
      return(new Color($tab));
    }

    function __destruct(){
      if (self::$verbose == TRUE)
        print(self::__toString()." destructed.\n");
    }

    function __toString(){
      return sprintf("Color( red: % 3d, green: % 3d, blue: % 3d )", $this->red, $this->green, $this->blue);
    }
}
?>

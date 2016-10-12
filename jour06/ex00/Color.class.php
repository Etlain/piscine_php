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
        print("Constructeur color :".$this->red." ".$this->green." ".$this->blue."\n");
    }

    static function doc(){
      return (file_get_contents("Color.doc.txt"));
    }

    function add($color){
      $this->red += $color->red;
      $this->green += $color->green;
      $this->blue += $color->blue;
      $tab = array('red' => $this->red,'green' => $this->green,'blue' => $this->blue);
      return(new Color($tab));
    }

    function sub($color){
      $this->red -= $color->red;
      $this->green -= $color->green;
      $this->blue -= $color->blue;
      $tab = array('red' => $this->red,'green' => $this->green,'blue' => $this->blue);
      return(new Color($tab));
    }

    function mult($mult){
      $this->red *= $mult;
      $this->green *= $mult;
      $this->blue *= $mult;
      $tab = array('red' => $this->red,'green' => $this->green,'blue' => $this->blue);
      return(new Color($tab));
    }

    function __destruct(){
      if (self::$verbose == TRUE)
        print("Destructeur color :".$this->red." ".$this->green." ".$this->blue."\n");
    }

    function __toString(){
      return "toString color :".$this->red." ".$this->green." ".$this->blue."\n";
    }
}
$tab = array('red' => 255);
$test = new Color($tab);
print($test);
?>

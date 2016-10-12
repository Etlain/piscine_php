<?php
require_once 'Color.class.php';
  class Vertex{

    private $_x = 0;
    private $_y = 0;
    private $_z = 0;
    private $_w = 1.0;
    private $_color;
    static $verbose = FALSE;

    function fill_var(array $kwargs, $key, &$v){
      if (array_key_exists($key, $kwargs))
      {
        $v = $kwargs[$key];
        return (TRUE);
      }
      return (FALSE);
    }

    function __construct(array $kwargs){
      if (!self::fill_var($kwargs, 'x', $this->_x))
        return (print("error : variable x obligatoire"));
      if (!self::fill_var($kwargs, 'y', $this->_y))
        return (print("error : variable y obligatoire"));
      if (!self::fill_var($kwargs, 'z', $this->_z))
        return (print("error : variable z obligatoire"));
      if (!self::fill_var($kwargs, 'w', $this->_w))
        $this->_w = 1.0;
      if (array_key_exists('color', $kwargs))
        $this->_color = $kwargs['color'];
      else
        $this->_color = new Color(array('rgb' => 0xffffff));
      if (self::$verbose)
        print(self::__toString()." constructed"."\n");
    }

    function __destruct(){
      if (self::$verbose)
        print(self::__toString()." destructed"."\n");
    }

    function __toString(){
        $str = sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f", $this->_x, $this->_y, $this->_z, $this->_w) ;
        if (self::$verbose == TRUE)
          $str = $str.", ".$this->_color." )";
        else
          $str = $str." )";
        return ($str);
    }

    function set_color($c){
      $this->_color = $c;
    }

    function get_color(){
      return ($this->_color);
    }

    function set_x($c){
      $this->_x = $c;
    }

    function get_x(){
      return ($this->_x);
    }

    function set_y($c){
      $this->_y = $c;
    }

    function get_y(){
      return ($this->_y);
    }

    function set_z($c){
      $this->_z = $c;
    }

    function get_z(){
      return ($this->_z);
    }

    function set_w($c){
      $this->_w = $c;
    }

    function get_w(){
      return ($this->_w);
    }

    function doc(){
      return (file_get_contents("Vertex.doc.txt"));
    }
  }

?>

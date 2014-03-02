<?php

class Tictactoe
{
  private $Player1;
  private $Player2;

  public function __construct(){
    # self::generate_setter_functions("X");
    # self::generate_getter_functions();
      self::set_Player1("X");
      self::set_Player2("O");
    }

   public function set_Player1($char) {
      $this->Player1=$char;
    }

    public function get_Player1() {
      return $this->Player1;
    }

    public function set_Player2($char) {
      $this->Player2=$char;
    }

    public function get_Player2() {
      return $this->Player2;
    }

/*    public function generate_setter_functions(){
     $class_vars = get_class_vars(get_class($this));
     foreach ($class_vars as $name => $value) {
     self::debug( 'public function set_'.$name.'( $value ){
                   $this->'.$name.' = $value;}' );
     }
    }

    public function generate_getter_functions(){
     $class_vars = get_class_vars(get_class($this));
     foreach ($class_vars as $name => $value) {
     self::debug( 'public function get_'.$name.'(){
                   return $this->'.$name.';}' );
     }
    }   
     public static function debug($o){
      echo '<pre>'.print_r($o, 1).'</pre>';
     }*/
}


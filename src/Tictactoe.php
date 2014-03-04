<?php
/*
 echo "Are you sure you want to do this?  Type 'yes' to continue: ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
if(trim($line) != 'yes'){
    echo "ABORTING!\n";
    exit;
}
echo "\n"; 
echo "Thank you, continuing...\n";
 */

class Tictactoe
{
  public $Player1;
  public $Player2;
  private static $instance;

  public function __construct(){
    # self::generate_setter_functions("X");
    # self::generate_getter_functions();
    # self::set_Player1("X");
    # self::set_Player2("O");
    }

   public static function getInstance() {

    if(!self::$instance) {
      self::$instance = new self();
    }

    return self::$instance;
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

    public function print_Border($current) {
     foreach ($current as list($a,$b,$c)) {
            echo "$a $b $c\n";
          }
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


<?php
require_once(__ROOT__.'/src/Maininterface.php');

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

  private function __construct(){
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

   public function game_Winning ($current) {
      if ($current [0] [0] == "X" && $current [0] [1] == "X"
          && $current [0] [2] == "X"){
         echo "\nPlayer X Wins!!!\n";  
         exit;   
      }
      if ($current [0] [0] == "O" && $current [0] [1] == "O"
          && $current [0] [2] == "O"){
         echo "\nPlayer O Wins!!!\n";  
         exit;   
      }
      if ($current [1] [0] == "X" && $current [1] [1] == "X"
          && $current [1] [2] == "X"){
         echo "\nPlayer X Wins!!!\n";  
         exit;   
      }
      if ($current [1] [0] == "O" && $current [1] [1] == "O"
          && $current [1] [2] == "O"){
         echo "\nPlayer O Wins!!!\n";  
         exit;   
      }
      if ($current [2] [0] == "X" && $current [2] [1] == "X"
          && $current [2] [2] == "X"){
         echo "\nPlayer X Wins!!!\n";
         exit;
      }
      if ($current [2] [0] == "O" && $current [2] [1] == "O"
          && $current [2] [2] == "O"){
         echo "\nPlayer O Wins!!!\n";
         exit;
      }
      if ($current [0] [0] == "X" && $current [1] [0] == "X"
          && $current [2] [0] == "X"){
         echo "\nPlayer X Wins!!!\n";
         exit;
      }
      if ($current [0] [0] == "O" && $current [1] [0] == "O"
          && $current [2] [0] == "O"){
         echo "\nPlayer O Wins!!!\n";
         exit;
      }
      if ($current [0] [1] == "X" && $current [1] [1] == "X"
          && $current [2] [1] == "X"){
         echo "\nPlayer X Wins!!!\n";
         exit;
      }
      if ($current [0] [1] == "O" && $current [1] [1] == "O"
          && $current [2] [1] == "O"){
         echo "\nPlayer O Wins!!!\n";
         exit;
      }
      if ($current [0] [2] == "X" && $current [1] [2] == "X"
          && $current [2] [2] == "X"){
         echo "\nPlayer X Wins!!!\n";
         exit;
      }
      if ($current [0] [2] == "O" && $current [1] [2] == "O"
          && $current [2] [2] == "O"){
         echo "\nPlayer O Wins!!!\n";
         exit;
      }
      if ($current [0] [0] == "X" && $current [1] [1] == "X"
          && $current [2] [2] == "X"){
         echo "\nPlayer X Wins!!!\n";
         exit;
      }     
      if ($current [0] [0] == "O" && $current [1] [1] == "O"
          && $current [2] [2] == "O"){
         echo "\nPlayer O Wins!!!\n";
         exit;
      }
      if ($current [0] [2] == "X" && $current [1] [1] == "X"
          && $current [2] [0] == "X"){
         echo "\nPlayer X Wins!!!\n";
         exit;
      }
      if ($current [0] [2] == "O" && $current [1] [1] == "O"
          && $current [2] [0] == "O"){
         echo "\nPlayer O Wins!!!\n";
         exit;
      }    
   }
      public function validate_Move($current,$rows,$columns) {
        if ($current [$rows] [$columns] == "X"){
          echo "The move has been made, Please Try Again\n";
          Maininterface::getInstance()->player1_Move($current);}
       if ($current [$rows] [$columns] == "O") {
          echo "The move has been made, Please Try Again\n";
          Maininterface::getInstance()->player2_Move($current);}
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


<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/src/Tictactoe.php'); 

class Maininterface
{
   private static $instance;
    public function __construct(){
    }
   public static function getInstance() {

    if(!self::$instance) {
      self::$instance = new self();
    }

    return self::$instance;
  }

   public function start_Game() {
    echo "Player 1 Please choose between X or O\n";
    $read = fopen ("php://stdin","r");
    $input = fgets($read);
    if(trim($input) == 'X'){
        Tictactoe::getInstance()->set_Player1($input);
        Tictactoe::getInstance()->set_Player2('O');
        echo "\nPlayer1:";
        echo Tictactoe::getInstance()->get_Player1();
        echo "Player2:";
        echo Tictactoe::getInstance()->get_Player2();
        echo "\n";
     }
    if (trim($input) == 'O'){
        Tictactoe::getInstance()->set_Player1($input);
        Tictactoe::getInstance()->set_Player2('X');
        echo "\nPlayer1:";
        echo Tictactoe::getInstance()->get_Player1();
        echo "Player2:";
        echo Tictactoe::getInstance()->get_Player2();
        echo "\n";
    }
  }

   public function initialize_Border() {
    $board=[ ["1","2","3"],["4","5","6"],["7","8","9"],];
    $move=array(2 => array(2=>"X"));
    $board=array_replace_recursive($board,$move); 
    Tictactoe::getInstance()->print_Border($board);
    
    #$move=array(2 => array(1=>"X"));
    #$board=array_replace_recursive($board,$move);  
    #Tictactoe::getInstance()->print_Border($board);
  
   }
   
}
   
   Maininterface::getInstance()->start_Game();
   Maininterface::getInstance()->initialize_Border(); 

<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/src/Tictactoe.php'); 

$board=[ ["1","2","3"],["4","5","6"],["7","8","9"],];

class Maininterface
{
   private static $instance;

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
   public function player1_Move($board){
    Tictactoe::getInstance()->game_Winning($board);
    echo "Player 1 Please choose what row (ranging from 0-2)\n";
    $read = fopen ("php://stdin","r");
    $row = (int)fgets($read);
    echo "Player 1 Please choose what column (ranging from 0-2)\n";
    $read = fopen ("php://stdin","r");
    $column = (int)fgets($read);
    Tictactoe::getInstance()->validate_Move($board,$row,$column);
  $move=array($row => array($column=>trim(Tictactoe::getInstance()->get_Player1())));
    $board=array_replace_recursive($board,$move);
    echo "\n";
    Tictactoe::getInstance()->print_Border($board);
    echo "\n";
    self::player2_Move($board);
   }

   public function player2_Move($board){
    Tictactoe::getInstance()->game_Winning($board);
    echo "Player 2 Please choose what row (ranging from 0-2)\n";
    $read = fopen ("php://stdin","r");
    $row = (int)fgets($read);
    echo "Player 2 Please choose what column (ranging from 0-2)\n";
    $read = fopen ("php://stdin","r");
    $column = (int)fgets($read);
    Tictactoe::getInstance()->validate_Move($board,$row,$column); 
  $move=array($row => array($column=>trim(Tictactoe::getInstance()->get_Player2())));
    $board=array_replace_recursive($board,$move);
    echo "\n";
    Tictactoe::getInstance()->print_Border($board);
    echo "\n";
    self::player1_Move($board);
   }
   
}
   
   Maininterface::getInstance()->start_Game();
   echo "\n";
   Tictactoe::getInstance()->print_Border($board); 
   echo "\n";
   Maininterface::getInstance()->player1_Move($board);

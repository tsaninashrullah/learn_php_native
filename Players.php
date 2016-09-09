<?php
class Player {
	private $name, $blood, $mana;
	function __construct($new_name) {
		$this->name = $new_name;
		$this->blood = 100;
		$this->mana = 30;
	}

	// public function set_name($new_name) {
	// 	$this->name = $new_name;
	// }
	public function get_name() {
		return $this->name;
	}
	public function get_blood() {
		return $this->blood;
	}
	public function get_mana() {
		return $this->mana;
	}
	public function attack() {
     $this->mana = $this->mana - 10;
	}
	public function defend() {
		$this->blood = $this->blood - 30;
	}
}
// class Number {
// 	private $total_player;
// 	function __construct($number){
// 		$this->total_player = $number;
// 	}
// 	public function get_players(){
// 		return $this->total_player;
// 	}
// 	public function add_player($number) {
// 		$this->total_player = $this->total_player + $number;
// 	}
// }
$x = 1;
$players = [];
do{
	echo "\n";
	echo "# ====================================================== #\n";
	echo "#             Welcome to the Battle Arena                #\n";
	echo "# ------------------------------------------------- ---- #\n";
	echo "# Description: #\n";
	echo "# 1. type 'new' to create a character                    #\n";
	echo "# 2. type 'start' to exit the application                #\n";
	echo "# ------------------------------------------------- ---- #\n";
	echo "\n";
	echo "# Current Player : " . count($players, COUNT_RECURSIVE) . "                 #\n";
	echo "# - #\n";
	echo "# * Max player 2 or 3 #\n";
	echo "# ------------------------------------------------- ---- #\n \n";
	// var_dump($players);
	// var_dump($players);
	// var_dump(count($players, COUNT_RECURSIVE)<3);

	fscanf(STDIN, "%s\n", $input_mode);
	if ($input_mode=="new") {
		if (count($players, COUNT_RECURSIVE)<3) {
		echo "\n \n# ====================================================== #\n";
		echo "#             Welcome to the Battle Arena                #\n";
		echo "# ------------------------------------------------- ---- #\n";
		echo "# Insert the Number of players : ";
		// integer $number_players;
		fscanf(STDIN, "%s\n", $number_players);
		// $numbers = new Number($number_players);
		// $numbers->get_players();
		// $numbers->add_player($number_players);
		// echo $numbers->get_players();
			if ($number_players > 3 || count($players, COUNT_RECURSIVE) > 3) {
				echo "The Players is too much";
			}else{			
				for ($i=0; $i < $number_players; $i++) { 
				echo "\n - ";
				fscanf(STDIN, "%s\n", $input_name);
				$players[$input_name] = new Player($input_name);
				}
				echo "#\n";
				echo "# Current Player : ";
				echo count($players, COUNT_RECURSIVE);
				echo "\n# -\n";
				echo "# * Max player 2 or 3 #\n";
				echo "# ------------------------------------------------- ---- #\n \n";
			}
		}else{
			echo "\n \nThe Player has sign is too much\n \n \n";
		}
	} elseif ($input_mode=="start") {
	$int = 1;
	do{
	echo "\n \n# ====================================================== #\n";
	echo "#             Welcome to the Battle Arena                #\n";
	echo "# ------------------------------------------------- ---- #\n";
	echo "Battle Start :\n";
	echo "who will attack: ";
		fscanf(STDIN, "%s\n", $attack);
		foreach ($players as $key => $value) {
			if ($attack==$value->get_name()) {
			$value->get_mana();
			$value->attack();
			}
		}
			echo "\nwho attacked : ";	
			fscanf(STDIN, "%s\n", $attacked);
		foreach ($players as $key => $value) {
			if ($attacked==$value->get_name()) {
				$value->get_blood();
				$value->defend();
			echo "\n \n# ====================================================== #\n";
			echo "#             Welcome to the Battle Arena                #\n";
			echo "# ------------------------------------------------- ---- #\n";
			echo "Battle Start :\n";
			echo "who will attack: " . $attack;
			echo "\n who attacked: " . $attacked;
			echo "\n Description: \n";
			}
		}
		foreach ($players as $key => $value) {
			echo $value->get_name() . ": manna = " . $value->get_mana() . ", blood = " . $value->get_blood() . "\n";
		}
		foreach ($players as $key => $value) {
			if ($value->get_mana() < 1 || $value->get_blood() <1) {
				echo "----------------------GAME OVER----------------------";
				die();
			}
		}
	}while($int>=0);
	} else {
		echo "Your input is " . $input_mode . "\n Please make sure with your input\n";
		// die();
	}
}while($x>=0);
?>
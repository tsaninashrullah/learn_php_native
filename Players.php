<?php
class Player {
	private $name, $blood, $mana;
	function __construct($new_name) {
		$this->name = $new_name;
		$this->blood = 100;
		$this->mana = 40;
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
     $mana = $mana - 10;
	}
	public function defend() {
		$blood = $blood - 30;
	}

}
$x = 1;
$players = [];
do{
echo "
# ============================== #
# Welcome to the Battle Arena #
# ------------------------------------------------- ---- #\n
# Description: #
# 1. type 'new' to create a character #
# 2. type 'quit' to exit the application #
# ------------------------------------------------- ---- #\n";
echo "\n";
echo "# Current Player : " . count($players, COUNT_RECURSIVE) . " #\n
# - #
# * Max player 2 or 3 #
# ------------------------------------------------- ---- #\n \n";
var_dump($players);
// var_dump($players);
// var_dump(count($players, COUNT_RECURSIVE)<3);

fscanf(STDIN, "%s\n", $input_mode);
if ($input_mode=="new") {
	if (count($players, COUNT_RECURSIVE)<3) {
	echo "# ============================== #
# Welcome to the Battle Arena #
# ------------------------------------------------- ---- #
# Description: #
# 1 type 'new' to create a character #
# 2. type 'start' to begin the fight #
# ------------------------------------------------- ---- #
# Insert the Number of players : ";
	// integer $number_players;
	fscanf(STDIN, "%s\n", $number_players);
		if ($number_players > 3 && count($players, COUNT_RECURSIVE) < 3) {
			echo "The Players is too much";
		}else{			
			for ($i=0; $i < $number_players ; $i++) { 
			echo "\n - ";
			fscanf(STDIN, "%s\n", $input_name);
			$players[$input_name] = new Player($input_name);
			}
echo " #\n";
echo "# Current Player : ";
echo count($players, COUNT_RECURSIVE);
echo "\n# - 
# * Max player 2 or 3 #
# ------------------------------------------------- ---- #\n \n";
		}
	}else{
		echo "\n \nThe Player has sign is too much\n \n \n";
	}
	// if (is_int($number_players)) {
	// } else {
	    // echo "Variable is not an integer";
	// }
// die();
} elseif ($input_mode=="start") {
// var_dump($players[$input_name]);
echo "# ============================== #
# Welcome to the Battle Arena #
# ------------------------------------------------- ---- #
Battle Start:
who will attack: ";
	fscanf(STDIN, "%s\n", $attack);
	foreach ($players as $key => $value) {

		if ($attack==$value->get_name()) {
		echo "who attacked : ";
		fscanf(STDIN, "%s\n", $attacked);
			if ($attacked==$value->get_name()) {
echo "# Welcome to the Battle Arena #
# ------------------------------------------------- ---- #
Battle Start:
who will attack: " . $attack .
"who attacked: " . $attacked .
"Description: ";
// $value[0]->get_name() . ": manna = " . <rest>, blood = <rest>
// <Nama_player_2>: manna = <rest>, blood = <rest>"
				
			}
		}
		echo $value->get_name();
	}

// : <Nama_player_2>
// when pressing enter out the results:
// # ============================== #
} else {
	echo "Your input is " . $input_mode . "\n Please make sure with your input\n";
	// die();
}
}while($x>=0);
// var_dump($players["Albert"]->get_name());
// $tsan = JOptionPane.showInputDialog("Masukkan Jam Kerja : ");
?>
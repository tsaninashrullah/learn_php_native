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
}

$players = [];
echo "
# ============================== #
# Welcome to the Battle Arena #
# ------------------------------------------------- ---- #\n
# Description: #
# 1 type 'new' to create a character #
# 2. type 'start' to begin the fight #
# ------------------------------------------------- ---- #\n";
echo "\n";

fscanf(STDIN, "%s\n", $input_mode);
echo "# Current Player : " . count($players, COUNT_RECURSIVE) . " #\n
# - #
# * Max player 2 or 3 #
# ------------------------------------------------- ---- #\n \n";
if ($input_mode=="new") {
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
	// if (is_int($number_players)) {
		for ($i=0; $i < $number_players ; $i++) { 
		echo "\n -";
		fscanf(STDIN, "%s\n", $input_name);
		$players[$input_name] = new Player($input_name);
		}
	// } else {
	    // echo "Variable is not an integer";
	// }
	var_dump(is_int($number_players));
	var_dump(is_int(1));
	var_dump($number_players);
echo " #\n";
echo "# Current Player : ";
echo count($players, COUNT_RECURSIVE);
echo "\n# - #
# * Max player 2 or 3 #
# ------------------------------------------------- ---- #\n \n";
fscanf(STDIN, "%s\n", $input_mode);
} elseif ($input_mode=="start") {
	# code...
} else {
	echo "Your input is " . $input_mode . "\n Please make sure with your input\n";
}
echo "\n\n";
// var_dump($players["Albert"]->get_name());
// $tsan = JOptionPane.showInputDialog("Masukkan Jam Kerja : ");
?>
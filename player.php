<?php
class Player
{
	public $playerName;
	public $playerSym;
	public function __construct($name, $symbol)
	{
		// initialize attributes
		$this->playerName = $name;
		$this->playerSym = '<span class="colorO">'.$symbol.'</span>';
	}
	
	public function getSymbol()
	{
		// returns the symbol used by that player
		return $this->playerSym;
	}
	
	public function getName()
	{
		// returns the name of the current player
		return $this->playerName;
	}
}
?>
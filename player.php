<?php 

	class Player {
   public $blood = 100;
    public $mana = 40;
   public $nama;
   public $attacker;
   public $deffender;
  }
  function gP1($nama1){
  	$nama=$nama1;
  	$this->n=$nama;
  }
  function gP2($nama2){
  	$blood=$this->blood;
  	$mana= $this->mana;
  	$nama=$nama2;
  }
  function gatck($att){
  	$this->$attacker=$att;
  }
  function gdeff($def){
  	$this->$deffender=$deff;
  }
$Player1 = new Player;
$Player2 = new Player;
echo "\n #===================================#";
echo "\n # welcome to battle royale joss#";
echo "\n #-----------------------------------#";
echo "\n # description: #";
echo " \n # 1 type 'new' to create a character #";
echo "\n # 2. type 'start' to begin the fight #";
echo "\n #-----------------------------------#";
echo " \n # Current Player: #";
echo "\n # - #";
echo "\n # * Max player 2 or 3 #";
echo "\n #----------------------------------#";
echo "\n ";
$desc = readline("ketikan new atau start : \n");
if ($desc == "new") {
 
  	for ($i=0; $i < 2; $i++){
  		
  		
  		echo "\n #===================================#";
		echo "\n # welcome to battle royale joss#";
		echo "\n #-----------------------------------#";
		echo "\n # description: #";
		echo " \n # 1 type 'new' to create a character #";
		echo "\n # 2. type 'start' to begin the fight #";
		echo "\n #-----------------------------------#";
		echo "\n ";
		$nama[$i] = readline("\n # Current Player:");
		
		
	}

	echo "\n #===================================#";
	echo "\n # welcome to battle royale joss#";
	echo "\n #-----------------------------------#";
	echo "\n # description: #";
	echo " \n # 1 type 'new' to create a character #";
	echo "\n # 2. type 'start' to begin the fight #";
	echo "\n #-----------------------------------#";
	echo " \n # Current Player: #";
	echo "\n # - $nama[0]";
	echo "\n # - $nama[1]";
	echo "\n #----------------------------------#";
	echo "\n ";
	$mulai = readline("ketikan start untuk mulai permainan : \n");
		if ($mulai=="start") {
			
			echo "\n #===================================#";
			echo "\n # welcome to battle royale joss#";
			echo "\n #-----------------------------------#";
			echo "\n #battle start#\n";
			$att= readline("# who will attack : \n");
			$deff = readline("#who will deffend : \n");
				if ($att != $nama[0] and $att != $nama[1]) {
					echo "nama attacker tidak diketahui\n";
			
				}elseif ($deff != $nama[0] and $deff != $nama[1]) {
					echo "nama deffender tidak diketahui\n";
				}
		}else{
			echo "\n input tidak sesuai.";
			echo "\n anda keluar dari game";
		}
	
	echo "\n #===================================#";
	echo "\n # welcome to battle royale joss#";
	echo "\n #-----------------------------------#";
	echo "\n # description: #";
	echo "\n ".$nama[0]. ": Blood = ".$Player1->blood. ", Mana =". $Player1->mana;
	echo "\n ".$nama[1]. ": Blood = ".$Player2->blood. ", Mana =". $Player2->mana."\n ";
	echo "\n++++++++++++++++++++++++++++++++++++++++\n";
	$tarung = readline("ketikan serang untuk mulai permainan : \n");
	if ($tarung=="serang") {

	$i=$Player1->mana;
	do {	
	echo "\n ".$nama[0]. ": Blood = ".($Player1->blood). ", Mana =". ($Player1->mana-=10);
	echo "\n ".$nama[1]. ": Blood = ".($Player2->blood-=25). ", Mana =". $Player2->mana."\n ";
	$i-=10;
	}
	
	while($i>=0);
	}		


	}elseif ($desc == "start") {
		echo "tidak ada karakter pemain..buat character terlebih dahulu\n";
}

else{
	echo "input tidak sesuai\n";
}

		
  
?>
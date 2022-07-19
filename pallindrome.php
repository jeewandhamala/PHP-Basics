<?php 

	function checkpallindrome(){

		$check = 0;

		$string = readline('Enter a string : ');

		$str = preg_replace('/[^A-Za-z]/', '', $string);

		$len = strlen($str);

		for($i = 0 ; $i < $len ; $i++){

			if($str[$i] != $str[$len - $i - 1]){
				$check = 1;
				break;
			   }
		}

		if($check){
			echo "$str is not pallindrome ";
			
		}
		else{
			echo "$str is a pallindrome";
		}


	}

	checkpallindrome();

?>

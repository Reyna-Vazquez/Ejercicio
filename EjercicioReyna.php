<?php
function reverseInt($n) {
	$longitudCadena= strlen($n);
	
	if ( $longitudCadena >=2 )
	{
		if($n < 0){ 
		   $numero = substr($n,1);
		   $alrev= strrev($numero);
		   $resultado= ltrim($alrev, "0");
		   echo "-".$resultado;
          } 
		else{
		$alreves= strrev($n);
		$resultado1= ltrim($alreves, "0");
		echo "sol".$resultado1;
		}
	}

}

reverseInt(-50);

?>
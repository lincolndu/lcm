<title>Math::LCM</title> <?php

$abc=[169,47, 56];
$cde=[];
$prime_arrary=[];
$abc_high=0;

echo 'Number are ';
for ($i=0; $i < $count= count($abc); $i++) { 
	echo ( $count-1 != $i ) ? $abc[$i].', ' : $abc[$i].'.<br><br>';
	if ($abc[$i] > $abc_high) {
			$abc_high=$abc[$i];
		}	
}

for ($i=2; $i <= $abc_high; $i++) { 
	for ($j=2; $j < $i; $j++) { 
		if ($i%$j==0) {
			break;
		}
	}
	if ($j==$i) {
		$prime_arrary[]=$i;
	}
}

for ($i=0; $i < count($abc); $i++) { 
	while ( $abc[$i] > 1 ) {
		for ($j=0; $j < count($prime_arrary); $j++) { 
			if ( $abc[$i]%$prime_arrary[$j] == 0) {
				$cde[]=$prime_arrary[$j];
				$abc[$i]=$abc[$i]/$prime_arrary[$j];
			}
		}
	}
}

echo 'And lowest common multiple are <br>';
$total=1;
for ($i=0; $i < $end= count($cde); $i++) { 
	$total=$total * $cde[$i];
	echo ($end-1==$i) ? $cde[$i].' = ' .$total: $cde[$i].'x';
}




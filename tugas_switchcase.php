<?php
$nilai = 0;

echo "Nilai : $nilai<br>";

switch(true){
	case ($nilai >= 80) :
	echo "nilai A";
	break;
	case ($nilai >= 70 && $nilai < 80) :
	echo "nilai B";
	break;
	case ($nilai >= 60 && $nilai < 70) :
	echo "nilai C";
	break;
	case ($nilai >= 0 && $nilai < 60) :
	echo "nilai D";
	break;
	default :
	echo "tidak terdaftar";
}
?>
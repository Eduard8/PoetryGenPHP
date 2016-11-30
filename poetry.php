<?php

$nouns=file_get_contents("verbs.txt");
$exp='/(\d)/';
$nouns=preg_replace($exp,"", $nouns);
$exp2='/\((.*?)\)/';
$nouns=preg_replace($exp2,"",$nouns);
$exp3='/(\s+)/';
$nouns=preg_replace($exp3," ",$nouns);
$test=file_put_contents("public/verbsarr.txt", $nouns);
if ($test == true){
	echo "HUZZA";
}
//~ $nounsarray=explode(" ",$nouns);
//~ unset($nounsarray[0]);
//~ var_dump($nounsarray);
//~ file_put_contents("nounsarray.txt", $nounsarray);
?>

<html>
<head>
  <style>
    body {
        background: white }
    section {
	text-align:center;
        border-radius: 1em;
        padding: 1em;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%) }
</style>
</head>
<section>
<?php
function makearray($path){ 
$variable=file_get_contents($path);
$variable=explode(" ",$variable);
return $variable;

								}
								

function randomize($input){
	$var=$input[mt_rand(0, count($input) -1)];
return $var;
}
$imagesDir = 'artist/';

$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

$randomImage = $images[array_rand($images)]

echo "<image src=" . $randomImage . "></image>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


$nounarray=makearray("public/nounsarray.txt");
$adjarr=makearray("public/adjarr.txt"); 
$verbarr=makearray("public/verbsarr.txt");
$prefixarr=makearray("public/prefix.txt");


$randadj=randomize($adjarr);
$randomprefix=randomize($prefixarr);
$randverb=randomize($verbarr);
$randnoun=randomize($nounarray);
$randnoun2=randomize($nounarray);
$randadj2=randomize($adjarr);
echo $randomprefix . " " . $randadj ." " . $randnoun . " <br/>"; 
?>
</section>
</html>

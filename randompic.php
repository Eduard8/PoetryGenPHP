<html>
<body>
<?php
$imagesDir = 'ferns/';

$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

$randomImage = $images[array_rand($images)];

echo "<image src=" . $randomImage . "></image>"

?>
</body>
</html>

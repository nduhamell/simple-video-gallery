<?php
$thumbs = "videos/";
$imgs = "videos/";

$files = glob($thumbs."*.*");

for ($i=1; $i<count($files); $i++)

{

$image = $files[$i];
//how do I point it to the other directory
   include_once("inc/nav.php");

echo '<video style="padding-left:2%;padding-right:2%;padding-top:2%;padding-bottom:2%;" width="29%" height="270" controls autoplay>';
echo '<source src="'.$image.'" type="video/mp4">';
echo '<object data="'.$image.' width="320" height="240">';
echo '</object>';
echo '</video>';
}
   include_once("inc/footer.php");

?>
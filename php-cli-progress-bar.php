<?php
function pgbar($a=1,$b=100,$fill=true,$barsize=20){
echo " [";
$prct = round(($a/$b)*$barsize);
if ($fill){
$w=$barsize-$prct;
$y=$prct;
}else{
$w=$prct;
$y=$barsize-$prct;
}
for ($z=0;$z<$y;$z++){
        echo "#";
}
for ($x=0;$x<$w;$x++){
        echo " ";
}
echo "] ";
$l = round(($a/$b)*100);
if (!$fill){
        $l = 100 - $l;
}
if (strlen((string) $l)==1){
        echo "  " . $l;
} elseif (strlen((string) $l)==2){
        echo " " . $l;
} else {
        echo $l;
}
echo "%";
echo "\r";
}
?>

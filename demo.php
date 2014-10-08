<?php
include 'php-cli-progress-bar.php';

for($t=10000;$t>=0;$t--){
        pgbar($t,10000,true);
}

for ($t=1;$t<=10000;$t++){
        pgbar($t,10000,true);
}
?>

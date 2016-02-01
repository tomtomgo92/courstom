<?php
function argum ( $nombre,$chiffre ){

if($nombre>$chiffre){

return "1";
}

elseif ($nombre<$chiffre){

return "-1";
}

else{
return "0";
}

}
echo argum ($_GET['a'],$_GET['b']);
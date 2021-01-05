<?php
/*ne pas oublier de mettre le chemin absolu suivant la plateforme ou
est stockee fichier*/
$handle=@fopen('../compteur/compteur.cmp','r+');
$compteur=(int)fgets($handle);
$valeur=$compteur+1;
fseek($handle,0);
fputs($handle,$valeur);
fclose ($handle);
?>

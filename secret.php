<?php
$mdp ="nicolas";

if (isset ($_POST['mdp']) && ($_POST['mdp']==$mdp)) {
echo "welcome";
}
else{
echo "mot de passe invalide ;;;;";
}


?>

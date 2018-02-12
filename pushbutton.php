<?php
   //***********************************************************************************************************************
   // V1.0 : Script qui simule l'action d'un bouton poussoir
   //*************************************** API eedomus ******************************************************************
   
   // recuperation des infos depuis la requete
  
    $periphId=getArg("periph");
    $val1 = getArg("val1");
    $val2 = getArg("val2");
    if ($val1 == '') {
        $val1 = 100;
    }
    
    if ($val2 == '') {
        $val2 = 0;
    }

    if ($periphId != '' and $periphId != 'plugin.parameters.device_id') {
		setValue($periphId, $val1, $verify_value_list = false, $update_only = false);
		usleep(500000);
		setValue($periphId, $val2, $verify_value_list = false, $update_only = false);
    } 
die();
?>
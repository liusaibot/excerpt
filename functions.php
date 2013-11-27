<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function truncate_text($text,$numb) {
        //$numb=50;
	if (strlen($text) > $numb) {
	  $text = substr($text, 0, $numb);
	  $text = substr($text,0,strrpos($text," "));
	  $etc = " ...";
	  $text = $text.$etc;
	  }
	return $text;
    }


?>

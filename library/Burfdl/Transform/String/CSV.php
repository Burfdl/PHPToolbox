<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CSV
 *
 * @author godfred7
 */
class Burfdl_Transform_String_CSV extends Burfdl_Transform_String_Abstract {
	public function transform($input, $delimiter = ",", $enclosure = "\"", $escape = "\\") {
		return str_getcsv($input, $delimiter, $enclosure, $escape);
	}
}

?>

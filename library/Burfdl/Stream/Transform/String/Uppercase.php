<?php

class Burfdl_Stream_Transform_String_Uppercase
	extends Burfdl_Stream_Transform_String_Abstract 
{
	public function current() {
		return strtoupper(parent::current());
	}
}

?>

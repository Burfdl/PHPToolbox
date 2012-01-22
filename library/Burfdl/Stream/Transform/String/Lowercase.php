<?php

class Burfdl_Stream_Transform_String_Lowercase 
	extends Burfdl_Stream_Transform_String_Abstract 
{
	public function current() {
		return strtolower(parent::current());
	}
}

?>

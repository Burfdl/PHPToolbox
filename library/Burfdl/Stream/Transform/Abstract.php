<?php

abstract class Burfdl_Stream_Transform_Abstract extends Burfdl_Stream_Reader_Abstract {
	
	protected $reader = null;
	
	public function __construct(Burfdl_Stream_Reader_Abstract $reader) {
		$this->reader = $reader;
	}
}
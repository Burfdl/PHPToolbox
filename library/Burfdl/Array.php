<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Array
 *
 * @author godfred7
 */
class Burfdl_Array extends ArrayObject {
	
	public function __construct($array) {
		parent::__construct($array);
	}
	
	public function __clone() {
		$return = new Burfdl_Array($this);
	}
	
	public function and_keys($array) {
		return 
			new Burfdl_Array(Burfdl_Array_Toolbox::and_keys($this, $array));
	}
	
	public function and_values($array) {
		return 
			new Burfdl_Array(Burfdl_Array_Toolbox::and_values($this, $array));
	}
	
	public function or_keys($array) {
		return
			new Burfdl_Array(Burfdl_Array_Toolbox::or_keys($this, $array));
	}
	
	public function or_values($array) {
		return
			new Burfdl_Array(Burfdl_Array_Toolbox::or_values($this, $array));
	}
	
	public function and_not_keys($array) {
		return
			new Burfdl_Array(Burfdl_Array_Toolbox::and_not_keys($this, $array));
	}
	
	public function and_not_values($array) {
		return
			new Burfdl_Array(
				Burfdl_Array_Toolbox::and_not_values($this, $array)
			);
	}
	
	public function xor_keys($array) {
		return
			new Burfdl_Array(Burfdl_Array_Toolbox::xor_keys($this, $array));
	}
	
	public function xor_values($array) {
		return
			new Burfdl_Array(Burfdl_Array_Toolbox::xor_values($this, $array));
	}
	
	public function rotate() {
		return new Burfdl_Array(Burfdl_Array_Toolbox::rotateArray($this));
	}
	
	public function toArray() {
		return $this->getArrayCopy();
	}
}
?>

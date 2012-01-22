<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HTTP
 *
 * @author godfred7
 */
class Burfdl_Stream_Reader_HTTP extends Burfdl_Stream_Reader_Abstract {
	private $url = null;
	private $body = null;
	private $index = null;
	
	public function __construct($url) {
		$this->url = $url;
	}
	
	private function getBody() {
		return (
			$this->body === null 
				? $this->body = $this->fetchBody() 
				: $this->body
		);
	}
	
	private function fetchBody() {
		$ch = curl_init($this->url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		return curl_exec($ch);
	}
	
	
}

?>

<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Buffer
 *
 * @author godfred7
 */
class Burfdl_Stream_Writer_Buffer extends Burfdl_Stream_Writer_Abstract {
	
	protected $writer = null;
	protected $buffer = array();
	
	protected $closed = false;
	
	public function __construct(Burfdl_Stream_Writer_Abstract $writer) {
		$this->writer = $writer;
	}
	
	public function write_one($row) {
		$this->buffer[] = $row;
	}
	
	protected function flush() {
		if (count($this->buffer)) {
			if ($this->closed) {
				throw new Exception(
					"Cannot flush buffer to stream_writer; already closed"
				);
			}
			$this->writer->write_many($this->buffer);
		}
		$this->buffer = array();
	}
	
	public function close() {
		$this->flush();
		$this->closed = true;
		$this->writer->close();
	}
}
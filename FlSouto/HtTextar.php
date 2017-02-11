<?php

namespace FlSouto;

class HtTextar extends HtTextin{

	function __construct($name){
		parent::__construct($name);
		$this->cols(40);
		$this->rows(4);
	}

	function size($colsxrows){
		$arr = explode('x',"$colsxrows");
		if(ctype_digit($arr[0])){
			$this->cols($arr[0]);
		}
		if(isset($arr[1]) && ctype_digit($arr[1])){
			$this->rows($arr[1]);
		}
		return $this;
	}

	function cols($cols){
		$this->attrs(['cols'=>$cols]);
		return $this;
	}

	function rows($rows){
		$this->attrs(['rows'=>$rows]);
		return $this;
	}

	function renderReadonly(){
		$this->attrs(['readonly'=>'readonly']);
		$value = $this->value();
		echo "<textarea {$this->attrs}>$value</textarea>";
	}

	function renderWritable(){
		$value = $this->value();
		if(isset($this->attrs['readonly'])){
			unset($this->attrs['readonly']);
		}
		echo "<textarea {$this->attrs}>$value</textarea>";
	}

}
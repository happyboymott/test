<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; class Captcha extends AbstractField { protected $listable = false; protected $showable = false; protected function setup() { $this->addVariables(array('url' => modstart_web_url('placeholder/300x800'))); } public function url($a963s) { $this->addVariables(array('url' => $a963s)); return $this; } }
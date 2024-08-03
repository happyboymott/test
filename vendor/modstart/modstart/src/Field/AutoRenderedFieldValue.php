<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use Illuminate\Support\Facades\View; class AutoRenderedFieldValue { private $value; public function __construct($R7kqa) { $this->value = $R7kqa; } public static function make($R7kqa) { return new static($R7kqa); } public static function makeView($Q1xSd, $knKQZ = array()) { return self::make(View::make($Q1xSd, $knKQZ)->render()); } public function getValue() { return $this->value; } }
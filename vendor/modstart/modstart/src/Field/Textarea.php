<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; class Textarea extends AbstractField { protected function setup() { $this->addVariables(array('autoHeight' => false, 'autoHeightMin' => 300)); } public function autoHeight($R7kqa, $Tm4fp = 300) { $this->addVariables(array('autoHeight' => $R7kqa, 'autoHeightMin' => $Tm4fp)); return $this; } }
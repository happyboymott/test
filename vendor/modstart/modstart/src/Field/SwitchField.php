<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use ModStart\Core\Util\ConvertUtil; use ModStart\Field\Concern\CanCascadeFields; class SwitchField extends AbstractField { use CanCascadeFields; protected $width = 80; protected function setup() { $this->addVariables(array('options' => array(1 => L('On'), 0 => L('Off')))); } public function unserializeValue($R7kqa, AbstractField $Nmpi_) { if (null === $R7kqa) { return $R7kqa; } return $R7kqa ? true : false; } public function serializeValue($R7kqa, $p6TQ_) { return $R7kqa ? true : false; } public function prepareInput($R7kqa, $p6TQ_) { return $R7kqa ? true : false; } public function optionsOnOff() { $this->addVariables(array('options' => array(1 => L('On'), 0 => L('Off')))); return $this; } public function optionsYesNo() { $this->addVariables(array('options' => array(1 => L('Yes'), 0 => L('No')))); return $this; } public function render() { $this->addCascadeScript(); return parent::render(); } }
<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; class Rate extends AbstractField { protected function setup() { $this->addVariables(array('maxValue' => 10)); } public function maxValue($x88Tq) { $this->addVariables(array('maxValue' => $x88Tq)); return $this; } public function unserializeValue($R7kqa, AbstractField $Nmpi_) { if ('' === $R7kqa || null === $R7kqa) { return null; } return intval($R7kqa); } public function serializeValue($R7kqa, $p6TQ_) { if ('' === $R7kqa || null === $R7kqa) { return null; } return intval($R7kqa); } public function prepareInput($R7kqa, $p6TQ_) { if ('' === $R7kqa || null === $R7kqa) { return null; } return intval($R7kqa); } }
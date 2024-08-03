<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; class Datetime extends AbstractField { protected $width = 160; public function unserializeValue($R7kqa, AbstractField $Nmpi_) { if ('' === $R7kqa || null === $R7kqa) { return null; } return $R7kqa; } public function serializeValue($R7kqa, $p6TQ_) { if ('' === $R7kqa || null === $R7kqa) { return null; } return $R7kqa; } public function prepareInput($R7kqa, $p6TQ_) { if ('' === $R7kqa || null === $R7kqa) { return null; } return $R7kqa; } }
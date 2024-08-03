<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use ModStart\Core\Util\ConvertUtil; use ModStart\Core\Util\SerializeUtil; class Images extends AbstractField { protected $width = 80; protected function setup() { $this->addVariables(array('server' => modstart_admin_url('data/file_manager/image'))); } public function server($bu3wb) { $this->addVariables(array('server' => $bu3wb)); return $this; } public function unserializeValue($R7kqa, AbstractField $Nmpi_) { if (null === $R7kqa) { return $R7kqa; } return ConvertUtil::toArray($R7kqa); } public function serializeValue($R7kqa, $p6TQ_) { return SerializeUtil::jsonEncode($R7kqa); } public function prepareInput($R7kqa, $p6TQ_) { return ConvertUtil::toArray($R7kqa); } }
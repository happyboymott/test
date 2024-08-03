<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use ModStart\Core\Util\ConvertUtil; use ModStart\Core\Util\SerializeUtil; class Files extends AbstractField { const MODE_DEFAULT = 'default'; const MODE_RAW = 'raw'; protected $width = 80; protected function setup() { $this->addVariables(array('mode' => self::MODE_DEFAULT, 'server' => modstart_admin_url('data/file_manager/file'))); } public function server($bu3wb) { $this->addVariables(array('server' => $bu3wb)); return $this; } public function mode($pZCf3) { $this->addVariables(array('mode' => $pZCf3)); return $this; } public function unserializeValue($R7kqa, AbstractField $Nmpi_) { if (null === $R7kqa) { return $R7kqa; } return ConvertUtil::toArray($R7kqa); } public function serializeValue($R7kqa, $p6TQ_) { return SerializeUtil::jsonEncode($R7kqa); } public function prepareInput($R7kqa, $p6TQ_) { return ConvertUtil::toArray($R7kqa); } }
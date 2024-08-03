<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use ModStart\Core\Util\SerializeUtil; class Values extends AbstractField { protected $width = 300; protected $listable = false; protected function setup() { $this->addVariables(array('viewMode' => 'default')); } public function viewMode($RAFLy) { $this->addVariables(array('viewMode' => $RAFLy)); return $this; } public function viewModeMini() { return $this->viewMode('mini'); } public function unserializeValue($R7kqa, AbstractField $Nmpi_) { goto pat0C; uOaex: return $R7kqa; goto vfpCo; BhmIo: if (empty($R7kqa)) { $R7kqa = array(); } goto uOaex; pat0C: if (null === $R7kqa) { return $R7kqa; } goto Aqkzs; Aqkzs: $R7kqa = @json_decode($R7kqa, true); goto BhmIo; vfpCo: } public function serializeValue($R7kqa, $p6TQ_) { return SerializeUtil::jsonEncode($R7kqa); } public function prepareInput($R7kqa, $p6TQ_) { goto z7x3f; toAdr: if (empty($R7kqa)) { $R7kqa = array(); } goto OPUkt; OPUkt: return $R7kqa; goto srQah; z7x3f: $R7kqa = @json_decode($R7kqa, true); goto toAdr; srQah: } }
<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use ModStart\Core\Exception\BizException; use ModStart\Core\Util\SerializeUtil; class JsonKeyValue extends AbstractField { protected $width = 200; public function unserializeValue($R7kqa, AbstractField $Nmpi_) { return @json_decode($R7kqa, true); } public function serializeValue($R7kqa, $p6TQ_) { return SerializeUtil::jsonEncode($R7kqa); } public function prepareInput($R7kqa, $p6TQ_) { goto TNpoi; TNpoi: $JUfvF = @json_decode($R7kqa, true); goto Ul2Ok; Ul2Ok: BizException::throwsIf($this->label . ' ' . L('Json Format Error'), $R7kqa && null === $JUfvF); goto z3ShO; z3ShO: return $JUfvF; goto vbu8k; vbu8k: } }
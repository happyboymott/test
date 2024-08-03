<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; class Period extends AbstractField { public function unserializeValue($R7kqa, AbstractField $Nmpi_) { return $R7kqa; } public function serializeValue($R7kqa, $p6TQ_) { return $R7kqa; } public function prepareInput($R7kqa, $p6TQ_) { goto lFnM2; u4zOM: return sprintf('%02d:%02d:%02d', $ksIVB[0], $ksIVB[1], $ksIVB[2]); goto QQIu7; lFnM2: $OxU4_ = explode(':', $R7kqa); goto wr41N; p1wFL: foreach ($ksIVB as $QSYJT => $repda) { $ksIVB[$QSYJT] = max(intval($repda), 0); } goto u4zOM; wr41N: $ksIVB = array(isset($OxU4_[0]) ? $OxU4_[0] : 0, isset($OxU4_[1]) ? $OxU4_[1] : 0, isset($OxU4_[2]) ? $OxU4_[2] : 0); goto p1wFL; QQIu7: } }
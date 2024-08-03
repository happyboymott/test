<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter; class Lt extends AbstractFilter { public function condition($uSzfg) { goto VSigx; VSigx: $R7kqa = array_get($uSzfg, $this->column); goto Ie3lu; M5REy: return $this->buildCondition($this->column, '<=', $this->value); goto B0ubR; Ie3lu: if (is_null($R7kqa)) { return; } goto RILrc; RILrc: $this->value = $R7kqa; goto M5REy; B0ubR: } }
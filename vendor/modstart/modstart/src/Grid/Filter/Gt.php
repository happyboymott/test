<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter; class Gt extends AbstractFilter { public function condition($uSzfg) { goto bAdpM; bAdpM: $R7kqa = array_get($uSzfg, $this->column); goto DaXl9; Pltrc: return $this->buildCondition($this->column, '>=', $this->value); goto P8P4U; DaXl9: if (is_null($R7kqa)) { return; } goto o0kQj; o0kQj: $this->value = $R7kqa; goto Pltrc; P8P4U: } }
<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter; use ModStart\Grid\Filter\Field\Datetime; class Range extends AbstractFilter { public function condition($Wun7g) { if (isset($Wun7g['range']) && ($Wun7g['range']['min'] || $Wun7g['range']['max'])) { goto cpQNE; cpQNE: $R7kqa = $Wun7g['range']; goto sgJr8; yOB3r: if (!isset($R7kqa['max'])) { return $this->buildCondition($this->column, '>=', $R7kqa['min']); } goto hcgsP; sgJr8: if (!isset($R7kqa['min'])) { return $this->buildCondition($this->column, '<=', $R7kqa['max']); } goto yOB3r; hcgsP: $this->query = 'whereBetween'; goto bfxcG; bfxcG: return $this->buildCondition($this->column, array($R7kqa['min'], $R7kqa['max'])); goto q2CVw; q2CVw: } return null; } public function datetime() { $this->field = new Field\Datetime($this); return $this; } public function date() { $this->field = new Field\Date($this); return $this; } public function text() { $this->field = new Field\Text($this); return $this; } public function number() { $this->field = new Field\Number($this); return $this; } }
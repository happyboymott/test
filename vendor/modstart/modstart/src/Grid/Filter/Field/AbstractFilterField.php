<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter\Field; use ModStart\Grid\Filter\AbstractFilter; use ModStart\Support\Concern\HasFluentAttribute; abstract class AbstractFilterField { use HasFluentAttribute; private $fluentAttributes = array(); protected $label = ''; private $filter; public function __construct(AbstractFilter $wdoSD) { $this->filter = $wdoSD; $this->setup(); } protected function setup() { } public function label($R7kqa = null) { goto hLDV7; dFUXr: $this->label = $R7kqa; goto pXvTX; hLDV7: if (is_null($R7kqa)) { return $this->label; } goto dFUXr; pXvTX: return $this; goto I3UXE; I3UXE: } public function variables() { goto LK6Hp; LK6Hp: $sZufA = array(); goto CcbUc; CcbUc: foreach ($this->fluentAttributes as $QSYJT) { $sZufA[$QSYJT] = $this->{$QSYJT}; } goto kW0he; kW0he: return $sZufA; goto OD9GO; OD9GO: } public function __call($pqQwP, $Rb1XH) { if ($this->isFluentAttribute($pqQwP)) { return $this->fluentAttribute($pqQwP, $Rb1XH); } throw new \Exception('AbstractFilterField __call error : ' . $pqQwP); } }
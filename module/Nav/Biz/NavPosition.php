<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Nav\Biz; class NavPosition extends AbstractNavPositionBiz { private $name; private $title; public static function make($MXTsP, $A8WB0) { goto M8via; lcG4m: return $db3lI; goto XOLry; CYh3S: $db3lI->name = $MXTsP; goto i799q; i799q: $db3lI->title = $A8WB0; goto lcG4m; M8via: $db3lI = new static(); goto CYh3S; XOLry: } public function name() { return $this->name; } public function title() { return $this->title; } }
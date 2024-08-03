<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\SuperSearch; class QuickSuperSearchBiz extends AbstractSuperSearchBiz { protected $name; protected $title; protected $field; public static function make($MXTsP, $A8WB0, $JsHEv) { goto RNjEh; sXFri: $strQF->name = $MXTsP; goto xCLqU; xCLqU: $strQF->title = $A8WB0; goto H6Nqz; H6Nqz: $strQF->field = $JsHEv; goto Jjxy_; RNjEh: $strQF = new static(); goto sXFri; Jjxy_: return $strQF; goto Rkf5Y; Rkf5Y: } public function name() { return $this->name; } public function title() { return $this->title; } public function fields() { return $this->field; } }
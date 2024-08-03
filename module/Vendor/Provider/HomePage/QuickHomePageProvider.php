<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\HomePage; class QuickHomePageProvider extends AbstractHomePageProvider { protected $type; protected $title; protected $action; public static function make($A8WB0, $wZXSS, $INRHE = array(self::TYPE_PC, self::TYPE_MOBILE)) { goto eryCb; y0zaV: $CL4lD->type = $INRHE; goto VCW1s; NqR83: $CL4lD->action = $wZXSS; goto t9X7q; eryCb: $CL4lD = new static(); goto y0zaV; VCW1s: $CL4lD->title = $A8WB0; goto NqR83; t9X7q: return $CL4lD; goto Ehtl7; Ehtl7: } public function type() { return $this->type; } public function title() { return $this->title; } public function action() { return $this->action; } }
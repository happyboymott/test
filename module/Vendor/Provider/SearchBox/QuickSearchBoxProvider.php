<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\SearchBox; class QuickSearchBoxProvider extends AbstractSearchBoxProvider { protected $name; protected $title; protected $url; protected $order; public static function make($MXTsP, $A8WB0, $wg3Zt, $WFr7l = 1000) { goto V3ldN; f2O4F: $CL4lD->name = $MXTsP; goto t69f7; sqGGB: $CL4lD->order = $WFr7l; goto F_Q7C; LqqIq: $CL4lD->url = $wg3Zt; goto sqGGB; t69f7: $CL4lD->title = $A8WB0; goto LqqIq; V3ldN: $CL4lD = new static(); goto f2O4F; F_Q7C: return $CL4lD; goto N1L__; N1L__: } public function name() { return $this->name; } public function title() { return $this->title; } public function url() { return $this->url; } public function order() { return $this->order; } }
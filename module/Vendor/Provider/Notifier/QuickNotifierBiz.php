<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\Notifier; class QuickNotifierBiz extends AbstractNotifierBiz { private $name; private $title; public function __construct($MXTsP, $A8WB0) { $this->name = $MXTsP; $this->title = $A8WB0; } public function name() { return $this->name; } public function title() { return $this->title; } }
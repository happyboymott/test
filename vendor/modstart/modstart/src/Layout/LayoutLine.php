<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Layout; use ModStart\Core\Util\IdUtil; use ModStart\Field\AbstractField; class LayoutLine extends AbstractField { protected $isLayoutField = true; private $layoutClosure = null; public function __construct($KVymd, $Rb1XH = array()) { goto aqL2M; aqL2M: parent::__construct(IdUtil::generate('LayoutPanel')); goto UVlvR; UVlvR: $this->label = $KVymd; goto d6tz1; d6tz1: $this->layoutClosure = $Rb1XH[0]; goto k10QG; k10QG: } public function postSetup() { goto PVhOy; eZeqL: $this->context->html($this->column() . '_end')->html('</div></div>')->plain(); goto gAj7Q; PVhOy: $this->context->html($this->column() . '_start')->html('<div class="line"><div class="label">' . $this->label . ':</div><div class="field">')->plain(); goto baRsE; baRsE: call_user_func($this->layoutClosure, $this->context()); goto eZeqL; gAj7Q: } public function render() { return ''; } }
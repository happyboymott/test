<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Layout; use ModStart\Core\Util\IdUtil; use ModStart\Field\AbstractField; class LayoutPanel extends AbstractField { protected $isLayoutField = true; private $layoutClosure = null; private $panelTitle; public function __construct($KVymd, $Rb1XH = array()) { goto YqUou; zJcGN: $this->layoutClosure = $Rb1XH[0]; goto Fl7pZ; Fhi78: $this->panelTitle = $KVymd; goto zJcGN; YqUou: parent::__construct(IdUtil::generate('LayoutPanel')); goto Fhi78; Fl7pZ: } public function postSetup() { goto l1HHs; dJEtF: call_user_func($this->layoutClosure, $this->context()); goto wbIsa; l1HHs: $this->context->html($this->column() . '_start')->html('<div class="ub-panel"><div class="head"><div class="title">' . $this->panelTitle . '</div></div><div class="body">')->plain(); goto dJEtF; wbIsa: $this->context->html($this->column() . '_end')->html('</div></div>')->plain(); goto e7tj5; e7tj5: } public function render() { return ''; } }
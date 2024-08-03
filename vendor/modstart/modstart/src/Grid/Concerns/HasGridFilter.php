<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Concerns; use ModStart\Grid\GridFilter; trait HasGridFilter { protected $gridFilterJoins = array(); protected $gridFilter; private function setupGridFilter() { $this->gridFilter = new GridFilter($this->model); } public function getGridFilter() { return $this->gridFilter; } public function gridFilterJoins() { return $this->gridFilterJoins; } public function gridFilterJoinAdd($pZCf3, $a5ocU, $JFX5S, $djja6 = null, $MtUKj = null) { $this->gridFilterJoins[] = array($pZCf3, $a5ocU, $JFX5S, $djja6, $MtUKj); return $this; } }
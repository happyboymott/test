<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\QuickRun\Crawl; class ArrayQueue implements BaseQueue { private $data = array(); function prepend($fnzOF, $xXY5G = array(), $wlXEl = null) { array_unshift($this->data, array('id' => $wlXEl, 'handler' => $fnzOF, 'param' => $xXY5G)); } function append($fnzOF, $xXY5G = array(), $wlXEl = null) { array_push($this->data, array('id' => $wlXEl, 'handler' => $fnzOF, 'param' => $xXY5G)); } function exists($wlXEl) { foreach ($this->data as $LKQ89) { if ($LKQ89['id'] == $wlXEl) { return true; } } return false; } function size() { return count($this->data); } function poll() { return array_shift($this->data); } }
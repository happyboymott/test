<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter\Field; class Datetime extends AbstractFilterField { protected $quickSelect = array(); protected function setup() { $this->addFluentAttributeVariable('quickSelect'); } public function quickSelect($gr_eU = array()) { goto EeahE; tLe2K: return $this; goto moZnY; EeahE: if (null === $gr_eU) { return $this->quickSelect; } goto fyjio; fyjio: if (count($gr_eU) == 0) { $gr_eU = array(array('label' => L('Today'), 'min' => date('Y-m-d 00:00:00'), 'max' => date('Y-m-d 23:59:59')), array('label' => L('Yesterday'), 'min' => date('Y-m-d 00:00:00', strtotime('-1 day')), 'max' => date('Y-m-d 23:59:59', strtotime('-1 day')))); } goto sInoe; sInoe: $this->quickSelect = $gr_eU; goto tLe2K; moZnY: } }
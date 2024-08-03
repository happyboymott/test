<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use ModStart\Core\Dao\ModelUtil; use ModStart\Core\Util\ConvertUtil; use ModStart\Field\Concern\CanCascadeFields; use ModStart\Field\Type\FieldRenderMode; class Radio extends AbstractField { use CanCascadeFields; protected function setup() { $this->addVariables(array('vertical' => false, 'options' => array())); } public function vertical($R7kqa) { $this->addVariables(array('vertical' => $R7kqa)); return $this; } public function optionValues($chR3A) { $chR3A = array_build($chR3A, function ($QmpAx, $R7kqa) { return array($R7kqa, $R7kqa); }); return $this->options($chR3A); } public function options($UvCfk) { $this->addVariables(array('options' => $UvCfk)); return $this; } public function optionType($rDoih) { return $this->options($rDoih::getList()); } public function optionModel($a5ocU, $jJUNj = 'id', $UuuXG = 'name') { return $this->options(ModelUtil::valueMap($a5ocU, $jJUNj, $UuuXG)); } public function render() { $this->addCascadeScript(); return parent::render(); } }
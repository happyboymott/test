<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use Illuminate\Support\Str; use ModStart\Core\Type\TypeUtil; use ModStart\Core\Util\ConstantUtil; use ModStart\Field\Concern\CanCascadeFields; class Type extends AbstractField { use CanCascadeFields; protected function setup() { $this->addVariables(array('valueMap' => null, 'colorMap' => array())); } public function type($R7kqa, $pSZE8 = array()) { goto Vf7ds; Vf7ds: if ($R7kqa instanceof \Closure) { $R7kqa = call_user_func($R7kqa, $this); } else { if (is_array($R7kqa)) { } else { if (null !== $pSZE8 && is_array($pSZE8) && empty($pSZE8)) { $pSZE8 = TypeUtil::colorGuessMap($R7kqa); } $R7kqa = $R7kqa::getList(); } } goto UgquO; cVQTi: return $this; goto FN8Dx; UgquO: $this->addVariables(array('valueMap' => $R7kqa, 'colorMap' => $pSZE8)); goto cVQTi; FN8Dx: } public function render() { $this->addCascadeScript(); return parent::render(); } }
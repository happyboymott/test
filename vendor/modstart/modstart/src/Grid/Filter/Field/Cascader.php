<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter\Field; use ModStart\Core\Exception\BizException; use ModStart\Core\Type\BaseType; class Cascader extends AbstractFilterField { protected $nodes = array(); protected function setup() { $this->addFluentAttributeVariable('nodes'); } public function nodes($Q0PZT = null) { goto RN7oL; t6D_s: $this->nodes = $R7kqa; goto hv0zh; cUr6Z: if (is_string($Q0PZT) && is_subclass_of($Q0PZT, BaseType::class)) { goto DKA0b; DKA0b: $R7kqa = array(); goto iIs3S; pUQzp: foreach ($Q0PZT::getList() as $QSYJT => $repda) { $R7kqa[] = array('id' => $QSYJT, 'pid' => 0, 'title' => $repda, 'sort' => $BRtWU++); } goto sCwLP; iIs3S: $BRtWU = 1; goto pUQzp; sCwLP: } else { if (is_array($Q0PZT)) { $R7kqa = $Q0PZT; } else { BizException::throws('Select nodes error'); } } goto t6D_s; RN7oL: if (null === $Q0PZT) { return $this->nodes; } goto cUr6Z; hv0zh: } }
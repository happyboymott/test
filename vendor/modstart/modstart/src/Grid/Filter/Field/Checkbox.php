<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter\Field; use ModStart\Core\Exception\BizException; use ModStart\Core\Type\BaseType; class Checkbox extends AbstractFilterField { protected $options = array(); protected function setup() { $this->addFluentAttributeVariable('options'); } public function options($UvCfk = null) { goto yfR_N; rgpyr: if (is_string($UvCfk) && is_subclass_of($UvCfk, BaseType::class)) { $R7kqa = $UvCfk::getList(); } else { if (is_array($UvCfk)) { $R7kqa = $UvCfk; } else { BizException::throws('Select options error'); } } goto GeWV8; yfR_N: if (null === $UvCfk) { return $this->options; } goto rgpyr; GeWV8: $this->options = $R7kqa; goto zwhe9; zwhe9: } }
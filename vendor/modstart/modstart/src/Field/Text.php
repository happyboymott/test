<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use ModStart\Core\Util\StrUtil; class Text extends AbstractField { protected function setup() { $this->addVariables(array('autoTrim' => false)); } public function autoTrim($S2sfb = true) { $this->addVariables(array('autoTrim' => $S2sfb)); return $this; } public function prepareInput($R7kqa, $CQZXb) { if ($this->variables['autoTrim']) { $R7kqa = StrUtil::filterSpecialChars($R7kqa); $R7kqa = trim($R7kqa); } return $R7kqa; } }
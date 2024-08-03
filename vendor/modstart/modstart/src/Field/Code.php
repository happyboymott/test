<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; class Code extends AbstractField { protected function setup() { $this->addVariables(array('maxHeight' => '10em', 'editorScripts' => '')); } public function maxHeight($R7kqa) { $this->addVariables(array('maxHeight' => $R7kqa)); return $this; } public function editorScripts($R7kqa) { $this->addVariables(array('editorScripts' => $R7kqa)); return $this; } }
<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use ModStart\Core\Util\HtmlUtil; class RichHtml extends AbstractField { protected $listable = false; protected static $js = array('asset/common/editor.js'); protected function setup() { $this->addVariables(array('editorMode' => 'default', 'server' => modstart_admin_url('data/ueditor'), 'htmlFilter' => true, 'editorOption' => null)); } public function editorMode($pZCf3) { $this->addVariables(array('editorMode' => $pZCf3)); return $this; } public function htmlFilter($wdoSD = true) { $this->addVariables(array('htmlFilter' => $wdoSD)); return $this; } public function editorOption($R7kqa = true) { $this->addVariables(array('editorOption' => $R7kqa)); return $this; } public function server($bu3wb) { $this->addVariables(array('server' => $bu3wb)); return $this; } public function prepareInput($R7kqa, $CQZXb) { if ($this->variables['htmlFilter']) { $R7kqa = HtmlUtil::filter($R7kqa); } return $R7kqa; } }
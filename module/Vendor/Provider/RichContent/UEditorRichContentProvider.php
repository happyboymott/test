<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\RichContent; use Illuminate\Support\Facades\View; use ModStart\Core\Util\HtmlUtil; use Module\Vendor\Html\HtmlConvertUtil; class UEditorRichContentProvider extends AbstractRichContentProvider { const NAME = 'htmlUEditor'; public function name() { return self::NAME; } public function title() { return 'UEditor富文本'; } public function render($MXTsP, $v0Qpl, $xXY5G = array()) { return View::make('module::Vendor.View.widget.richContent.htmlUeditor', array('name' => $MXTsP, 'value' => $v0Qpl, 'param' => $xXY5G))->render(); } public function toHtml($v0Qpl, $WxxIi = null) { $v0Qpl = HtmlUtil::filter($v0Qpl); return parent::toHtml($v0Qpl, $WxxIi); } }
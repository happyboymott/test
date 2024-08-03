<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\RichContent; use Module\Vendor\Html\HtmlConvertUtil; abstract class AbstractRichContentProvider { public abstract function name(); public abstract function title(); public abstract function render($MXTsP, $v0Qpl, $xXY5G = array()); public function toHtml($v0Qpl, $WxxIi = null) { return HtmlConvertUtil::callInterceptors($WxxIi, $v0Qpl); } }
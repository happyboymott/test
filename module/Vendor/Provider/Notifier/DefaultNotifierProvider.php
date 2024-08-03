<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\Notifier; use Illuminate\Support\Facades\Log; class DefaultNotifierProvider extends AbstractNotifierProvider { public function name() { return 'Default'; } public function title() { return '默认日志'; } public function notify($strQF, $A8WB0, $ZtuBh, $xXY5G = array()) { Log::info(sprintf('Vendor.DefaultNotifierProvider - %s - %s - %s', $strQF, $A8WB0, json_encode($ZtuBh, JSON_UNESCAPED_UNICODE))); } }
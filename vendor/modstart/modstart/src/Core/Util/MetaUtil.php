<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; use ModStart\Core\Exception\BizException; class MetaUtil { private static $supportKeys = array('APP_NAME'); public static function get($QmpAx) { goto M0OKD; WwmxU: return '-'; goto if1yq; M0OKD: static $SsOge = null; goto ZLdN7; KK6Y_: if (null === $SsOge) { goto sxfPS; sxfPS: $itoQ0 = base_path('meta.json'); goto u40vp; sLBTf: if (empty($SsOge)) { $SsOge = array(); } goto vZgw1; u40vp: if (file_exists($itoQ0)) { $SsOge = @json_decode(file_get_contents($itoQ0), true); } goto sLBTf; vZgw1: } goto DDSaX; DDSaX: if (isset($SsOge[$QmpAx])) { return $SsOge[$QmpAx]; } goto Ff9p7; Ff9p7: switch ($QmpAx) { case 'APP_NAME': if (defined('\\App\\Constant\\AppConstant::APP_NAME')) { return \App\Constant\AppConstant::APP_NAME; } else { if (defined('\\App\\Constant\\AppConstant::APP')) { return \App\Constant\AppConstant::APP; } } return 'UnknownAppName'; } goto WwmxU; ZLdN7: BizException::throwsIf('Meta信息不包含' . $QmpAx, !in_array($QmpAx, self::$supportKeys)); goto KK6Y_; if1yq: } }
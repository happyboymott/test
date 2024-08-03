<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Data\Event; use ModStart\Core\Util\EventUtil; class DataFileUploadedEvent { const OPT_IMAGE_COMPRESS_IGNORE = 'imageCompressIgnore'; const OPT_IMAGE_WATERMARK_IGNORE = 'imageWatermarkIgnore'; public $driver; public $category; public $path; public $opt; public static function fire($gekTw, $sVoE7, $am_Sn, $JcFpS = array()) { goto BKSxw; CKxVR: $Kl0Kj->path = $am_Sn; goto MVp_I; u_gGS: $Kl0Kj->category = $sVoE7; goto CKxVR; kbRiA: $Kl0Kj->driver = $gekTw; goto u_gGS; L0zku: EventUtil::fire($Kl0Kj); goto g08QO; BKSxw: $Kl0Kj = new DataFileUploadedEvent(); goto kbRiA; MVp_I: $Kl0Kj->opt = $JcFpS; goto L0zku; g08QO: } public function getOpt($QmpAx, $bM_Pb = null) { if (isset($this->opt[$QmpAx])) { return $this->opt[$QmpAx]; } return $bM_Pb; } private static $param = array(); public static function setParam($QmpAx, $R7kqa) { self::$param[$QmpAx] = $R7kqa; } public static function forgetParam($QmpAx) { unset(self::$param[$QmpAx]); } public static function getParam($QmpAx) { return isset(self::$param[$QmpAx]) ? self::$param[$QmpAx] : null; } }
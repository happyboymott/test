<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; class SerializeUtil { public static function jsonObject($fb7yT) { if (empty($fb7yT)) { $fb7yT = new \stdClass(); } return json_encode($fb7yT, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); } public static function jsonEncodeObject($fb7yT, $UvCfk = 0) { return json_encode($fb7yT, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_FORCE_OBJECT | $UvCfk); } public static function jsonEncode($fb7yT, $UvCfk = 0) { return json_encode($fb7yT, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | $UvCfk); } public static function jsonEncodePretty($fb7yT, $UvCfk = 0) { return json_encode($fb7yT, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT | $UvCfk); } public static function jsonDecode($fb7yT) { return json_decode($fb7yT, true); } }
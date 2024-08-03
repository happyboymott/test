<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Util; use ModStart\Core\Assets\AssetsUtil; class FileIconUtil { public static function url($E6O92) { goto fUHv9; vr6Rb: $km9Hk = isset($SbXv2[$E6O92]) ? $SbXv2[$E6O92] : $SbXv2['default']; goto PTlJz; PTlJz: return AssetsUtil::fixFull($Doavl . $km9Hk . '.svg'); goto iKrP2; Lwxbd: $SbXv2 = array('ai' => 'ai', 'apk' => 'apk', 'chm' => 'chm', 'css' => 'css', 'doc' => 'doc', 'docx' => 'docx', 'dwg' => 'dwg', 'gif' => 'gif', 'html' => 'html', 'jpeg' => 'jpeg', 'jpg' => 'jpg', 'log' => 'log', 'mp3' => 'mp3', 'mp4' => 'mp4', 'pdf' => 'pdf', 'png' => 'png', 'ppt' => 'ppt', 'pptx' => 'pptx', 'psd' => 'psd', 'rar' => 'rar', 'svg' => 'svg', 'torrent' => 'torrent', 'txt' => 'txt', 'xls' => 'xls', 'xlsx' => 'xlsx', 'zip' => 'zip', 'default' => 'unknown', '_DIR_' => 'folder'); goto vr6Rb; fUHv9: $Doavl = 'asset/vendor/ueditor/themes/default/exts/'; goto Lwxbd; iKrP2: } }
<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Data; use Illuminate\Support\Str; use ModStart\Core\Type\BaseType; class DataStorageType implements BaseType { private static $list = array('DataFile' => '本地存储'); public static function register($KtHB2, $KVymd) { self::$list[$KtHB2] = $KVymd; } public static function getList() { return self::$list; } public static function toDriverName($KtHB2) { if (!Str::startsWith($KtHB2, 'Data')) { $KtHB2 = 'Data' . $KtHB2; } return 'DataStorage_' . $KtHB2; } }
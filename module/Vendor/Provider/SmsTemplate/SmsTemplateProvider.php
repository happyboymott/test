<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\SmsTemplate; class SmsTemplateProvider { private static $instances = array(); public static function register($CjF8A) { self::$instances[] = $CjF8A; } public static function all() { foreach (self::$instances as $PPiLF => $SNE7X) { if ($SNE7X instanceof \Closure) { self::$instances[$PPiLF] = call_user_func($SNE7X); } else { if (is_string($SNE7X)) { self::$instances[$PPiLF] = app($SNE7X); } } } return self::$instances; } public static function map() { goto iCTw3; zi3Vj: return $SbXv2; goto a9Gwm; mOFou: foreach (self::all() as $LKQ89) { $SbXv2[$LKQ89->name()] = array('name' => $LKQ89->name(), 'title' => $LKQ89->title(), 'description' => $LKQ89->description(), 'example' => $LKQ89->example()); } goto zi3Vj; iCTw3: $SbXv2 = array(); goto mOFou; a9Gwm: } }
<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Config; use Illuminate\Support\Str; use ModStart\Core\Util\RenderUtil; class MemberNavMenu { private static $menu = array(); public static function register($oq2CW) { self::$menu[] = $oq2CW; } public static function get() { goto P51lD; P51lD: $oq2CW = array(); goto Z01Of; Z01Of: foreach (self::$menu as $LKQ89) { if ($LKQ89 instanceof \Closure) { $LKQ89 = call_user_func($LKQ89); } $oq2CW = array_merge($oq2CW, $LKQ89); } goto QZ4pA; QZ4pA: return $oq2CW; goto qieAd; qieAd: } public static function render() { goto J9r9Q; FVl1N: return RenderUtil::view('module::Member.View.inc.memberNavMenu', array('items' => $sWEZ6)); goto nHXX0; J9r9Q: $sWEZ6 = self::get(); goto atkN1; atkN1: if (empty($sWEZ6)) { return ''; } goto FVl1N; nHXX0: } }
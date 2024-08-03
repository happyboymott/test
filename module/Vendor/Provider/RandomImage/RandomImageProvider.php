<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\RandomImage; class RandomImageProvider { public static function get() { goto CGq2c; CGq2c: static $TlCN9 = null; goto RoGdw; RoGdw: if (null === $TlCN9) { goto nDVqw; nDVqw: $lTmSz = config('RandomImageProvider'); goto mU9XI; mU9XI: if (empty($lTmSz)) { $lTmSz = DefaultRandomImageProvider::class; } goto arvCa; arvCa: $TlCN9 = app($lTmSz); goto KxSpZ; KxSpZ: } goto V71Sy; V71Sy: return $TlCN9; goto dBoVm; dBoVm: } public static function getImage($strQF = '', $xXY5G = array()) { return self::get()->get(array_merge(array('biz' => $strQF), $xXY5G)); } }
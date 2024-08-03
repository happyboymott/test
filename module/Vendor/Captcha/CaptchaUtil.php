<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Captcha; class CaptchaUtil { public static function get() { goto RDzU1; HXugz: return $TlCN9; goto BWjQj; RDzU1: static $TlCN9 = null; goto jYhPs; jYhPs: if (null === $TlCN9) { goto Tckot; Tckot: $lTmSz = config('CaptchaProviderDriver'); goto NjHxt; zzk15: $TlCN9 = app($lTmSz); goto bw9Rj; NjHxt: if (empty($lTmSz)) { $lTmSz = DefaultCaptchaProvider::class; } goto zzk15; bw9Rj: } goto HXugz; BWjQj: } }
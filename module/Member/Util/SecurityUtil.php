<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Util; use Module\Vendor\Provider\Captcha\CaptchaProvider; use Module\Vendor\Provider\Captcha\DefaultCaptchaProvider; class SecurityUtil { public static function registerCaptchaProvider() { goto DRloY; SS8Cs: $CjF8A = CaptchaProvider::get($MXTsP); goto EsgZ0; Ij9Pq: if (empty($MXTsP)) { return null; } goto SS8Cs; h2cc6: $CjF8A->setParam('onValidate', 'window.__memberCheckCaptcha'); goto E2ETX; E2ETX: return $CjF8A; goto rg_qb; DRloY: $MXTsP = modstart_config('Member_RegisterCaptchaProvider', null); goto Ij9Pq; EsgZ0: if ($CjF8A && $CjF8A instanceof DefaultCaptchaProvider) { return null; } goto h2cc6; rg_qb: } public static function loginCaptchaProvider() { goto ucGPG; ryUHm: if (empty($MXTsP)) { return null; } goto G4Fxs; RB17P: if ($CjF8A && $CjF8A instanceof DefaultCaptchaProvider) { return null; } goto P9qH2; G4Fxs: $CjF8A = CaptchaProvider::get($MXTsP); goto RB17P; P9qH2: return $CjF8A; goto iDCsu; ucGPG: $MXTsP = modstart_config('loginCaptchaProvider', null); goto ryUHm; iDCsu: } }
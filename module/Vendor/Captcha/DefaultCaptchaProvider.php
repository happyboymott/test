<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Captcha; use Illuminate\Support\Facades\View; use ModStart\Core\Input\InputPackage; use ModStart\Core\Input\Response; use ModStart\Misc\Captcha\CaptchaFacade; class DefaultCaptchaProvider extends AbstractCaptchaProvider { public function render() { return View::make('module::Vendor.View.widget.captcha.default')->render(); } public function validate() { goto GwPCU; xGYTl: return Response::generateSuccess(); goto zKsHh; X4gKy: if (!CaptchaFacade::check($JSC4J)) { return Response::generate(-1, '图片验证码错误', null, '[js]$(\'[data-captcha]\').click();'); } goto xGYTl; GwPCU: $QBv2Z = InputPackage::buildFromInput(); goto cDz6n; cDz6n: $JSC4J = $QBv2Z->getTrimString('captcha'); goto X4gKy; zKsHh: } }
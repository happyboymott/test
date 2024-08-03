<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Banner\View; use Illuminate\Support\Facades\View; class BannerView { public static function basic($BNQpK, $SuY4c = '1400x400', $Z3kZY = null, $NhnrV = null, $Zv3cI = false, $lOe_1 = false) { goto LMHpl; tjiCv: if (null === $Z3kZY) { $Z3kZY = '5-2'; } goto D34Qo; KIEuo: return View::make('module::Banner.View.inc.banner', array('position' => $BNQpK, 'bannerSize' => $SuY4c, 'bannerRatio' => $Z3kZY, 'mobileBannerRatio' => $NhnrV, 'round' => $Zv3cI, 'container' => $lOe_1))->render(); goto Gt2mX; vxU03: if (null === $Zv3cI) { $Zv3cI = false; } goto KIEuo; LMHpl: if (null === $SuY4c) { $SuY4c = '1400x400'; } goto tjiCv; D34Qo: if (null === $NhnrV) { $NhnrV = $Z3kZY; } goto vxU03; Gt2mX: } }
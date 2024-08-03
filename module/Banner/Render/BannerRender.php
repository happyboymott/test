<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Banner\Render; use Illuminate\Support\Facades\View; class BannerRender { public static function position($BNQpK, $SuY4c = '1400x400', $Z3kZY = '5-2', $NhnrV = '3-2', $Zv3cI = false) { goto JrnOh; NNrlX: if (null === $Z3kZY) { $Z3kZY = '5-2'; } goto mDQjf; mDQjf: if (null === $NhnrV) { $NhnrV = '1-1'; } goto CxQ0d; VZhV3: return View::make('module::Banner.View.pc.public.banner', array('position' => $BNQpK, 'bannerSize' => $SuY4c, 'bannerRatio' => $Z3kZY, 'mobileBannerRatio' => $NhnrV, 'round' => $Zv3cI))->render(); goto OGBlZ; JrnOh: if (null === $SuY4c) { $SuY4c = '1400x400'; } goto NNrlX; CxQ0d: if (null === $Zv3cI) { $Zv3cI = false; } goto VZhV3; OGBlZ: } }
<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Web\Controller; use Illuminate\Routing\Controller; use ModStart\App\Web\Layout\WebPage; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\InputPackage; use ModStart\Form\Form; use Module\Vendor\Provider\ContentVerify\ContentVerifyBiz; class ContentVerifyController extends Controller { public function index(WebPage $ngjDL, $MXTsP) { goto T33Fb; T33Fb: $CjF8A = ContentVerifyBiz::get($MXTsP); goto VgmiV; uieUV: return view('module::Vendor.View.contentVerify.index', array('content' => $GtTXi->render(), 'pageTitle' => '审核 · ' . $CjF8A->title())); goto PqFto; VgmiV: BizException::throwsIfEmpty('数据异常', $CjF8A); goto GOePE; cFK0J: $W9vZV = $CjF8A->buildForm($GtTXi, $xXY5G); goto lTCwF; DmqZ9: $GtTXi = Form::make(''); goto cFK0J; lTCwF: if (null !== $W9vZV) { return $W9vZV; } goto uieUV; GOePE: $xXY5G = InputPackage::buildFromInputJson('param')->all(); goto DmqZ9; PqFto: } }
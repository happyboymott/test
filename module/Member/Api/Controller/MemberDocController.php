<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Api\Controller; use Illuminate\Routing\Controller; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\InputPackage; use ModStart\Core\Input\Response; class MemberDocController extends Controller { public function get() { goto NAiv_; L055k: return Response::generateSuccessData(array('title' => modstart_config('Member_' . ucfirst($INRHE) . 'Title'), 'content' => modstart_config('Member_' . ucfirst($INRHE) . 'Content'))); goto Ooaag; NAiv_: $QBv2Z = InputPackage::buildFromInput(); goto j8Pwr; j8Pwr: $INRHE = $QBv2Z->getTrimString('type'); goto IhAaB; IhAaB: BizException::throwsIf('类型错误', !in_array($INRHE, array('agreement', 'privacy'))); goto L055k; Ooaag: } }
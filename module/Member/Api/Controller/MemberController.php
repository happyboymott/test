<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Api\Controller; use Illuminate\Routing\Controller; use ModStart\Core\Input\Response; use Module\Member\Auth\MemberUser; use Module\Member\Support\MemberLoginCheck; use Module\MemberCert\Util\MemberCertUtil; class MemberController extends Controller implements MemberLoginCheck { public function current() { goto JlTNb; J2XHt: $IE3H4['_certType'] = null; goto eVyfA; XjQ9y: return Response::generateSuccessData($IE3H4); goto QW1wm; eVyfA: if (modstart_module_enabled('MemberCert')) { $IE3H4['_certType'] = MemberCertUtil::getCertType(MemberUser::id()); } goto XjQ9y; JlTNb: $IE3H4 = array(); goto J2XHt; QW1wm: } }
<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace App\Api\Controller; use Illuminate\Routing\Controller; use ModStart\Core\Input\InputPackage; use ModStart\Core\Input\Response; use ModStart\Core\Util\ArrayUtil; use Module\Member\Auth\MemberUser; use Module\Member\Support\MemberLoginCheck; use Module\Member\Util\MemberUtil; class MemberProfileController extends Controller implements MemberLoginCheck { public function basic($A_0aq = null) { goto dJtA2; ZhW2L: MemberUtil::update(MemberUser::id(), ArrayUtil::keepKeys($A_0aq, array('gender', 'nickname', 'signature'))); goto sjfu4; sjfu4: return Response::jsonSuccess('保存成功'); goto VUUX6; J42yX: if (null === $A_0aq) { $A_0aq = $pOOU0->all(); } goto ZhW2L; dJtA2: $pOOU0 = InputPackage::buildFromInput(); goto J42yX; VUUX6: } }
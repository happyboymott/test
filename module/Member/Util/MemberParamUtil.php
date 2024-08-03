<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Util; use ModStart\Core\Exception\BizException; class MemberParamUtil { public static function param() { return array('{id}' => '用户ID', '{username}' => '用户名'); } public static function replaceParam($ZtuBh, $hz6q9) { goto HaHwo; Df7fp: return str_replace(array_keys($xXY5G), array_values($xXY5G), $ZtuBh); goto ZIUbI; edqhh: $xXY5G = array(); goto PGZI3; bawqO: $ohzJX = array('id', 'username'); goto edqhh; Rnc9e: if (!is_array($hz6q9)) { $hz6q9 = MemberUtil::getCached($hz6q9); } goto bawqO; PGZI3: foreach ($ohzJX as $PPiLF) { $xXY5G['{' . $PPiLF . '}'] = isset($hz6q9[$PPiLF]) ? $hz6q9[$PPiLF] : ''; } goto Df7fp; HaHwo: BizException::throwsIfEmpty('用户为空', $hz6q9); goto Rnc9e; ZIUbI: } public static function paramTitle() { return '<a href="javascript:;" data-dialog-request="' . modstart_admin_url('member/config/param') . '"><i class="iconfont icon-code"></i> 动态变量</a>'; } }
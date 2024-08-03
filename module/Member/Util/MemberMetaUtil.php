<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Util; use Carbon\Carbon; use ModStart\Core\Dao\ModelUtil; class MemberMetaUtil { public static function set($mdCxN, $MXTsP, $v0Qpl = null) { $mJ10h = array('memberUserId' => $mdCxN, 'name' => $MXTsP); if (is_null($v0Qpl)) { ModelUtil::delete('member_meta', $mJ10h); } else { if (ModelUtil::update('member_meta', $mJ10h, array('value' => $v0Qpl, 'updated_at' => Carbon::now())) <= 0) { goto lUm30; lUm30: ModelUtil::transactionBegin(); goto usodT; usodT: $db3lI = ModelUtil::getWithLock('member_meta', $mJ10h); goto a39ki; aXlYF: ModelUtil::transactionCommit(); goto ng3R3; a39ki: if (empty($db3lI)) { ModelUtil::insert('member_meta', array_merge($mJ10h, array('value' => $v0Qpl))); } goto aXlYF; ng3R3: } } } public static function get($mdCxN, $MXTsP) { goto Yf2EY; CGS2g: $wjn06 = ModelUtil::get('member_meta', $mJ10h); goto rJT7O; rJT7O: if ($wjn06) { return $wjn06['value']; } goto Aa2sv; Aa2sv: return null; goto BhgTm; Yf2EY: $mJ10h = array('memberUserId' => $mdCxN, 'name' => $MXTsP); goto CGS2g; BhgTm: } }
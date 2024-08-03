<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Util; use ModStart\Core\Assets\AssetsUtil; use ModStart\Core\Dao\ModelUtil; use ModStart\Field\AutoRenderedFieldValue; class MemberCmsUtil { public static function showFromId($mdCxN, $JsHEv = null) { goto F5Lox; iwhGE: return self::show($hz6q9, $JsHEv); goto dxs7O; XamcK: $hz6q9 = ModelUtil::getWithCache('member_user', array('id' => $mdCxN)); goto iwhGE; F5Lox: if (!$mdCxN) { return AutoRenderedFieldValue::make('<span class="ub-text-muted">-</span>'); } goto XamcK; dxs7O: } public static function show($hz6q9, $JsHEv = null) { if (!empty($hz6q9)) { goto AFzbZ; wl1ty: if ($hz6q9['isDeleted']) { $I09OQ = '<已删除用户>'; } else { $I09OQ = '<未知用户>'; foreach ($JsHEv as $KklTq) { if (!empty($hz6q9[$KklTq])) { $I09OQ = $hz6q9[$KklTq]; break; } } } goto GRib5; AFzbZ: if (null === $JsHEv) { $JsHEv = array('username'); } goto cp2pM; GRib5: return AutoRenderedFieldValue::make('<a href="javascript:;" class="ub-icon-text" data-dialog-request="' . action('\\Module\\Member\\Admin\\Controller\\MemberController@show', array('_id' => $hz6q9['id'])) . '">
            <img class="icon" src="' . AssetsUtil::fixOrDefault($hz6q9['avatar'], 'asset/image/avatar.svg') . '" />
            <span class="text">' . htmlspecialchars($I09OQ) . '</span></a>'); goto Hu8SU; cp2pM: if (!is_array($JsHEv)) { $JsHEv = array($JsHEv); } goto wl1ty; Hu8SU: } return AutoRenderedFieldValue::make(''); } }
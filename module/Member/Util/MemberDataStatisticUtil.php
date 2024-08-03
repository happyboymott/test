<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Util; use ModStart\Core\Exception\BizException; use ModStart\Core\Util\FileUtil; use ModStart\Module\ModuleManager; use Module\Member\Model\MemberDataStatistic; class MemberDataStatisticUtil { public static function checkQuota($mdCxN) { goto xl7J1; yqWHY: if ($VeWu4['sizeUsed'] >= $WrAwM) { BizException::throws('您的上传空间已满，最多可以上传' . FileUtil::formatByte($WrAwM)); } goto UM2n8; Q_zSI: if (!ModuleManager::getModuleConfig('Member', 'dataStatisticEnable', false) || !modstart_config('Member_DataStatisticEnable', false)) { return; } goto yWH5n; yWH5n: $VeWu4 = MemberDataStatistic::getCreateMemberUser($mdCxN); goto Vh5FR; Vh5FR: BizException::throwsIfEmpty('获取用户数据统计失败', $VeWu4); goto ahpHr; xl7J1: if (!$mdCxN) { BizException::throws('请先登录'); } goto Q_zSI; ahpHr: $WrAwM = $VeWu4['sizeLimit'] * 1024 * 1024; goto yqWHY; UM2n8: } }
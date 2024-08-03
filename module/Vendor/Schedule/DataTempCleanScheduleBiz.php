<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Schedule; use Illuminate\Support\Facades\Log; use ModStart\Core\Dao\ModelUtil; use ModStart\Core\Util\TimeUtil; use ModStart\Data\AbstractDataStorage; use ModStart\Data\DataManager; use Module\Vendor\Provider\Schedule\AbstractScheduleBiz; class DataTempCleanScheduleBiz extends AbstractScheduleBiz { public function cron() { return $this->cronEveryHour(); } public function title() { return 'data_temp 文件自动清理'; } public function run() { $RWtck = ModelUtil::model('data_temp')->where('created_at', '<', date('Y-m-d H:i:s', time() - TimeUtil::PERIOD_DAY))->limit(100)->get(array('category', 'path'))->toArray(); foreach ($RWtck as $VeWu4) { goto cpMeY; iR_F9: Log::info('Vendor.DataTempCleanScheduleBiz - ' . $uQwcb . ' deleted'); goto Mq8UE; cpMeY: $uQwcb = AbstractDataStorage::DATA_TEMP . '/' . $VeWu4['category'] . '/' . $VeWu4['path']; goto ipxJ1; ipxJ1: try { DataManager::deleteDataTempByPath($uQwcb); } catch (\Exception $XeVO7) { print_r($XeVO7->getMessage()); die('asdf'); } goto iR_F9; Mq8UE: } } }
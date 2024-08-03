<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Data\Event; use Illuminate\Support\Facades\Event; use ModStart\Core\Util\EventUtil; class DataUploadedEvent { public $uploadTable; public $userId; public $category; public $dataId; public static function fire($pN93W, $ovrwG, $sVoE7, $FB4mQ) { goto NBqzJ; sfcgb: EventUtil::fire($Kl0Kj); goto lf6iV; iKf8u: $Kl0Kj->dataId = $FB4mQ; goto sfcgb; nZf91: $Kl0Kj->userId = $ovrwG; goto wCl8Y; NBqzJ: $Kl0Kj = new static(); goto io7Pb; wCl8Y: $Kl0Kj->category = $sVoE7; goto iKf8u; io7Pb: $Kl0Kj->uploadTable = $pN93W; goto nZf91; lf6iV: } public static function listen($pN93W, $HqZca) { Event::listen(DataUploadedEvent::class, function (DataUploadedEvent $Kl0Kj) use($pN93W, $HqZca) { if ($Kl0Kj->uploadTable == $pN93W) { call_user_func($HqZca, $Kl0Kj); } }); } }
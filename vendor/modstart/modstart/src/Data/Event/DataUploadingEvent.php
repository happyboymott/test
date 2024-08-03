<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Data\Event; use Illuminate\Support\Facades\Event; use ModStart\Core\Util\EventUtil; class DataUploadingEvent { public $uploadTable; public $userId; public $category; public static function fire($pN93W, $ovrwG, $sVoE7) { goto pL8uC; gk4Qw: $Kl0Kj->uploadTable = $pN93W; goto yxbsm; DNhPc: EventUtil::fire($Kl0Kj); goto p6wtz; pL8uC: $Kl0Kj = new static(); goto gk4Qw; TaOfW: $Kl0Kj->category = $sVoE7; goto DNhPc; yxbsm: $Kl0Kj->userId = $ovrwG; goto TaOfW; p6wtz: } public static function listen($pN93W, $HqZca) { Event::listen(DataUploadingEvent::class, function (DataUploadingEvent $Kl0Kj) use($pN93W, $HqZca) { if ($Kl0Kj->uploadTable == $pN93W) { call_user_func($HqZca, $Kl0Kj); } }); } }
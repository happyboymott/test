<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Data\Event; use Illuminate\Support\Facades\Event; use ModStart\Core\Util\EventUtil; class DataDeletedEvent { public $data; public static function fire($fb7yT) { goto o8Bt_; dlXLp: $Kl0Kj->data = $fb7yT; goto m7v5v; o8Bt_: $Kl0Kj = new static(); goto dlXLp; m7v5v: EventUtil::fire($Kl0Kj); goto YiA7w; YiA7w: } public static function listen($HqZca) { Event::listen(DataDeletedEvent::class, function (DataDeletedEvent $Kl0Kj) use($HqZca) { call_user_func($HqZca, $Kl0Kj); }); } }
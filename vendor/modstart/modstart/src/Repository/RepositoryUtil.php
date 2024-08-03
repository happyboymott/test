<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Repository; use Illuminate\Support\Collection; class RepositoryUtil { public static function itemsFromArray(array $Mq26G) { return collect($Mq26G)->map(function ($TtD6i) { return (object) $TtD6i; }); } public static function itemFromArray($jZEPM) { return (object) $jZEPM; } public static function makeItem($wfw82 = array()) { return new EmptyItem($wfw82); } public static function makeItems($MlrQ0) { if ($MlrQ0 instanceof Collection) { return $MlrQ0; } return collect(array($MlrQ0)); } }
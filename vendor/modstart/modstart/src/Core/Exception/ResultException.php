<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Exception; use ModStart\Core\Input\Response; class ResultException extends \Exception { public static function throwsIfFail($IPT4J) { if (Response::isError($IPT4J)) { throw new ResultException($IPT4J['msg']); } } public static function throwsIf($zFaCJ, $TjTuC) { if ($TjTuC) { throw new ResultException($zFaCJ); } } }
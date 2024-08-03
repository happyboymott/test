<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ class MNav { public static function all($BNQpK = 'head') { goto b130T; b130T: $mvkYF = \Module\Nav\Util\NavUtil::listByPositionWithCache($BNQpK); goto DsUgv; DsUgv: foreach ($mvkYF as $fEs5v => $SNE7X) { $mvkYF[$fEs5v]['_attr'] = \Module\Nav\Type\NavOpenType::getBlankAttributeFromValue($SNE7X); } goto gmkJ_; gmkJ_: return $mvkYF; goto kSVEC; kSVEC: } }
<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Html; use ModStart\Core\Util\HtmlUtil; use Module\Vendor\Markdown\MarkdownUtil; class HtmlConverter { public static function convertToHtml($VX1UJ, $ZtuBh, $fE1HB = null) { goto IYMZI; gaK04: if (!empty($fE1HB)) { if (is_array($fE1HB)) { foreach ($fE1HB as $sdfXk) { $x45CN = new $sdfXk(); $hXSz1 = $x45CN->convert($hXSz1); } } else { $x45CN = new $fE1HB(); $hXSz1 = $x45CN->convert($hXSz1); } } goto XF3o8; XF3o8: return $hXSz1; goto hbBkF; IYMZI: switch ($VX1UJ) { case HtmlType::RICH_TEXT: $hXSz1 = HtmlUtil::filter($ZtuBh); break; case HtmlType::MARKDOWN: goto XKj2L; XKj2L: $hXSz1 = MarkdownUtil::convertToHtml($ZtuBh); goto KDyEQ; KDyEQ: $hXSz1 = HtmlUtil::filter($hXSz1); goto H1MV8; H1MV8: break; goto CI5Tf; CI5Tf: case HtmlType::SIMPLE_TEXT: $hXSz1 = HtmlUtil::text2html($ZtuBh); break; default: throw new \Exception('HtmlConverter.convertToHtml contentType error'); } goto gaK04; hbBkF: } }
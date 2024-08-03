<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\QuickRun\Crawl; interface BaseQueue { function prepend($fnzOF, $xXY5G = array(), $wlXEl = null); function append($fnzOF, $xXY5G = array(), $wlXEl = null); function exists($wlXEl); function size(); function poll(); }
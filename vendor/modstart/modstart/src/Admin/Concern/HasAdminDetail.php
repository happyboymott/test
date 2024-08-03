<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Concern; use ModStart\Admin\Layout\AdminDialogPage; use ModStart\Core\Util\CRUDUtil; trait HasAdminDetail { private function computeTitleDetail($TLRjn, $HkwcW) { $KVymd = $TLRjn ? $TLRjn . ' ' . L($HkwcW) : L($HkwcW); return isset($this->pageTitle) ? $this->pageTitle : $KVymd; } public function show(AdminDialogPage $poRy8) { $xACmU = $this->detail(); return $poRy8->pageTitle($this->computeTitleDetail($xACmU->title(), 'Show'))->body($xACmU->show(CRUDUtil::id())); } }
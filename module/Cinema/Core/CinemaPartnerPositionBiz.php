<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Cinema\Core; use Module\Partner\Biz\AbstractPartnerPositionBiz; class CinemaPartnerPositionBiz extends AbstractPartnerPositionBiz { const NAME = 'cinema'; public function name() { return self::NAME; } public function title() { return '在线影视'; } }
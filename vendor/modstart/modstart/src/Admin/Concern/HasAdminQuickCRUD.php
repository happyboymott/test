<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Concern; use ModStart\Admin\Layout\AdminCRUDBuilder; trait HasAdminQuickCRUD { use HasAdminCRUD; protected function grid() { goto qCEcq; yMxnw: $this->crud($w02Xo); goto GFIfX; clkIK: $w02Xo->useModeGrid(); goto yMxnw; qCEcq: $w02Xo = new AdminCRUDBuilder(); goto clkIK; GFIfX: return $w02Xo->grid(); goto XtxJb; XtxJb: } protected function form() { goto KiusT; KiusT: $w02Xo = new AdminCRUDBuilder(); goto Fhk9W; TbZoS: $this->crud($w02Xo); goto CHlbP; Fhk9W: $w02Xo->useModeForm(); goto TbZoS; CHlbP: return $w02Xo->form(); goto QVlJQ; QVlJQ: } protected function detail() { goto tp2Vc; bCIWy: $w02Xo->useModeDetail(); goto ZI1YC; ZI1YC: $this->crud($w02Xo); goto d3r1H; tp2Vc: $w02Xo = new AdminCRUDBuilder(); goto bCIWy; d3r1H: return $w02Xo->detail(); goto bPXd4; bPXd4: } }
<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Tecmz\Traits; use ModStart\Admin\Layout\AdminPage; use ModStart\Admin\Widget\SecurityTooltipBox; use ModStart\Layout\Row; use Module\AdminManager\Widget\ServerInfoWidget; use Module\Tecmz\Widget\CopyrightWidget; use Module\Vendor\Admin\Widget\AdminWidgetDashboard; trait AdminDashboardTrait { public function dashboard() { goto bBZWd; uiL_L: $ngjDL->append(new CopyrightWidget()); goto cHz8I; ergD4: $ngjDL->append(new Row(function (Row $HmMSq) { AdminWidgetDashboard::callIcon($HmMSq); })); goto LbNzZ; MPCHN: return $ngjDL; goto OO_dm; OcJ9R: $ngjDL->row(new SecurityTooltipBox()); goto ergD4; bBZWd: $ngjDL = app(AdminPage::class); goto Wl2We; LbNzZ: AdminWidgetDashboard::call($ngjDL); goto uiL_L; cHz8I: $ngjDL->append(new ServerInfoWidget()); goto MPCHN; Wl2We: $ngjDL->pageTitle(L('Dashboard')); goto OcJ9R; OO_dm: } }
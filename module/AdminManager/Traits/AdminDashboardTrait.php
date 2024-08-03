<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\AdminManager\Traits; use ModStart\Admin\Layout\AdminPage; use ModStart\Admin\Widget\SecurityTooltipBox; use ModStart\Layout\Row; use Module\AdminManager\Widget\ServerInfoWidget; use Module\Vendor\Admin\Widget\AdminWidgetDashboard; trait AdminDashboardTrait { public function dashboard() { goto QzSFl; YTPO5: $ngjDL->row(new SecurityTooltipBox()); goto buLBU; PXnSq: $ngjDL->append(new ServerInfoWidget()); goto FjZmr; FjZmr: return $ngjDL; goto qu_J4; Spb_r: AdminWidgetDashboard::call($ngjDL); goto PXnSq; QzSFl: $ngjDL = app(AdminPage::class); goto ZKSHP; buLBU: $ngjDL->append(new Row(function (Row $HmMSq) { AdminWidgetDashboard::callIcon($HmMSq); })); goto Spb_r; ZKSHP: $ngjDL->pageTitle(L('Dashboard')); goto YTPO5; qu_J4: } }
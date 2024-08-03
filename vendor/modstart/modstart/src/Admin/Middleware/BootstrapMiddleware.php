<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Middleware; use Illuminate\Http\Request; use ModStart\App\Core\CurrentApp; use ModStart\Support\Manager\FieldManager; use ModStart\Support\Manager\WidgetManager; class BootstrapMiddleware { public function handle(Request $JVJK3, \Closure $nHV4K) { goto SmQqh; SmQqh: if (method_exists(CurrentApp::class, 'set')) { CurrentApp::set(CurrentApp::ADMIN); } goto HXKt4; sCXfs: WidgetManager::registerBuiltinWidgets(); goto ucTPu; mhfYA: return $nHV4K($JVJK3); goto jU8Fi; HXKt4: FieldManager::registerBuiltinFields(); goto sCXfs; ucTPu: if (file_exists($RCLhf = modstart_admin_path('bootstrap.php'))) { require $RCLhf; } goto mhfYA; jU8Fi: } }
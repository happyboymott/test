<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\App\Api\Middleware; use Illuminate\Http\Request; use ModStart\App\Core\AccessGate; use ModStart\App\Core\CurrentApp; use ModStart\Core\Input\Response; use ModStart\Support\Manager\FieldManager; use ModStart\Support\Manager\WidgetManager; class BootstrapMiddleware { private static $gates = array(); public static function addGate($rDoih) { self::$gates[] = $rDoih; } public function handle(Request $JVJK3, \Closure $nHV4K) { goto caBkb; CIdnz: foreach (self::$gates as $jZEPM) { goto XzjA1; QSo8n: if (Response::isError($IPT4J)) { return $IPT4J; } goto UsIz5; EdncO: $IPT4J = $UXoYl->check($JVJK3); goto QSo8n; XzjA1: $UXoYl = app($jZEPM); goto EdncO; UsIz5: } goto oimuD; CqQsM: return $nHV4K($JVJK3); goto Ybvk1; ew3NT: if (file_exists($RCLhf = modstart_admin_path('bootstrap.php'))) { require $RCLhf; } goto CqQsM; caBkb: if (method_exists(CurrentApp::class, 'set')) { CurrentApp::set(CurrentApp::API); } goto CIdnz; tY0ju: WidgetManager::registerBuiltinWidgets(); goto ew3NT; oimuD: FieldManager::registerBuiltinFields(); goto tY0ju; Ybvk1: } }
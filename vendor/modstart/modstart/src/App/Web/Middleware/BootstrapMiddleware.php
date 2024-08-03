<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\App\Web\Middleware; use Illuminate\Http\Request; use ModStart\App\Core\AccessGate; use ModStart\App\Core\CurrentApp; use ModStart\Core\Input\Response; use ModStart\Support\Manager\FieldManager; use ModStart\Support\Manager\WidgetManager; class BootstrapMiddleware { private static $gates = array(); public static function addGate($rDoih) { self::$gates[] = $rDoih; } public function handle(Request $JVJK3, \Closure $nHV4K) { goto i9szU; i9szU: if (method_exists(CurrentApp::class, 'set')) { CurrentApp::set(CurrentApp::WEB); } goto o9MS2; xakoG: FieldManager::registerBuiltinFields(); goto oOMVJ; o9MS2: foreach (self::$gates as $jZEPM) { goto Ob63h; GRuMK: if (Response::isError($IPT4J)) { return $IPT4J; } goto TA5vH; O9sLi: $IPT4J = $UXoYl->check($JVJK3); goto GRuMK; Ob63h: $UXoYl = app($jZEPM); goto O9sLi; TA5vH: } goto xakoG; Tn0kG: if (file_exists($RCLhf = modstart_web_path('bootstrap.php'))) { require $RCLhf; } goto LqoeS; oOMVJ: WidgetManager::registerBuiltinWidgets(); goto Tn0kG; LqoeS: return $nHV4K($JVJK3); goto Djp8b; Djp8b: } }
<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\App\OpenApi\Middleware; use Illuminate\Http\Request; use ModStart\App\Core\AccessGate; use ModStart\App\Core\CurrentApp; use ModStart\Core\Input\Response; use ModStart\Support\Manager\FieldManager; use ModStart\Support\Manager\WidgetManager; class BootstrapMiddleware { private static $gates = array(); public static function addGate($rDoih) { self::$gates[] = $rDoih; } public function handle(Request $JVJK3, \Closure $nHV4K) { goto KFkAy; TXKs7: foreach (self::$gates as $jZEPM) { goto EZfoY; eRGdk: $IPT4J = $UXoYl->check($JVJK3); goto Uxuya; Uxuya: if (Response::isError($IPT4J)) { return $IPT4J; } goto XQivN; EZfoY: $UXoYl = app($jZEPM); goto eRGdk; XQivN: } goto okhiX; vVOI2: WidgetManager::registerBuiltinWidgets(); goto JYGHj; KFkAy: if (method_exists(CurrentApp::class, 'set')) { CurrentApp::set(CurrentApp::OPEN_API); } goto TXKs7; RoHHN: return $nHV4K($JVJK3); goto zQREo; okhiX: FieldManager::registerBuiltinFields(); goto vVOI2; JYGHj: if (file_exists($RCLhf = modstart_open_api_path('bootstrap.php'))) { require $RCLhf; } goto RoHHN; zQREo: } }
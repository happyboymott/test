<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; use Illuminate\Support\Facades\Route; use Illuminate\Support\Str; class RouteUtil { public static function parseControllerMethod() { goto HDDOy; OZCft: if (isset($LxTJm[1])) { $ZGrfF = $LxTJm[1]; } else { $ZGrfF = null; } goto mViTm; k9sWc: $LxTJm = explode('@', $Pffjk); goto gABj3; gABj3: if (isset($LxTJm[0])) { $vHmnu = $LxTJm[0]; } else { $vHmnu = null; } goto OZCft; mViTm: if (!Str::startsWith($vHmnu, '\\')) { $vHmnu = '\\' . $vHmnu; } goto f0NPV; HDDOy: $Pffjk = Route::currentRouteAction(); goto k9sWc; f0NPV: return array($vHmnu, $ZGrfF); goto YyfFA; YyfFA: } }
<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Web\Controller; use Illuminate\Routing\Controller; use Illuminate\Support\Facades\Response; use Intervention\Image\Facades\Image; class PlaceholderController extends Controller { public function index($fQWKq, $oA8qF) { goto Goa8E; rNw9U: $fQWKq = max($fQWKq, 10); goto IwGrl; e3ra0: return Response::make($GvbKU->encode('png'))->header('Content-Type', 'image/png'); goto sttsc; Goa8E: $fQWKq = min($fQWKq, 2000); goto rNw9U; SJlDD: $GvbKU = Image::canvas($fQWKq, $oA8qF, '#CCC'); goto jYfMl; AXVNa: $oA8qF = max($oA8qF, 10); goto SJlDD; IwGrl: $oA8qF = min($oA8qF, 2000); goto AXVNa; jYfMl: $GvbKU->text($fQWKq . 'x' . $oA8qF, $fQWKq / 2, $oA8qF / 2, function ($Y9gvA) use($fQWKq, $oA8qF) { $n2xY5 = min($fQWKq, $oA8qF) / 10; $Y9gvA->size($n2xY5); $Y9gvA->color('#666666'); $Y9gvA->align('center'); $Y9gvA->valign('center'); }); goto e3ra0; sttsc: } }
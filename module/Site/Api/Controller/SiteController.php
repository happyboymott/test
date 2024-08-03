<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Site\Api\Controller; use Illuminate\Routing\Controller; use ModStart\Core\Assets\AssetsUtil; use ModStart\Core\Input\Response; class SiteController extends Controller { public function contact() { goto TQtyw; DIIkc: $IE3H4['email'] = modstart_config('Site_ContactEmail', ''); goto rrVoo; OVA9w: if ($IE3H4['qrcode']) { $IE3H4['qrcode'] = AssetsUtil::fixFull($IE3H4['qrcode']); } goto QxhJs; QxhJs: return Response::generateSuccessData($IE3H4); goto Ial2y; Hh8be: $IE3H4['qrcode'] = modstart_config('Site_ContactQrcode', ''); goto OVA9w; rrVoo: $IE3H4['phone'] = modstart_config('Site_ContactPhone', ''); goto o2iPR; TQtyw: $IE3H4 = array(); goto DIIkc; o2iPR: $IE3H4['address'] = modstart_config('Site_ContactAddress', ''); goto Hh8be; Ial2y: } }
<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Controller; use Illuminate\Routing\Controller; use Illuminate\Support\Facades\Session; use ModStart\Core\Input\InputPackage; use ModStart\Core\Input\Response; class UtilController extends Controller { public function frame() { goto iaAPw; iaAPw: $wHgVU = InputPackage::buildFromInput(); goto feJlg; feJlg: Session::put('_adminFrameLeftToggle', $wHgVU->getBoolean('frameLeftToggle')); goto C5erw; C5erw: return Response::jsonSuccess(); goto LTwCN; LTwCN: } public function switchLang() { goto chxlM; tBJNF: L_locale($axesg); goto MWcmd; MWcmd: return Response::redirect($NPxWk); goto rloWL; chxlM: $wHgVU = InputPackage::buildFromInput(); goto vNGkU; Ac9eq: $axesg = $wHgVU->getTrimString('lang'); goto tBJNF; vNGkU: $NPxWk = $wHgVU->getTrimString('redirect', modstart_admin_url('')); goto Ac9eq; rloWL: } }
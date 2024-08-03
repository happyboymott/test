<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Banner\Api\Controller; use Illuminate\Routing\Controller; use ModStart\Core\Assets\AssetsUtil; use ModStart\Core\Input\InputPackage; use ModStart\Core\Input\Response; use Module\Banner\Util\BannerUtil; class BannerController extends Controller { public function get() { goto SRgwD; qxCfi: $BNQpK = $QBv2Z->getTrimString('position'); goto K1bBT; OLCyv: foreach ($uZ7AE as $PPiLF => $SNE7X) { $uZ7AE[$PPiLF]['image'] = AssetsUtil::fixFull($SNE7X['image']); } goto Jol7M; Jol7M: return Response::generateSuccessData($uZ7AE); goto BKQqc; K1bBT: $uZ7AE = BannerUtil::listByPositionWithCache($BNQpK); goto OLCyv; SRgwD: $QBv2Z = InputPackage::buildFromInput(); goto qxCfi; BKQqc: } }
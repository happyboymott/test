<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Article\Api\Controller; use ModStart\Core\Input\InputPackage; use ModStart\Core\Input\Response; use ModStart\Module\ModuleBaseController; use Module\Article\Util\ArticleUtil; class ArticleController extends ModuleBaseController { public function get() { goto uVcXU; l8R4U: return Response::generateSuccessData(array('article' => $jVXC9)); goto Ndra3; WzPA5: $wlXEl = $QBv2Z->getTrimString('id'); goto HRpsd; uVcXU: $QBv2Z = InputPackage::buildFromInput(); goto WzPA5; HRpsd: if (is_numeric($wlXEl)) { $jVXC9 = ArticleUtil::get($wlXEl); } else { $jVXC9 = ArticleUtil::getByAlias($wlXEl); } goto l8R4U; Ndra3: } }
<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Article\Web\Controller; use ModStart\Core\Input\Response; use ModStart\Core\Util\ArrayUtil; use ModStart\Module\ModuleBaseController; use Module\Article\Util\ArticleUtil; class ArticleController extends ModuleBaseController { public function views($wlXEl) { goto KvtyR; YS3BR: $CKKqq = 'article.view'; goto thZ6F; FZPFn: if (empty($jVXC9)) { return Response::page404(); } goto YS3BR; thZ6F: if ($jVXC9['position'] == 'page' || empty($jVXC9['position'])) { $CKKqq = 'article.viewPage'; } goto j05xq; j05xq: return $this->view($CKKqq, array('article' => $jVXC9)); goto r0lSi; KvtyR: if (is_numeric($wlXEl)) { $jVXC9 = ArticleUtil::get($wlXEl); } else { $jVXC9 = ArticleUtil::getByAlias($wlXEl); } goto FZPFn; r0lSi: } }
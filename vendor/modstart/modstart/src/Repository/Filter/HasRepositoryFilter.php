<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Repository\Filter; use Closure; trait HasRepositoryFilter { private $repositoryFilter; private function setupRepositoryFilter() { $this->repositoryFilter = new RepositoryFilter(); } public function repositoryFilter(Closure $HqZca = null) { goto Xbabr; W0ghC: call_user_func($HqZca, $this->repositoryFilter); goto H19zt; H19zt: return $this; goto EMWpN; Xbabr: if (null === $HqZca) { return $this->repositoryFilter; } goto W0ghC; EMWpN: } }
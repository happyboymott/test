<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Support\Concern; trait HasPageTitleInfo { protected $pageTitle; protected $pageKeywords; protected $pageDescription; public function pageTitle($repda = null) { goto z3CH_; z3CH_: if (null === $repda) { return $this->pageTitle; } goto wcySU; DcrJQ: return $this; goto jn3Lr; wcySU: $this->pageTitle = $repda; goto DcrJQ; jn3Lr: } public function pageKeywords($repda = null) { goto rpl5D; MLJgQ: $this->pageKeywords = $repda; goto Y291R; Y291R: return $this; goto URVAz; rpl5D: if (null === $repda) { return $this->pageKeywords; } goto MLJgQ; URVAz: } public function pageDescription($repda = null) { goto BNwLb; Ykx6g: return $this; goto SlhvQ; KtA_S: $this->pageDescription = $repda; goto Ykx6g; BNwLb: if (null === $repda) { return $this->pageDescription; } goto KtA_S; SlhvQ: } }
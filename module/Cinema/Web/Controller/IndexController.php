<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Cinema\Web\Controller; use ModStart\Core\Input\Response; use ModStart\Module\ModuleBaseController; use Module\Cinema\Model\CinemaChannel; class IndexController extends ModuleBaseController { private $api; public function __construct(\Module\Cinema\Api\Controller\CinemaController $b31F1) { $this->api = $b31F1; } public function index() { $Cb16d = Response::tryGetData($this->api->channelLatest()); return $this->view('cinema.index', $Cb16d); } }
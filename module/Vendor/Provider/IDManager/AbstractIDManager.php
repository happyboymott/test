<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\IDManager; abstract class AbstractIDManager { public abstract function name(); public abstract function all(); public abstract function add($v_B__); public abstract function remove($v_B__); public abstract function total(); public abstract function paginate($ngjDL, $c2jtx); public abstract function paginateRandom($ngjDL, $c2jtx, $VIedZ = 'all', $Egy3l = 60); public abstract function forgetRandom($VIedZ = 'all'); }
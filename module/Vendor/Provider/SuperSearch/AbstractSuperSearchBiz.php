<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\SuperSearch; abstract class AbstractSuperSearchBiz { public abstract function name(); public abstract function title(); public abstract function fields(); public function syncBatch(AbstractSuperSearchProvider $CjF8A, $PMI1E) { $mvkYF = array(); return array('count' => count($mvkYF), 'nextId' => $PMI1E); } }
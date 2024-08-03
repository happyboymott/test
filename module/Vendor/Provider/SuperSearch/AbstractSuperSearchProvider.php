<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\SuperSearch; abstract class AbstractSuperSearchProvider { public abstract function name(); public abstract function title(); public abstract function ping(); public abstract function bucketExists($MXTsP); public abstract function bucketCreate($MXTsP, $wXCqs); public abstract function bucketDelete($MXTsP); public abstract function bucketCount($MXTsP); public abstract function upsert($MXTsP, $wlXEl, $IE3H4); public abstract function delete($MXTsP, $wlXEl); public abstract function get($MXTsP, $wlXEl); public abstract function search($MXTsP, $ngjDL, $c2jtx, $qpunl = array(), $WFr7l = array()); public function ensureBucket($MXTsP) { if (!$this->bucketExists($MXTsP)) { $strQF = SuperSearchBiz::get($MXTsP); $this->bucketCreate($MXTsP, $strQF->fields()); } } }
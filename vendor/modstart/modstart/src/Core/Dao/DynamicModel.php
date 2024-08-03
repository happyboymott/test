<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Dao; use Illuminate\Database\Eloquent\Model; use ModStart\Core\Util\FileUtil; use ModStart\Core\Util\StubUtil; class DynamicModel extends Model { public static function make($a5ocU) { goto jAvit; ZKEwO: $NZAQB = '\\DynamicModel\\' . $D541x; goto uIjtD; GTF_5: return new $NZAQB(); goto mcCdG; jAvit: $D541x = 'DynamicModel_' . $a5ocU; goto ZKEwO; uIjtD: if (!class_exists($NZAQB)) { goto wcaLX; NlCgx: if (!file_exists($itoQ0)) { $FQQRK = StubUtil::render('DynamicModel', array('className' => $D541x, 'table' => $a5ocU)); file_put_contents($itoQ0, $FQQRK); } goto IeGKB; wcaLX: $itoQ0 = base_path('bootstrap/cache/' . $D541x . '.php'); goto NlCgx; IeGKB: require $itoQ0; goto B6DOS; B6DOS: } goto GTF_5; mcCdG: } }
<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; class PaginateUtil { public static function pack($jwYK7, $poRy8, $Exlff) { goto P2QFu; sf79N: return $IPT4J; goto J15PV; P2QFu: $IPT4J = array(); goto H5bhX; H5bhX: $IPT4J['page'] = $poRy8; goto AckvT; RYu3q: $IPT4J['total'] = count($jwYK7); goto oFjpr; jxyKP: if ($tDLuF < 0 || $tDLuF >= count($jwYK7)) { $IPT4J['records'] = array(); } else { $IPT4J['records'] = array_slice($jwYK7, $tDLuF, $Exlff); } goto sf79N; AckvT: $IPT4J['pageSize'] = $Exlff; goto RYu3q; oFjpr: $tDLuF = $Exlff * ($poRy8 - 1); goto jxyKP; J15PV: } public static function pack1($jwYK7) { goto gcl50; RgZaz: return $IPT4J; goto DtYLK; mdGQn: $IPT4J['pageSize'] = count($jwYK7); goto Ky02_; Ky02_: $IPT4J['total'] = count($jwYK7); goto kQIB2; gcl50: $IPT4J = array(); goto i0PcS; i0PcS: $IPT4J['page'] = 1; goto mdGQn; kQIB2: $IPT4J['records'] = $jwYK7; goto RgZaz; DtYLK: } }
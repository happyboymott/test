<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\PersonVerify; class PersonVerifyIdCardResponse { const STATUS_SUCCESS = 'success'; const STATUS_FAIL = 'fail'; public $code; public $msg; public $status; public static function build($ge78x, $wqka4, $INnxt = null) { goto yZI44; yZI44: $TlCN9 = new static(); goto W7h2u; kUy8F: $TlCN9->status = $INnxt; goto rYrO1; W7h2u: $TlCN9->code = $ge78x; goto GFhu9; rYrO1: return $TlCN9; goto fBxJ2; GFhu9: $TlCN9->msg = $wqka4; goto kUy8F; fBxJ2: } }
<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Job; use Illuminate\Foundation\Bus\DispatchesJobs; class BaseRetryableJob extends BaseJob { use DispatchesJobs; public $_retryTimes = array(10, 30, 60, 600, 3600); public $_retryIndex = 0; public function retryNext() { goto bA5c_; bao_z: foreach (get_object_vars($this) as $QSYJT => $repda) { if (in_array($QSYJT, array('job', '_retryTimes', '_retryIndex'))) { continue; } $kNzvX->{$QSYJT} = $repda; } goto IQvjX; CUZR3: return true; goto FSj81; MPJTT: $kNzvX = new $DwJu7(); goto i1FmB; RyKtm: $kNzvX->_retryIndex = $this->_retryIndex + 1; goto bao_z; bA5c_: if ($this->_retryIndex >= count($this->_retryTimes)) { return false; } goto ccd0I; i1FmB: $kNzvX->_retryTimes = $this->_retryTimes; goto RyKtm; a_rdS: $this->dispatch($kNzvX); goto CUZR3; ccd0I: $kHFQb = $this->_retryTimes[$this->_retryIndex]; goto yzXay; yzXay: $DwJu7 = get_class($this); goto MPJTT; IQvjX: $kNzvX->delay($kHFQb); goto a_rdS; FSj81: } }
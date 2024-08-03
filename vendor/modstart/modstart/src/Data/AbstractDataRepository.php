<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Data; abstract class AbstractDataRepository { public abstract function maxFilenameByte(); public abstract function addTemp($sVoE7, $am_Sn, $FUdhK, $y8X7g); public abstract function getTemp($sVoE7, $am_Sn); public abstract function getTempByPath($D6_Q7); public abstract function deleteTempById($RAJ0N); public abstract function addData($sVoE7, $am_Sn, $FUdhK, $y8X7g); public abstract function updateData($FB4mQ, $AQ9vT); public abstract function getDataById($RAJ0N); public abstract function getDataByPath($am_Sn); public abstract function deleteDataById($RAJ0N); }
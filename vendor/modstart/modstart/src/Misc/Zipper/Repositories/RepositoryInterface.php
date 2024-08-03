<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Chumper\Zipper\Repositories; interface RepositoryInterface { public function __construct($tcIWQ, $xWdKw = false, $ABfaD = null); public function addFile($MuB9X, $D299j); public function addFromString($KtHB2, $FQQRK); public function addEmptyDir($rc2uC); public function removeFile($D299j); public function getFileContent($D299j); public function getFileStream($D299j); public function each($HqZca); public function fileExists($u166c); public function usePassword($oD363); public function getStatus(); public function close(); }
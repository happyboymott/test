<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Repository; use Illuminate\Contracts\Support\Arrayable; use Illuminate\Support\Collection; use ModStart\Form\Form; use ModStart\Detail\Detail; use ModStart\Grid\Model; interface RepositoryInterface { public function getKeyName(); public function getCreatedAtColumn(); public function getUpdatedAtColumn(); public function isSoftDeletes(); public function get(Model $p6TQ_); public function add(Form $in7PD); public function editing(Form $in7PD); public function edit(Form $in7PD); public function show(Detail $xACmU); public function deleting(Form $in7PD); public function delete(Form $in7PD, Arrayable $DTRCo); }
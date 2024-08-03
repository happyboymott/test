<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Model; use Illuminate\Database\Eloquent\Model; use ModStart\Core\Dao\ModelUtil; class AdminUser extends Model { protected $table = 'admin_user'; public function roles() { return $this->belongsToMany(AdminRole::class, 'admin_user_role', 'userId', 'roleId'); } public static function getCached($LsgNE) { return ModelUtil::get('admin_user', $LsgNE); } protected static function boot() { parent::boot(); static::deleting(function (AdminUser $p6TQ_) { $p6TQ_->roles()->detach(); }); } }
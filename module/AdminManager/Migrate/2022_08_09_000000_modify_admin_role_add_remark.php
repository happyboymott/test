<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class ModifyAdminRoleAddRemark extends Migration { public function up() { $rxAKt = config('modstart.admin.database.connection') ?: config('database.default'); Schema::connection($rxAKt)->table('admin_role', function (Blueprint $jzg7M) { $jzg7M->string('remark', 400)->comment('')->nullable(); }); } public function down() { } }
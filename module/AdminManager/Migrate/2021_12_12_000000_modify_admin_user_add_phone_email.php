<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class ModifyAdminUserAddPhoneEmail extends Migration { public function up() { $rxAKt = config('modstart.admin.database.connection') ?: config('database.default'); Schema::connection($rxAKt)->table('admin_user', function (Blueprint $jzg7M) { $jzg7M->string('phone', 11)->comment('')->nullable(); $jzg7M->string('email', 100)->comment('')->nullable(); $jzg7M->unique('phone'); $jzg7M->unique('email'); }); } public function down() { } }
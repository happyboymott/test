<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateMemberDeleteTable extends Migration { public function up() { goto f6e_Z; Jk0eP: \ModStart\Core\Dao\ModelUtil::updateAll('member_user', array('isDeleted' => false)); goto eOyJh; iRiDy: Schema::create('member_deleted', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->string('username', 50)->nullable()->comment('用户名'); $jzg7M->string('phone', 20)->nullable()->comment('手机'); $jzg7M->string('email', 200)->nullable()->comment('邮箱'); $jzg7M->text('content')->comment('其他数据'); }); goto Jk0eP; f6e_Z: Schema::table('member_user', function (Blueprint $jzg7M) { $jzg7M->bigInteger('deleteAtTime')->nullable()->comment('已删除'); $jzg7M->tinyInteger('isDeleted')->nullable()->comment('已删除'); $jzg7M->index(array('deleteAtTime')); }); goto iRiDy; eOyJh: } public function down() { } }
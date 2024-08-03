<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateMemberGroup extends Migration { public function up() { goto sInD9; sInD9: Schema::create('member_group', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->string('title', 50)->nullable()->comment('名称'); $jzg7M->string('description', 200)->nullable()->comment('描述'); $jzg7M->tinyInteger('isDefault')->nullable()->comment('默认'); }); goto HFIo7; HFIo7: Schema::table('member_user', function (Blueprint $jzg7M) { $jzg7M->integer('groupId')->nullable()->comment(''); }); goto XA2up; XA2up: \ModStart\Core\Dao\ModelUtil::insertAll('member_group', array(array('title' => '普通用户', 'description' => '', 'isDefault' => true), array('title' => '高级用户', 'description' => '', 'isDefault' => false))); goto Oq7G0; Oq7G0: } public function down() { } }
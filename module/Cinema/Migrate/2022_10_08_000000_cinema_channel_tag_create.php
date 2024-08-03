<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CinemaChannelTagCreate extends Migration { public function up() { Schema::create('cinema_channel_tag', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->integer('groupId')->nullable()->comment(''); $jzg7M->integer('sort')->nullable()->comment('排序'); $jzg7M->string('title', 100)->nullable()->comment('名称'); $jzg7M->index(array('groupId')); }); } public function down() { } }
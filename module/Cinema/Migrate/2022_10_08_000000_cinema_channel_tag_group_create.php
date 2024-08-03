<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CinemaChannelTagGroupCreate extends Migration { public function up() { Schema::create('cinema_channel_tag_group', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->string('channelIds', 200)->nullable()->comment('频道ID'); $jzg7M->integer('pid')->nullable()->comment('上级分类'); $jzg7M->integer('sort')->nullable()->comment('排序'); $jzg7M->string('title', 100)->nullable()->comment('名称'); $jzg7M->index(array('pid')); }); } public function down() { } }
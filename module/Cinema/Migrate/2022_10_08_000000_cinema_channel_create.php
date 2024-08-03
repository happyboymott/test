<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CinemaChannelCreate extends Migration { public function up() { Schema::create('cinema_channel', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->integer('pid')->nullable()->comment(''); $jzg7M->integer('sort')->nullable()->comment(''); $jzg7M->string('title', 50)->nullable()->comment(''); $jzg7M->string('cover', 200)->nullable()->comment(''); $jzg7M->string('icon', 50)->nullable()->comment(''); $jzg7M->integer('mainTagGroupId')->nullable()->comment(''); }); } public function down() { } }
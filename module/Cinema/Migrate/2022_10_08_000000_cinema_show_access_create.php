<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CinemaShowAccessCreate extends Migration { public function up() { Schema::create('cinema_show_access', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->integer('showId')->nullable()->comment(''); $jzg7M->integer('memberUserId')->nullable()->comment(''); $jzg7M->tinyInteger('createFrom')->nullable()->comment(''); $jzg7M->dateTime('expire')->nullable()->comment(''); $jzg7M->unique(array('showId', 'memberUserId', 'expire')); }); } public function down() { } }
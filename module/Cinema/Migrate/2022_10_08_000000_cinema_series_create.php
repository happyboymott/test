<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CinemaSeriesCreate extends Migration { public function up() { Schema::create('cinema_series', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->integer('channelId')->nullable()->comment(''); $jzg7M->string('title', 100)->nullable()->comment(''); $jzg7M->string('cover', 200)->nullable()->comment(''); $jzg7M->string('description', 400)->nullable()->comment(''); $jzg7M->string('tags', 200)->nullable()->comment(''); $jzg7M->integer('showCount')->nullable()->comment(''); $jzg7M->integer('viewCount')->nullable()->comment(''); $jzg7M->integer('commentCount')->nullable()->comment(''); $jzg7M->integer('favCount')->nullable()->comment(''); $jzg7M->tinyInteger('isRecommend')->nullable()->comment(''); $jzg7M->tinyInteger('isFree')->nullable()->comment(''); $jzg7M->text('content'); }); } public function down() { } }
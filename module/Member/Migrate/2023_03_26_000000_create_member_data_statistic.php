<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateMemberDataStatistic extends Migration { public function up() { Schema::create('member_data_statistic', function (Blueprint $jzg7M) { $jzg7M->bigIncrements('id'); $jzg7M->timestamps(); $jzg7M->bigInteger('sizeLimit')->nullable()->comment(''); $jzg7M->bigInteger('sizeUsed')->nullable()->comment(''); }); } public function down() { } }
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table){
            $table->engine = 'MyISAM';//设置表的存储引擎
            $table->increments('link_id');//数据库主键自增ID
            $table->string('link_name', 50)->default('')->comment('//名称');
            $table->string('link_title', 100)->default('')->comment('//标题');
            $table->string('link_url', 100)->default('')->comment('//地址');
            $table->integer('link_order')->default(0)->comment('//排序');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('links');
    }
}

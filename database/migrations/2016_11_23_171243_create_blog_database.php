<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogDatabase extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
         public function up()
         {
            
	    /**
	     * Table: blog_article
	     */
	    Schema::create('blog_article', function(Blueprint $table) {
                $table->increments('art_id');
                $table->string('art_title', 100)->nullable();
                $table->string('art_tag', 100)->nullable();
                $table->string('art_description', 255)->nullable();
                $table->string('art_thumb', 255)->nullable();
                $table->text('art_content')->nullable();
                $table->integer('art_time')->nullable();
                $table->string('art_editor', 50)->nullable();
                $table->integer('art_view')->nullable();
                $table->integer('cate_id')->nullable();
            });


	    /**
	     * Table: blog_category
	     */
	    Schema::create('blog_category', function(Blueprint $table) {
                $table->increments('cate_id');
                $table->string('cate_name', 50)->nullable();
                $table->string('cate_title', 255)->nullable();
                $table->string('cate_keywords', 255)->nullable();
                $table->string('cate_description', 255)->nullable();
                $table->integer('cate_view')->nullable();
                $table->boolean('cate_order')->nullable();
                $table->integer('cate_pid')->nullable();
            });


	    /**
	     * Table: blog_config
	     */
	    Schema::create('blog_config', function(Blueprint $table) {
                $table->increments('conf_id');
                $table->string('conf_title', 50)->nullable();
                $table->string('conf_name', 50)->nullable();
                $table->text('conf_content')->nullable();
                $table->integer('conf_order')->nullable();
                $table->string('conf_tips', 255)->nullable();
                $table->string('field_type', 50)->nullable();
                $table->string('field_value', 255)->nullable();
            });


	    /**
	     * Table: blog_links
	     */
	    Schema::create('blog_links', function(Blueprint $table) {
                $table->increments('link_id')->unsigned();
                $table->string('link_name', 50);
                $table->string('link_title', 100);
                $table->string('link_url', 100);
                $table->integer('link_order');
            });


	    /**
	     * Table: blog_migrations
	     */
	    Schema::create('blog_migrations', function(Blueprint $table) {
                $table->string('migration', 255);
                $table->integer('batch');
            });


	    /**
	     * Table: blog_navs
	     */
	    Schema::create('blog_navs', function(Blueprint $table) {
                $table->increments('nav_id');
                $table->string('nav_name', 50)->nullable();
                $table->string('nav_alias', 50)->nullable();
                $table->string('nav_url', 255)->nullable();
                $table->integer('nav_order')->nullable();
            });


	    /**
	     * Table: blog_user
	     */
	    Schema::create('blog_user', function(Blueprint $table) {
                $table->increments('user_id');
                $table->string('username', 50)->nullable();
                $table->string('password', 255)->nullable();
            });


         }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
         public function down()
         {
            
	            Schema::drop('blog_article');
	            Schema::drop('blog_category');
	            Schema::drop('blog_config');
	            Schema::drop('blog_links');
	            Schema::drop('blog_migrations');
	            Schema::drop('blog_navs');
	            Schema::drop('blog_user');
         }

}
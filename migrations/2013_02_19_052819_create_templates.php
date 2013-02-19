<?php

class Api_Create_Templates {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('templates', function($table)
        {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('type');
            $table->timestamps();
        });

        Schema::create('template_attributes', function($table)
        {
            $table->increments('id');
            $table->integer('template_id');
            $table->foreign('template_id')->references('id')->on('templates');
            $table->string('name')->unique();
            $table->string('attribute');
            $table->timestamps();
        });

        Schema::create('template_mappings', function($table)
        {
            $table->increments('id');
            $table->integer('template_id');
            $table->foreign('template_id')->references('id')->on('templates');
            $table->string('from');
            $table->string('to');
            $table->timestamps();
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('template_mappings');
        Schema::drop('template_attributes');
        Schema::drop('template_mappings');
	}

}
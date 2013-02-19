<?php

class Api_Create_Template_Meta_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('template_metas', function($table)
        {
            $table->increments('id');
            $table->foreign('template_id')->references('id')->on('templates');
            $table->string('name')->unique();
            $table->string('attribute');
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
		//
	}

}
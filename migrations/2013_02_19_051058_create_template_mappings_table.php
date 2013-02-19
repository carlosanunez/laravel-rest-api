<?php

class Api_Create_Template_Mappings_Table {

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
		//
	}

}
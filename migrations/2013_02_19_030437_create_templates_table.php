<?php

class Api_Create_Templates_Table {

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
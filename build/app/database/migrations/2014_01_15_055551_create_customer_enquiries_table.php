<?php

use Illuminate\Database\Migrations\Migration;

class CreateCustomerEnquiriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_enquiries', function($table)
        	{   
                	$table->increments('id')->unsigned();
			$table->string('first_name');
			$table->string('surname');
                	$table->string('email');
                	$table->string('daytime_contact_number');
			$table->string('address');
			$table->string('suburb');
			$table->enum('state', array('ACT','NSW','NT','QLD','SA','TAS','VIC','WA'));
			$table->string('postcode');
			$table->enum('enquiry_type', array('General enquiry','Product feedback ot enquiry','Product complaint'));
			$table->string('product_name')->nullable();
			$table->string('product_size')->nullable();
			$table->string('use_by_date')->nullable();
			$table->string('batch_code')->nullable();
			$table->text('enquiry')->nullable();
                	$table->timestamps();
        	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer_enquiries');
	}

}

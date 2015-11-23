<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('sales_limit');
            $table->enum('commission_style', ['fixed', 'percent']);
            $table->text('sales_page');
            $table->text('member_area');
            $table->text('file');
            $table->float('first_upsell_price', 11, 3);
            $table->float('first_upsell_commission', 11, 3);
            $table->float('second_upsell_price', 11, 3);
            $table->float('secod_upsell_commision', 11, 3);
            $table->text('permission');
            $table->text('payment_option');
            $table->timestamps();
        });

        Schema::table('products', function ($table) {
            // Constraints
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

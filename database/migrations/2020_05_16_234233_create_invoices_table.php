<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->text('our_company_name')->nullable();
            $table->text('our_company_address')->nullable();
            $table->text('our_email')->nullable();
            $table->text('our_phone')->nullable();
            $table->text('their_company_name')->nullable();
            $table->text('their_company_address')->nullable();
            $table->text('their_email')->nullable();
            $table->text('their_phone')->nullable();
            $table->text('product_one')->nullable();
            $table->text('product_two')->nullable();
            $table->text('product_three')->nullable();
            $table->text('product_four')->nullable();
            $table->float('product_one_price')->nullable()->unsigned();
            $table->float('product_two_price')->nullable()->unsigned();
            $table->float('product_three_price')->nullable()->unsigned();
            $table->float('product_four_price')->nullable()->unsigned();
            $table->integer('product_one_quantity')->nullable()->unsigned();
            $table->integer('product_two_quantity')->nullable()->unsigned();
            $table->integer('product_three_quantity')->nullable()->unsigned();
            $table->integer('product_four_quantity')->nullable()->unsigned();
            $table->float('product_one_total')->nullable()->unsigned();
            $table->float('product_two_total')->nullable()->unsigned();
            $table->float('product_three_total')->nullable()->unsigned();
            $table->float('product_four_total')->nullable()->unsigned();
            $table->float('sub_total')->nullable()->unsigned();
            $table->float('discount')->nullable()->unsigned();
            $table->float('tax')->nullable()->unsigned();
            $table->float('total')->nullable()->unsigned();
            //$table->timestamp();
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
        Schema::dropIfExists('invoices');
    }
}

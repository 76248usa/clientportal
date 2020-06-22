<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->text('our_company_name')->nullable();
            $table->text('our_company_address')->nullable();
            $table->text('our_email')->nullable();
            $table->text('our_phone')->nullable();
            $table->text('their_company_name')->nullable();
            $table->text('their_company_address')->nullable();
            $table->text('their_email')->nullable();
            $table->text('description')->nullable();
            $table->text('their_phone')->nullable();
            $table->text('invoice_number')->nullable();
            $table->float('sub_total')->nullable()->unsigned();
            $table->float('discount')->nullable()->unsigned();

            $table->float('total')->nullable()->unsigned();
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
        Schema::dropIfExists('receipts');
    }
}

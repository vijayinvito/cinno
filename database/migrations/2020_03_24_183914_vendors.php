<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vendors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('plan_id');
            $table->string('name');
            $table->string('address');       
            $table->string('address_2');       
            $table->string('city');          
            $table->string('status');          
            $table->string('zip');          
            $table->string('phone');          
            $table->string('email');          
            $table->string('supplier_representative');          
            $table->string('vendor_phone');   
            $table->string('Vendor_email');   
                
             
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
        //
    }
}

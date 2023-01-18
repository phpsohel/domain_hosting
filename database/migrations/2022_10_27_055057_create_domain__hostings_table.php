<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainHostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domain__hostings', function (Blueprint $table) {
            $table->id();
            $table->int('cust_id');
            $table->string('domain_name')->nullable();
            $table->string('domain_author_name')->nullable();
            $table->string('domain_yearly_price')->nullable();
            $table->string('domain_start_date')->nullable();
            $table->string('domain_expiry_date')->nullable();
            $table->string('hosting_space')->nullable();
            $table->string('hosting_author_name')->nullable();
            $table->string('hosting_start_date')->nullable();
            $table->string('hosting_expiry_date')->nullable();
            $table->string('hosting_yearly_price')->nullable();
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
        Schema::dropIfExists('domain__hostings');
    }
}

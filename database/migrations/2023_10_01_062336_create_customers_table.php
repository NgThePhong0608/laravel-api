<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type'); // 'individual' or 'business'
            $table->string('email')->unique();
            $table->string('address')->nullable(); // for business customers
            $table->string('city')->nullable(); // for business customers
            $table->string('state')->nullable(); // for business customers
            $table->string('postal_code')->nullable(); // for business customers
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
        Schema::dropIfExists('customers');
    }
}

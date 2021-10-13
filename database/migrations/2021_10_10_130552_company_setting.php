<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompanySetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companysetting', function (Blueprint $table) {
          $table->string('company_name');
          $table->string('company_nice_name');
          $table->string('email')->nullable();
          $table->string('website')->nullable();
          $table->text('phones')->nullable();
          $table->text('address')->nullable();
          $table->string('facebook')->nullable();
          $table->string('twitter')->nullable();
          $table->string('company_logo');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropDatabaseIfExists('companysetting');
    }
}

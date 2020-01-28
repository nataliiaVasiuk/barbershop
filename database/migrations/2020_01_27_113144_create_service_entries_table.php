<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_entries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('working_day_id');
            $table->time('start_at');
            $table->time('finish_at');
            $table->string('client_name', 250);
            $table->string('booking_information', 250)->comment('information about booking : date, service, name of employee, name of client');

            $table->index('service_id');
            $table->index('employee_id');
            $table->index('working_day_id');

            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('employee_id')->references('id')->on('staff');
            $table->foreign('working_day_id')->references('id')->on('working_days');

            $table->softDeletes();
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
        Schema::dropIfExists('service_entries');
    }
}

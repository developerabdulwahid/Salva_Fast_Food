<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            // $table->index('job_id');
            $table->unsignedBigInteger('job_id');
            $table->string('email');
            $table->string('phone');
            $table->string('resume')->nullable();
            $table->text('about')->nullable();
            $table->timestamps();
            // $table->foreign('user_id')->references('id')->on('jobs')->onDelete('cascade'); already coded
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade'); //added by fahd
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_applications');
    }
}

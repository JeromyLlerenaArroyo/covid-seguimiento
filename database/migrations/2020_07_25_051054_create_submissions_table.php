<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('detail_id')->constrained('details');
            $table->boolean('check');
            $table->date('date');
            $table->foreignId('patient_id')->nullable()->constrained('patients');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->timestamps();

            //$table->unique(['user_id', 'detail_id', 'patient_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submissions');
    }
}

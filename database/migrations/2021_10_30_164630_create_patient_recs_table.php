<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientRecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_recs', function (Blueprint $table) {
            $table->id();
            $table->string('diagnosis');
            $table->string('blood_presure')->nullable();
            $table->string('pulse_rate')->nullable();
            $table->string('respiratory_rate')->nullable();
            $table->string('other')->nullable();
            $table->string('investigation')->nullable();
            $table->string('treatments');
            $table->string('special_notes')->nullable();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('patient_recs');
    }
}

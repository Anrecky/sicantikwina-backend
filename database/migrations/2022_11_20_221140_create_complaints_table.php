<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();

            $table->string('bride_name');
            $table->date('bride_dob')->nullable();
            $table->year('bride_year')->nullable();
            $table->boolean('bride_is_year')->default(false);
            $table->string('bride_address')->nullable();
            $table->string('bride_phone')->nullable();

            $table->string('groom_name');
            $table->date('groom_dob')->nullable();
            $table->year('groom_year')->nullable();
            $table->boolean('groom_is_year')->default(false);
            $table->string('groom_address')->nullable();
            $table->string('groom_phone')->nullable();

            $table->string('whistleblower_name');
            $table->date('whistleblower_dob')->nullable();
            $table->year('whistleblower_year')->nullable();
            $table->boolean('whistleblower_is_year')->default(false);
            $table->string('whistleblower_address')->nullable();
            $table->string('whistleblower_phone')->nullable();
            $table->enum('whistleblower_gender', ['male', 'female'])->default('male');

            $table->string('relationship');
            $table->text('chronology')->nullable();
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
        Schema::dropIfExists('complaints');
    }
};

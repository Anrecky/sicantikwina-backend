<?php

use App\Models\Education;
use App\Models\EducationCategory;
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
        Schema::create('education_education_category', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(EducationCategory::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Education::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::table('education_education_category', function (Blueprint $table) {

            $table->dropForeignIdFor(EducationCategory::class);
            $table->dropForeignIdFor(Education::class);
        });
        Schema::dropIfExists('education_education_category');
    }
};

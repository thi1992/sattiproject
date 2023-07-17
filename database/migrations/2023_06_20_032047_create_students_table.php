<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer ("no_c")->nullable();
            $table->string ("sub_no_c")->nullable();
            $table->string ("courses_name_c")->nullable();
            $table->string ("level_c")->nullable();
            $table->string ("subpath_c")->nullable();
            $table->string ("program_c")->nullable();
            $table->string ("class_c")->nullable();
            $table->string ("category_c")->nullable();
            $table->string ("type_c")->nullable();
            $table->string('year_c')->nullable();
            $table->string('month_c')->nullable();
            $table->string ("week_c")->nullable();
            $table->string ("date_c")->nullable();
            $table->string ("training_place_c")->nullable();
            $table->string ("training_room_c")->nullable();
            $table->string ("gen_c")->nullable();
            $table->string ("name_c")->nullable();
            $table->string ("company_c")->nullable();
            $table->string ("team_c")->nullable();
            $table->string ("group_c")->nullable();
            $table->string ("part_c")->nullable();
            $table->string ("title_c")->nullable();
            $table->string ("detail_title_c")->nullable();
            $table->string ("work_place_c")->nullable();
            $table->string ("score_c")->nullable();
            $table->string ("courses_result_c")->nullable();
            $table->string ("remarks_c")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};


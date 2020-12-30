<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->string("first_name")->nullable();
            $table->string("last_name")->nullable();
            $table->string("national_code")->nullable();
            $table->string("address")->nullable();
            $table->string("mobile")->nullable();
            $table->string("phone")->nullable();
            $table->integer("sex")->nullable();
            $table->integer("type")->nullable();
            $table->integer("supporters_count")->nullable();
            $table->integer("support_amount_average")->nullable();
            $table->text("emotional_text")->nullable();
            $table->text("about")->nullable();
            $table->integer("priority")->default(20);
            $table->date("birth_date")->nullable();
            $table->boolean("published")->default(true);
            $table->unsignedInteger("city_id");
            $table->unsignedInteger("office_id");
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
        Schema::dropIfExists('children');
    }
}

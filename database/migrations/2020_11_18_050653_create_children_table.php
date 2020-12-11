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
            $table->string("bank_id")->nullable();
            $table->integer("sex")->nullable();
            $table->integer("type")->nullable();
            $table->integer("supporters_count")->nullable();
            $table->text("emotional_text")->nullable();
            $table->text("about")->nullable();
            $table->text("needs")->nullable();
            $table->integer("priority")->nullable();
            $table->date("birth_date")->nullable();
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

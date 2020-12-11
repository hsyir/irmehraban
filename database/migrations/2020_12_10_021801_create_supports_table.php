<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supports', function (Blueprint $table) {
            $table->id();
            $table->integer("selected_children_count");
            $table->text("supporter_name")->nullable();
            $table->text("supporter_mobile")->nullable();
            $table->text("supporter_address")->nullable();
            $table->text("supporter_tell")->nullable();
            $table->text("supporter_national_code")->nullable();
            $table->text("how_do_you_meet_us")->nullable();
            $table->unsignedInteger("affiliate_user_id")->nullable();
            $table->dateTime("approved_at")->nullable();
            $table->text("approve_comment")->nullable();
            $table->unsignedInteger("approve_by")->nullable();
            $table->string("uuid")->unique();
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
        Schema::dropIfExists('supports');
    }
}

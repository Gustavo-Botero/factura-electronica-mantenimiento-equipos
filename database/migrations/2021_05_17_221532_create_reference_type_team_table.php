<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferenceTypeTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reference_type_team', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedInteger('reference_id');
            $table->unsignedInteger('type_team_id');
            $table->timestamps();

            $table->foreign('reference_id')->references('id')->on('references');
            $table->foreign('type_team_id')->references('id')->on('type_teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reference_type_team');
    }
}

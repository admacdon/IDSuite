<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDynamicEnumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('dynamic_enum', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->uuid('id');
            $table->primary('id');
            $table->string('class_code');
            $table->boolean('active')->nullable();
            $table->text('values')->nullable();
            $table->string('name')->unique();
            $table->timestamps();


            $table->index("active");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dynamic_enum');
    }
}

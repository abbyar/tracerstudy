<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuesionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuesioners', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('f501')->nullable();
            $table->string('f502')->nullable();
            $table->string('f503')->nullable();
            $table->string('f1201')->nullable();
            $table->string('f1202')->nullable();
            $table->string('f8')->nullable();
            $table->string('f14')->nullable();
            $table->string('f15')->nullable();
            $table->string('f1301')->nullable();
            $table->string('f1302')->nullable();
            $table->string('f1303')->nullable();
            $table->string('f21')->nullable();
            $table->string('f22')->nullable();
            $table->string('f23')->nullable();
            $table->string('f24')->nullable();
            $table->string('f25')->nullable();
            $table->string('f26')->nullable();
            $table->string('f27')->nullable();
            $table->string('f301')->nullable();
            $table->string('f302')->nullable();
            $table->string('f303')->nullable();
            $table->string('f401')->nullable();
            $table->string('f402')->nullable();
            $table->string('f403')->nullable();
            $table->string('f404')->nullable();
            $table->string('f405')->nullable();
            $table->string('f406')->nullable();
            $table->string('f407')->nullable();
            $table->string('f408')->nullable();
            $table->string('f409')->nullable();
            $table->string('f410')->nullable();
            $table->string('f411')->nullable();
            $table->string('f412')->nullable();
            $table->string('f413')->nullable();
            $table->string('f414')->nullable();
            $table->string('f415')->nullable();
            $table->string('f416')->nullable();
            $table->string('f6')->nullable();
            $table->string('f7')->nullable();
            $table->string('f7a')->nullable();
            $table->string('f901')->nullable();
            $table->string('f902')->nullable();
            $table->string('f903')->nullable();
            $table->string('f904')->nullable();
            $table->string('f905')->nullable();
            $table->string('f906')->nullable();
            $table->string('f1001')->nullable();
            $table->string('f1002')->nullable();
            $table->string('f1101')->nullable();
            $table->string('f1102')->nullable();
            $table->string('f1601')->nullable();
            $table->string('f1602')->nullable();
            $table->string('f1603')->nullable();
            $table->string('f1604')->nullable();
            $table->string('f1605')->nullable();
            $table->string('f1606')->nullable();
            $table->string('f1607')->nullable();
            $table->string('f1608')->nullable();
            $table->string('f1609')->nullable();
            $table->string('f1610')->nullable();
            $table->string('f1611')->nullable();
            $table->string('f1612')->nullable();
            $table->string('f1613')->nullable();
            $table->string('f1614')->nullable();
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
        Schema::dropIfExists('kuesioners');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Lomba;

class CreateLombasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lombas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('deskripsi')->nullable();
            $table->date('tanggal_tutup');
            $table->string('poster');
            $table->timestamps();
        });

        //FAKERS
        $faker = Faker\factory::create();
        for($i=0; $i<20; $i++){
            $lomba = new Lomba();
            $lomba->name = $faker->sentence($nbWords = 4, $variableNbWords = true);
            $lomba->deskripsi = $faker->text($maxNbChars = 100);
            $lomba->tanggal_tutup = $faker->dateTimeInInterval($startDate = '0 years', $interval = '+ 20 days', $timezone = 'Asia/Jakarta');
            $lomba->poster = $faker->imageUrl($width = 620, $height = 877, 'cats');
            $lomba->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lombas');
    }
}

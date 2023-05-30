<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1,30) as $index) {
            DB::table('employees')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'dob' => $faker->dateTimeBetween('1970-01-01', '2000-12-31')->format('Y-d-m')
            ]);
        }


        // $table->integer('task_id');
        // $table->integer('task_main');
        // $table->integer('task_sub');
        // $table->integer('task_topic');
        // $table->string('task_name');
        // $table->float('task_weight');

            DB::table('tasks')->insert([
                'task_id' => 2222,
                'task_main' => 22201,
                'task_sub' => 1,
                'task_topic' => 0,
                'task_name' => 'ฝึกอบรมแพทย์ประจำบ้านอายุรศาสตร์',
                'task_topic' => 0,
                'task_weight' => 0
            ]);
            DB::table('tasks')->insert([
                'task_id' => 2222,
                'task_main' => 22202,
                'task_sub' => 2,
                'task_topic' => 0,
                'task_name' => 'ฝึกอบรมแพทย์ประจำบ้านต่อยอด/แพทย์เฟลโลว์ ',
                'task_topic' => 0,
                'task_weight' => 0
            ]);

            DB::table('tasks')->insert([
                'task_id' => 3333,
                'task_main' => 33301,
                'task_sub' => 1,
                'task_topic' => 0,
                'task_name' => 'คลินิกเฉพาะทาง',
                'task_topic' => '0',
                'task_weight' => 0
            ]);
            DB::table('tasks')->insert([
                'task_id' => 3333,
                'task_main' => 33301,
                'task_sub' => 1,
                'task_topic' => 1,
                'task_name' => 'คลินิกการนอนหลับผิดปกติ',
                'task_topic' => 1001,
                'task_weight' => 3
            ]);
            DB::table('tasks')->insert([
                'task_id' => 3333,
                'task_main' => 33301,
                'task_sub' => 1,
                'task_topic' => 1,
                'task_name' => 'คลินิกความดันโลหิตสูง',
                'task_topic' => 1002,
                'task_weight' => 3
            ]);

            /**********************************************/

            // $table->foreign('task_id_main')->references('id')->on('tasks');
            // $table->foreign('task_id_share')->references('id')->on('tasks');
            // $table->float('task_weight');
            DB::table('task_weights')->insert([
                'task_id_main' => 4,
                'task_id_share' => 1,
                'task_weight' => 1.5,
           
            ]);
            DB::table('task_weights')->insert([
                'task_id_main' => 4,
                'task_id_share' => 2,
                'task_weight' => 1.5,
           
            ]);
       
       


    }
}

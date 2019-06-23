<?php
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Seeder;
use App\Income;

class IncomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<=100; $i++):
            DB::table('incomes')
                ->insert([
                	'user_id' => $faker->randomDigit,
                    'name' => $faker->word,
                    'amount' => $faker->randomFloat(1000, 100, 1000),
                    'income_type' => $faker->word,
                    'start_date' => $faker->date(),
                    'end_date' => $faker->date('Y-m-d', now()),
                    'received_month' => $faker->numberBetween(1, 12),
                    'received_day' => $faker->numberBetween(1, 31)
                ]);
        endfor;
    }
    }


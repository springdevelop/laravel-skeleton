<?php
use App\Models\Donate;
use Illuminate\Database\Seeder;

class DonatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Donate::class, 5)->create();
    }
}

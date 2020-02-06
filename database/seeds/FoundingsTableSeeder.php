<?php
use App\Models\Founding;
use Illuminate\Database\Seeder;

class FoundingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Founding::class, 5)->create();
    }
}

<?php

use App\Models\CustomHtml;
use Illuminate\Database\Seeder;

class CustomHtmlTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CustomHtml::class, 5)->create();
    }
}

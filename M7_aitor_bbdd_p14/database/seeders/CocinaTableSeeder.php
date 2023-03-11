<?php
namespace Database\Seeders;
use App\Models\Article;
use Illuminate\Database\Seeder;
class AnimalsTableSeeder extends Seeder
{
    public function run()
    {
        Article::factory()->count(50)->create();
    }
}
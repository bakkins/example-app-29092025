<?php
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create(['title' => 'Pirmais posts', 'content' => 'Šis ir pirmais testa ieraksts']);
        Post::create(['title' => 'Otrais posts', 'content' => 'Šis ir otrais testa ieraksts']);
        Post::create(['title' => 'Trešais posts', 'content' => 'Šis ir trešais testa ieraksts']);
    }
}

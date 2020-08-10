<?php


use App\Post;
use App\Categoria;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
    Post::truncate();
    Categoria::truncate();

    $categoria= new Categoria;
    $categoria->name="Categoria 1";
    $categoria->save();

    $categoria= new Categoria;
    $categoria->name="Categoria 2";
    $categoria->save();


      $post = new Post;
      $post->title="Mi Primer Post";
      $post->excerpt="Extracto de Primer Post";
      $post->body="<p>Contenido de mi Primer Post</p>";
      $post->published_at= Carbon::now();
      $post->category_id= 1;
      $post->save();


      $post = new Post;
      $post->title="Mi Segundo Post";
      $post->excerpt="Extracto de Segundo Post";
      $post->body="<p>Contenido de mi Segundo Post</p>";
      $post->published_at= Carbon::now();
      $post->category_id= 1;
      $post->save();
      
      $post = new Post;
      $post->title="Mi Tercer Post";
      $post->excerpt="Extracto de Tercer Post";
      $post->body="<p>Contenido de mi Tercer Post</p>";
      $post->published_at= Carbon::now();
      $post->category_id= 2;
      $post->save();
    }
}

<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\User;

// Fetch all posts
Route::get('/', function () {
$posts = Post::latest()->with('Category', 'author')->get();
$categories = Category::all();

// Pass posts to the view
return view('posts', [
'posts' => $posts,
'categories' => $categories
]);



/* We can use either one
  $posts = array_map(function ($file)
  {
    $document = YamlFrontMatter::parseFile($file);
    return new Post(
      $document ->title,
      $document ->excerpt,
      $document ->date,
      $document ->body(),
      $document ->slug
    );
  },$files);
  */

});

Route::get('posts/{post:slug}', function (Post $post) {

    //$post = Post::findOrFail($post);            Laravel will automatically find the Post model by its ID for you. So you don’t need to call findOrFail 

    // Return the post view with the post data
    return view('post', ['post' => $post]);


});

Route::get('categories/{category:slug}', function (Category $category){

  return view('posts', [
    'posts' => $category -> posts //-> load ('category','author')
  ]);
});


Route::get('authors/{author:username}', function (User $author){

    return view('posts', [
      'posts' => $author -> posts //-> load ('category','author')
    ]);
});
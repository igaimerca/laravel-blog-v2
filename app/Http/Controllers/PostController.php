<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class PostController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $posts = Post::whereNotNull('published_at')->simplePaginate(3);
    return view('posts.home', ['posts' => $posts]);
  }

  public function my_posts()
  {
    $userId = auth()->id();
    $my_posts = Post::where('user_id', $userId)->simplePaginate(3);
    return view("posts.home", ['posts' => $my_posts]);
  }
  /**
   * Display the specified resource.
   */
  public function show($uuid)
  {
    $post = Post::where('uuid', $uuid)->first();
    return view('posts.show', ['post' => $post]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   */
  public function edit(Request $request, $uuid = NULL)
  {
    $data = [];


    if (!empty($uuid)) {
      $post = Post::where('uuid', $uuid)->first();

      if (empty($post)) {
        return redirect()->back()->with('error', 'Invalid Post');
      }
      $data['post'] = $post;
    }

    if (!empty($request->input('title'))) {
      $res = Post::_validateAndSavePost($request, !empty($post) ? $post : NULL);
      if (!empty($res['post'])) {
        return redirect()->to('/posts/show/' . $res['post']->uuid)->with('success', 'Post saved successfully');
      } else {
        return redirect()->back()->withInput()->with('error', !empty($res['message']) ? $res['message'] : 'Could not save post');
      }
    }

    return view('posts.edit', $data);
  }

  public function delete($uuid)
  {
    $post = Post::where('uuid', $uuid)->first();

    if (empty($post)) {
      return redirect()->back()->with('error', 'Invalid Post');
    }
    $post->delete_instance();
    return redirect('/my_posts')->with('success', 'Post successfully deleted');
  }
}

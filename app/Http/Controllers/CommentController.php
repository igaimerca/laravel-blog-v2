<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
  /**
   * Add a new comment.
   *
   */
  public function edit(Request $request, $post_uuid = NULL)
  {

    if (!empty($post_uuid)) {
      $post = Post::where('uuid', $post_uuid)->first();
      if (empty($post)) {
        return redirect()->back()->with('error', 'Invalid Post');
      }
    }

    if (!empty($request->input('content'))) {
      $res = Comment::_validateAndSaveComment($request, $post->id);
      if (!empty($res['comment'])) {
        return redirect()->route('posts.show', $post_uuid)->with('success', "Comment added successfully!");
      } else {
        return redirect()->back()->withInput()->with('error', !empty($res['message']) ? $res['message'] : 'Could not add the comment');
      }
    }
  }
}

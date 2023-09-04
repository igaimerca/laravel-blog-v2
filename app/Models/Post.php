<?php

namespace App\Models;

use App\Library\GeneralLibrary;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
  use HasFactory;

  // protected $casts = [
  //   'content' => 'array',
  // ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function comment()
  {
    return $this->hasMany(Comment::class);
  }
  public static function _validateAndSavePost(Request $request, $post = null)
  {
    $toBeValidated = [
      'title' => 'required|min:5|max:100',
      'content' => 'required|min:10',
      'published_at' => 'nullable'
    ];
    $validator = Validator::make($request->all(), $toBeValidated);

    if ($validator->fails()) {
      foreach ($validator->errors()->toArray() as $field_key => $messages) {
        foreach ($messages as $message) {
          $form_errors[] = $message;
        }
      }
      return ['status' => false, 'message' => implode('; ', $form_errors)];
    }

    $validatedData =  $validator->validated();
    if (empty($post)) {
      $post = new self;
      $post->uuid = GeneralLibrary::_uuid_v4();
      $post->user_id = auth()->user()->id;
    }
    // $existedPost = self::where('title', 'like', $validatedData['title'])->first();

    // if (!empty($existedPost) and (empty($post) or $post->id != $existedPost->id)) {
    //   return ['status' => false, 'message' => 'Post with the same title already exists'];
    // }

    $post->title = $validatedData['title'];
    $post->content = $validatedData['content'];
    $post->published_at = !empty($validatedData['published_at']) ? $validatedData['published_at'] : NULL;

    $post->save();

    return ['status' => true, 'post' => $post];
  }
}

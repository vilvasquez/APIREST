<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\http\Resources\V1\PostResource;

class PostController extends Controller
{

    public function index()
    {
        return PostResource::collection(Post::latest()->paginate());
    }

    public function show(Post $post)
    {
        return new PostResource ($post);
    }

    public function destroy(Post $post)
    {
       $post->delete();

       return response()->json([
          'message' => 'Brevas'
       ], 204);
    }
}

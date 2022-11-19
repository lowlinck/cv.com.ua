<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\StoreRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $request->validated();
        $input = $request->all();

        $input['user_id'] = auth()->user()->id;

        $comment = Comment::create($input);

        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Repositories\TagRepository;

class TagsController extends Controller
{
    public function show(Tag $tag, TagRepository $tagRepo)
    {
        $posts = $tagRepo->getPaginatedPostsForTag($tag, 15);

        return view('tags.show', compact('tag', 'posts'));
    }
}

<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

use App\Post;

class Index extends Component
{
    public function render()
    {
        $posts = Post::latest()->get();

        return view('livewire.post.index', compact('posts'));
    }
}

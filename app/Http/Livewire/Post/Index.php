<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

use App\Post;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $posts = Post::latest()->paginate(5);

        return view('livewire.post.index', compact('posts'));
    }
}

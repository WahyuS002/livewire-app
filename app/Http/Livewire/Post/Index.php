<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

use App\Post;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $perPages = 5;

    protected $listeners = ['postAdded'];

    public function postAdded()
    {
    }

    public function loadMore()
    {
        $this->perPages += 5;
    }

    public function render()
    {
        $posts = Post::latest()->paginate($this->perPages);

        return view('livewire.post.index', compact('posts'));
    }
}

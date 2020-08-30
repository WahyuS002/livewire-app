<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class Add extends Component
{
    public $body;

    public function addPost()
    {
        $post = auth()->user()->post()->create([
            'body' => $this->body
        ]);

        // Saat data selesai dimasukkan maka body = null
        $this->body = '';

        $this->emit('postAdded', $post->id);
    }

    public function render()
    {
        return view('livewire.post.add');
    }
}

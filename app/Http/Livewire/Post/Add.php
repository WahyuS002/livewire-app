<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class Add extends Component
{
    public $body;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'body' => 'min:3|max:255'
        ]);
    }

    public function addPost()
    {
        $this->validate([
            'body' => 'required|min:3|max:255'
        ]);

        auth()->user()->post()->create([
            'body' => $this->body
        ]);

        // Saat data selesai dimasukkan maka body = null
        $this->body = '';

        session()->flash('message', 'Your post has been added');
        $this->emit('postAdded');
    }

    public function render()
    {
        return view('livewire.post.add');
    }
}

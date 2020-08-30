<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use App\User;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $updatesQueryString = ['page'];
    public $query = '';
    public $perPage = 10;

    // User::where('name', "%$this->query%")->get();

    public function render()
    {
        $users = User::where('name', 'like', "%$this->query%")
            ->latest()
            ->paginate($this->perPage);

        $this->page > $users->lastPage() ? $this->page = $users->lastPage() : true;
        return view('livewire.users.table', compact('users'));
    }
}

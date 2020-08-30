<div class="container">
    <div class="row justify-content-between mb-4">
        <div class="col md-4">
            <div class="form-inline">
                <span>Show Per Page: &nbsp</span>
                <select class="form-control" wire:model="perPage">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                </select>
            </div>
        </div>

        <div class="col md-4">
            <input type="text" class="form-control" placeholder="Search People . . ." wire:model="query">
        </div>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Occupation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>                    
                <td>{{ $user->username }}</td>                    
                <td>{{ $user->email }}</td>                    
                <td>{{ $user->occupation }}</td>                    
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>

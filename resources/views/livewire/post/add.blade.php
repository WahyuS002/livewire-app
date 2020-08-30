<div>
    <div class="card">
        <div class="card-header">
            Update your post.
        </div>
        <div class="card-body">
            <form action="#" method="post" wire:submit.prevent="addPost">
                <div class="form-group">
                    <textarea class="form-control" style="resize: none;" wire:model="body"></textarea>                
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

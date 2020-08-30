<div>
    <div class="card">
        <div class="card-header">
            Hello Livewire
        </div>
        <div class="card-body">
            @foreach ($posts as $post)
                
                <livewire:post.single :key="$post->id" :post="$post">

            @endforeach
        </div>
    </div>
</div>

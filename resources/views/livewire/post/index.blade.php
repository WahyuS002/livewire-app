<div>
    <div class="card">
        <div class="card-header">
            Hello Livewire
        </div>
        <div class="card-body">
            @foreach ($posts as $post)
                
                <livewire:post.single :key="$post->id" :post="$post">

            @endforeach
            {{-- {{ $posts->links() }} --}}

            @if ($posts->hasMorePages())
                <button class="btn btn-primary" wire:click="loadMore">Load More</button>                
            @endif
        </div>
    </div>
</div>

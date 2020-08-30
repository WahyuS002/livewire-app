<div class="media">                
    <div class="media-body">
        <h5 class="mb-0">{{ $post->user->name}}</h5>
        <small class="text-secondary">{{ $post->created_at->diffForHumans() }}</small>
        <p>{{ $post->body }}</p>
    </div>                
</div>

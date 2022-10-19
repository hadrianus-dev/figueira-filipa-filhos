<div wire:ignore.self class="widget bg-white ">
    <h4 class="widget-title ">Pesquisar</h4>
    <div class="search-bx">
        <form role="search" method="post">
            <div class="input-group">
                <input wire:model='searchWords' type="text" class="form-control bg-gray" placeholder="Pesquise aqui">
                <span class="input-group-btn bg-gray">
                    <button type="submit" wire:click.prevent='' class="btn"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
    </div>
    @if ($searchWords)
    @forelse ($postResults as $post)
    <div class="widget-post clearfix">
        <div class="mt-post-info">
            <div class="mt-post-meta">
                <ul>
                    <li class="post-author"><a href="{{route('postshow', $post->slug)}}">{{$post->title}}</a></li>
                    <li class="post-comment">{{$post->created_at->diffForHumans()}}</li>
                </ul>
            </div>                                            
            <div class="mt-post-header">
                <h6 class="post-title">{{Str::words($post->description, 10, '...')}}</h6>
            </div>
        </div>
    </div>
    @empty
    
    @endforelse
    @endif
</div>

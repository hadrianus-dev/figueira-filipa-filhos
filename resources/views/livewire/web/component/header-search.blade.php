<div id="search" wire:ignore.self> 
    <span class="close"></span>
    <form role="search" id="searchform" method="post" class="radius-xl">
        <div class="input-group">
            <input value="" wire:model='searchWords' type="search" placeholder="Pesquisar"/>
            <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search arrow-animation"></i></button></span>
        </div>   
        <div class="input-group">
            @if ($searchWords)
            <div class="list-group">
                @forelse ($serviceResults as $service)
                <a href="{{route('serviceshow', $service->slug)}}" class="list-group-item list-group-item-action">
                {{$service->title}}
                </a>
                @empty
                <a href="#" class="list-group-item list-group-item-action">Sem resultados para sua pesquisa</a>
                @endforelse
            </div>
            @endif
        </div>   
    </form>
    
</div>


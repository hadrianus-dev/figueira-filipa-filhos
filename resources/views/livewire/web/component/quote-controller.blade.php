 <!-- MODAL -->
 <div id="with-form" class="modal fade" role="dialog" wire:ignore.self>
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-secondry">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-white">Pedido de Cotação</h4>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent='sendQuote' id="demo-form" class="form-horizontal mb-lg">
            <div class="form-group mt-lg">
                <label class="col-sm-3 control-label">Nome</label>
                <div class="col-sm-9">
                    <input wire:model='quote.name' class="form-control" placeholder="Seu Nome" required type="text">
                    @error('quote.name') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input wire:model='quote.email' class="form-control" placeholder="Seu email..." required type="email">
                    @error('quote.email') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Serviço</label>
                <div class="col-sm-9">
                    <select wire:model='quote.service' id="" class="form-control">
                        <option value="">Selecionar</option>
                        @foreach ($services as $service)
                        <option value="{{$service->title}}">{{$service->title}}</option>
                        @endforeach
                    </select>
                    @error('quote.service') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Informação Complementar</label>
                <div class="col-sm-9">
                <textarea wire:model='quote.body' rows="5" class="form-control" placeholder="Mais Informação" required></textarea>
                @error('quote.body') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="site-button btn-effect text-uppercase button-sm letter-spacing-2 m-r15" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="site-button btn-effect text-uppercase button-sm letter-spacing-2">Enviar Pedido </button>
        </div>
    </div>
  </div>
</div>

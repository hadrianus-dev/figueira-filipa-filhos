 <!-- MODAL -->
 <div id="with-form" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-secondry">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-white">Pedido de Cotação</h4>
        </div>
        <div class="modal-body">
          <form id="demo-form" class="form-horizontal mb-lg" novalidate>
            <div class="form-group mt-lg">
                <label class="col-sm-3 control-label">Nome</label>
                <div class="col-sm-9">
                    <input name="name" class="form-control" placeholder="Seu Nome" required type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input name="email" class="form-control" placeholder="Seu email..." required type="email">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Serviço</label>
                <div class="col-sm-9">
                    <select name="" id="" class="form-control">
                        <option value="">Selecionar</option>
                        <option value="">teste</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Informação Complementar</label>
                <div class="col-sm-9">
                <textarea rows="5" class="form-control" placeholder="Mais Informação" required></textarea>
                </div>
            </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="site-button btn-effect text-uppercase button-sm letter-spacing-2 m-r15" data-dismiss="modal">Cancelar</button>
          <button type="button" class="site-button btn-effect text-uppercase button-sm letter-spacing-2">Enviar Pedido </button>
        </div>
    </div>
  </div>
</div>

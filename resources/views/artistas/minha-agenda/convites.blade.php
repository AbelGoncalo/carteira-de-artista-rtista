
<div wire:ignore.self data-backdrop="static" data-backdrop="static" class="modal fade" id="lista-convites" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog  modal-xl" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-calendar"></i> CONVITES</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-header" style="background: #3d2822; color:#ffff">
                    <h6><i class="fa fa-search"></i> PESQUISAR</h6>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-sm" wire:model.live='title' placeholder="Pesquisar pelo titulo" aria-label="title" aria-describedby="basic-addon1">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                @if (isset($convites) and count($convites) > 0)
                <div class="row mt-3 mb-3 d-flex justify-content-end align-items-center flex-wrap">
                    <button wire:click='confirmarRejeitarTodos' class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Rejeitar Todos</button>
                    <button wire:click='confirmarAceitarTodos' class="btn btn-sm btn-success mx-2"><i class="fa fa-check-double"></i> Aceitar Todos</button>
                </div>
                @endif
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-sm text-center">
                    <thead style="background: #3d2822; color:#ffff">
                        <tr>
                            <th>Evento</th>
                            <th>Início</th>
                            <th>Fim</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($convites) and count($convites) > 0)
                            @foreach ($convites as $item)
                            <tr>
                              
                                <td>{{$item->title}}</td>
                                <td>{{$item->start}}</td>
                                <td>{{$item->end}}</td>
                                <td>
                                    <button data-toggle="tooltip" data-placement="top" title="Rejeitar Convite " wire:click='rejeitarConfirmar({{$item->convidadoID}})' class="btn btn-sm btn-danger">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <button data-toggle="tooltip" data-placement="top" title="Aceitar Convite" wire:click='aceitarConfirmar({{$item->convidadoID}})' class="btn btn-sm btn-success">
                                        <i class="fa fa-check-double"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="4">
                                <div class="col-md-12 d-flex justify-content-center align-items-center flex-column" style="height: 25vh">
                                    <i class="fa fa-5x fa-caret-down text-muted"></i>
                                    <p class="text-muted">Nenhum Convite Encontrado</p>
                                </div>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>
</div>
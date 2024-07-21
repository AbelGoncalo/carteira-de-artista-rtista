
@extends('merge.artistas.dashboard.index')
@section('content')
    
<div class="">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background: #3d2822">
                        <h6 class="text-light">Pagamentos Realizados</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm table-striped table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>Pagamento Referente</th>
                                        <th>Comprovativo</th>
                                        <th>Estado</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($pagamentos) and $pagamentos->count() >0)
                                        @foreach ($pagamentos as $p)
                                    <tr>
                                       <td><{{$p->tipo}}</td>
                                       <td>
                                        <i style="color: #3d2822" class="fa fa-file-pdf fa-1x"></i>
                                       </td>
                                       <td>
                                        {{$p->status}}
                                       </td>
                                       <td>
                                        <a href="#" style="background-color: #3d2822" class="text-light btn btn-sm" title="Baixar Comprovativo">
                                            <i class="fa fa-download"></i>
                                        </a>
                                       </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="4">
                                            <div class="col-md-12 d-flex justify-content-center align-items-center flex-column" style="height: 25vh">
                                                <i class="fa fa-5x fa-caret-down text-muted"></i>
                                                <p class="text-muted">Nenhum Pagamento Foi Encontrado</p>
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
    </div>

</div>
@endsection

@extends('merge.artistas.dashboard.index')
@section('content')
    
<div class="">

  

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12 d-flex justify-content-center align-items-center flex-wrap">
                <div class="col-md-12">
                    <div class="card  shadow" style="height: auto">
                        <div class="card-header col-md-12 d-flex justify-content-between align-items-center flex-wrap" style="background: #3d2822">
                            
                            <h6 class="text-light">FOTOS EM PALCO</h6>
                            <button data-toggle="modal" data-target="#add-galeria" style="background: #5e3e35" class="btn btn-md text-light font-weight-bold">Adicionar</button>
                        </div>
                        <div class="card-body">
                            <livewire:galeria-artista-component />
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>

</div>
@endsection
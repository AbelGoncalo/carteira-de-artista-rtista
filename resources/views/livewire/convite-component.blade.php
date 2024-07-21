<div class="col-xl-3 col-md-6 mb-4">
    <div data-toggle="modal" data-target="#lista-convites" style="cursor: pointer">
        <div class="card border-left-dark shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                            <h5 class="h6 text-dark">CONVITES PENDENTES </h5>
                        </div>
                        <div class="h4 text-center mb-0 font-weight-bold text-gray-800">{{$pendentes}}</div>
                    </div>
                    <div class="col-auto">
                            <i class="fa fa-calendar fa-3x text-info"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('artistas.minha-agenda.convites')
</div>

<script>
    document.addEventListener('refresh', () => {
       window.location.reload();
    });
</script>
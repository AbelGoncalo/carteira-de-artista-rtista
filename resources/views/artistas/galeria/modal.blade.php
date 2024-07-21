
  <div wire:ignore.self data-backdrop='static' class="modal fade" id="add-galeria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content ">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Adicionar Foto</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="modal-body">
          
            <form  wire:submit='salvarFotos' method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="staticEmail2" class="sr-only">Email</label>
                  <div x-data="{isUploading: false, progress: 0}" class="col-12 d-flex align-items-center justify-content-center flex-wrap flex-column"
                  x-on:livewire-upload-start = "isUploading = true"
                  x-on:livewire-upload-finish = "isUploading = false"
                  x-on:livewire-upload-error = "isUploading = false"
                  x-on:livewire-upload-progress = "progress = $event.detail.progress"
                  >
                  <input multiple type="file" wire:model="fotos" class="form-control @error('fotos') is-invalid @enderror" id="fotos">
                  @error('fotos') <span class="text-danger">{{$message}}</span>@enderror
                  <div x-show="isUploading" class="progress progress-striped active w-100 mt-3" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="10">
                    <div class="progress-bar progress-bar-success" x-bind:style="`width:${progress}%`" data-dz-uploadprogress></div>
                  </div>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="w-100 btn btn-md  mb-2 mx-1 text-light" style="background-color: #3d2822">Adicionar</button><br>
                </div>
            </form>
          </div>
          
      </div>
  </div>
</div>
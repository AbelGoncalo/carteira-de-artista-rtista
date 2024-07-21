<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Galeria;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class GaleriaArtistaComponent extends Component
{

    use WithFileUploads,LivewireAlert;

    public $fotos,$id;
    protected $listeners = ['excluido'];

    public $rules = ['fotos' =>'required'];
    public $messages = ['fotos.required' =>'Obrigatório'];

    public function render()
    {
        return view('livewire.galeria-artista-component',[
            'galeriaArtista' =>Galeria::where('user_id',auth()->user()->id)->get(),
        ]);
    }


    public function salvarFotos()
    {
        $this->validate($this->rules,$this->messages);

     
       
        try {
           
            if($this->fotos)
            {
               
             
            

                for($i=0;$i < count($this->fotos); $i++){
                    $foto[$i] = md5($this->fotos[$i]->getClientOriginalName()).'.'.$this->fotos[$i]->getClientOriginalExtension();

                    Galeria::create([
                        'user_id' =>auth()->user()->id,
                        'foto'=>$foto[$i],
                    ]);

                    $this->fotos[$i]->storeAs('/public/fotos',$foto[$i]);
                }



                
                $this->alert('success', 'SUCESSO', [
                    'position' => 'center',
                    'toast' => false,
                    'timer' => 2000,
                    'text' => 'Operação realizada com sucesso!!',
                    ]);

                $this->fotos = null;
            }
        } catch (\Exception $th) {
 
            $this->alert('error', 'ERRO', [
                'position' => 'center',
                'toast' => false,
                'timer' => 2000,
                'text' => 'Falha ao Realizar Operação!!',
            ]);
        }
    }
    public function excluir($id)
    {

        try{

            $this->id = $id;
           
            $this->alert('question', 'Deseja Realmente Excluir? Não pode reverter está ação.', [
                'icon' => 'warning',
                'position' => 'center',
                'toast' => false,
                'timer' => null,
                'showConfirmButton' => true,
                'showCancelButton' => true,
                'cancelButtonText' => 'Cancelar',
                'confirmButtonText' => 'Excluir',
                'confirmButtonColor' => '#3085d6',
                'cancelButtonColor' => '#d33',
                'onConfirmed' => 'excluido' 
            ]);


         } catch (\Exception $th) {
 
            $this->alert('error', 'ERRO', [
                'position' => 'center',
                'toast' => false,
                'timer' => 2000,
                'text' => 'Falha ao Realizar Operação!!',
            ]);
        }

    
    }
    public function excluido()
    {

        try{
          
           Galeria::destroy($this->id);

           $this->alert('success', 'SUCESSO', [
            'position' => 'center',
            'toast' => false,
            'timer' => 2000,
            'text' => 'Operação realizada com sucesso!!',
            ]);


            $this->id = null;
           


         } catch (\Exception $th) {
 
            $this->alert('error', 'ERRO', [
                'position' => 'center',
                'toast' => false,
                'timer' => 2000,
                'text' => 'Falha ao Realizar Operação!!',
            ]);
        }

    
    }
}

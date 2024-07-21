<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\{Event,Convidado};
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Dabatabase\Element\DB;
class ConviteComponent extends Component
{
    use LivewireAlert;
    public $title,$conviteId,$check;


   
    
    protected $listeners = ['aceitar','rejeitar','refresh','rejeitarTodos','aceitarTodos'];

    public function render()
    {
        
        return view('livewire.convite-component',[
            'convites' => $this->listarConvites($this->title),
            'pendentes'=>Convidado::join('events','convidados.event_id','events.id')
            ->select('events.title','events.start','events.end','convidados.texto','convidados.id as convidadoID')
            ->where('convidados.artista_id',auth()->user()->artista_id)
            ->where('convidados.status','pendente')
            ->orderBy('convidados.id','desc')
            ->count(),
            
        ]);
    }



    public function listarConvites($title)
    {
        try {

            if($title != null) {

                return  Convidado::join('events','convidados.event_id','=','events.id')
                ->select('events.title','events.start','events.end','convidados.texto','convidados.id as convidadoID')
                ->where('convidados.artista_id',auth()->user()->artista_id)
                ->where('convidados.status','pendente')
                ->orderBy('convidados.id','desc')
                ->where('events.title','like','%'.$title.'%')
                ->get();              


            }else{

                return Convidado::join('events','convidados.event_id','=','events.id')
                        ->select('events.title','events.start','events.end','convidados.texto','convidados.id as convidadoID')
                        ->where('convidados.artista_id',auth()->user()->artista_id)
                        ->where('convidados.status','pendente')
                        ->orderBy('convidados.id','desc')
                        ->get();

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

 


    public function rejeitarConfirmar($id)
    {
        try {

            $this->conviteId = $id;

            $this->alert('question', 'TEM A CERTEZA', [
                'icon' => 'warning',
                'position' => 'center',
                'toast' => false,
                'timer' => null,
                'text' => 'Deseja Realmente rejeitar o Convite Para este Evento? Não pode reverter está ação.',
                'showConfirmButton' => true,
                'showCancelButton' => true,
                'cancelButtonText' => 'Cancelar',
                'confirmButtonText' => 'Rejeitar',
                'confirmButtonColor' => '#218838',
                'cancelButtonColor' => '#d33',
                'onConfirmed' => 'rejeitar' 
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
    public function aceitarConfirmar($id)
    {
        try {
            $this->conviteId = $id;

            $this->alert('question', '', [
                'icon' => 'warning',
                'position' => 'center',
                'toast' => false,
                'timer' => null,
                'text' => 'Deseja Realmente Aceitar o Convite Para este Evento? Não pode reverter está ação.',
                'showConfirmButton' => true,
                'showCancelButton' => true,
                'cancelButtonText' => 'Cancelar',
                'confirmButtonText' => 'Aceitar',
                'confirmButtonColor' => '#218838',
                'cancelButtonColor' => '#d33',
                'onConfirmed' => 'aceitar' 
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
    public function aceitar()
    {
        try {
        
           $convidado =  Convidado::find($this->conviteId);
           $convidado->status = 'aceite';
           $convidado->save();

           $this->alert('success', 'SUCESSO', [
            'position' => 'center',
            'toast' => false,
            'timer' => 2000,
            'text' => 'Convite aceite com sucesso!!',
        ]);

        $this->dispatch('refresh');
         
                    
        } catch (\Exception $th) {
            $this->alert('error', 'ERRO', [
                'position' => 'center',
                'toast' => false,
                'timer' => 2000,
                'text' => 'Falha ao Realizar Operação!!',
            ]);
        }
    }
    public function rejeitar()
    {
        try {
        
            $convidado =  Convidado::find($this->conviteId);
            $convidado->status = 'rejeitado';
            $convidado->save();
 
            $this->alert('success', 'SUCESSO', [
             'position' => 'center',
             'toast' => false,
             'timer' => 2000,
             'text' => 'Convite rejeitado com sucesso!!',
         ]);
         
         $this->dispatch('refresh');     
        } catch (\Exception $th) {
            $this->alert('error', 'ERRO', [
                'position' => 'center',
                'toast' => false,
                'timer' => 2000,
                'text' => 'Falha ao Realizar Operação!!',
            ]);
        }
    }


    ///VERIFICAR SE O ARTISTA SELECIONO  EM ACEITAR TODOS ÓU REJEITAR TODOS
    public function confirmarRejeitarTodos()
    {
        try {
            $this->alert('question', 'Deseja Realmente Rejeitar todos os Convites? Não pode reverter está ação.', [
                'icon' => 'warning',
                'position' => 'center',
                'toast' => false,
                'timer' => null,
                'showConfirmButton' => true,
                'showCancelButton' => true,
                'cancelButtonText' => 'Cancelar',
                'confirmButtonText' => 'Aceitar',
                'confirmButtonColor' => '#218838',
                'cancelButtonColor' => '#d33',
                'onConfirmed' => 'rejeitarTodos' 
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
    public function confirmarAceitarTodos()
    {
        try {
            $this->alert('question', 'Deseja Realmente Aceitar todos os Convites? Não pode reverter está ação.', [
                'icon' => 'warning',
                'position' => 'center',
                'toast' => false,
                'timer' => null,
                'showConfirmButton' => true,
                'showCancelButton' => true,
                'cancelButtonText' => 'Cancelar',
                'confirmButtonText' => 'Aceitar',
                'confirmButtonColor' => '#218838',
                'cancelButtonColor' => '#d33',
                'onConfirmed' => 'aceitarTodos' 
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

    public function aceitarTodos()
    {
        try {

            $data =   Convidado::where('artista_id',auth()->user()->artista_id)
            ->where('status','pendente')
            ->get();

            foreach ($data as $key => $value) {
               $value->status = 'aceite';
               $value->save();
            }

            $this->alert('success', 'SUCESSO', [
                'position' => 'center',
                'toast' => false,
                'timer' => 2000,
                'text' => 'Todos os convites foram aceites com sucesso!!',
            ]);
            $this->dispatch('refresh');

        } catch (\Exception $th) {
            
            $this->alert('error', 'ERRO', [
                'position' => 'center',
                'toast' => false,
                'timer' => 2000,
                'text' => 'Falha ao Realizar Operação!!',
            ]);
        }
    }
    public function rejeitarTodos()
    {
        try {

            $data =   Convidado::where('artista_id',auth()->user()->artista_id)
            ->where('status','pendente')
            ->get();

            foreach ($data as $key => $value) {
               $value->status = 'rejeitado';
               $value->save();
            }

            $this->alert('success', 'SUCESSO', [
                'position' => 'center',
                'toast' => false,
                'timer' => 2000,
                'text' => 'Todos os convites foram rejitados com sucesso!!',
            ]);

            $this->dispatch('refresh');
           
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

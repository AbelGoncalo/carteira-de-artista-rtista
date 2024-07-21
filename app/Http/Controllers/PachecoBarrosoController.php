<?php

namespace App\Http\Controllers;

use App\Models\PachecoBarroso;
use Illuminate\Http\Request;

class PachecoBarrosoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data = $request->all();
            //Saving the file of BI attachment
            $destinyPathName = "/public/files/bilhete_identidade_anexos";
            $file = $request->file("bilhete_identidade_anexo");
            $name = $file->getClientOriginalName();
            $path = $file->storeAs($destinyPathName, $name);
            $data['bilhete_identidade_anexo'] = $name;

            $promotorEventos = PachecoBarroso::create($data);

            $user = new User();
            $user->name = $data["nome"];
            $user->email = $data["email"];
            $user->password = bcrypt($data["password"]);
            $user->perfil = "pacheco_barros";
            $user->promotor_id = $promotorEventos["id"];
            $user->save();

            if($promotorEventos && $user){
                return redirect()->route("comissao.profissional.artista")->with("message","A sua conta foi criada com êxito e encontra-se em um estado de avaliação, consulte o seu e-mail para poder proceder o login na plataforma.");
            }

            }catch(\Exception $e){
                return redirect()->back()->with("catch", $e->getMessage());
            }

    }

 

    /**
     * Display the specified resource.
     */
    public function show(PachecoBarroso $pachecoBarroso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PachecoBarroso $pachecoBarroso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PachecoBarroso $pachecoBarroso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PachecoBarroso $pachecoBarroso)
    {
        //
    }
}

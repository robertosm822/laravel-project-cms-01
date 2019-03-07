<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contato;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createContato(Request $request)
    {
        //$nome = $request->input('contact_name');

        $contato = new Contato;
       /*
            ["contact_name"]=> string(7) "Roberto" 
            ["contact_email"]=> string(24) "robertomelo822@gmail.com" 
            ["assunto"]=> string(9) "fasfasdfa" 
            ["mensagem"]=> string(13) "fasdfasdfasdf"
        */
        $contato->contact_name = $request->contact_name;
        $contato->contact_email = $request->contact_email;
        $contato->assunto = $request->assunto;
        $contato->mensagem = $request->mensagem;
        

        $msg='';
        if(!$contato->save()) {
            $msg= "<span style='color: red; font-size: 18px;'>Ocorreu um ERRO no envio da mensagem.</span>";
            
        } else {
            $msg =  "<p style='padding: 15px;background-color: #dff0d8;'><span style='color: green; font-size: 18px;'>Mensagem enviada com sucesso! Agradecemos o seu contato.</span></p>";
        }
        return $msg;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

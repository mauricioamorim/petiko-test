<?php

namespace App\Http\Controllers;

use App\Sales;
use Illuminate\Http\Request;
use App\Http\Requests\SalesPostRequest;
use App\Http\Libraries\ZipCodeLibrary;

class SalesController extends Controller
{
    /**
     * Show the form for creating a new resource
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sales = new Sales();
        $all_sales = $Sales->all()->sortByDesc("id");
        $view_content = "sales.list";
        return view('sales.base', compact('all_sales', 'view_content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ZipCode = new ZipCodeLibrary();
        $view_content = "sales.form";
        return view('sales.base', compact('view_content'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\SalesPostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalesPostRequest $request)
    {
        $sales = new Sales();
        $sales->nome  = $request->input('nome');
        $sales->cep  = $request->input('cep');
        $sales->logradouro  = $request->input('logradouro');
        $sales->numero  = $request->input('numero');
        $sales->complemento  = $request->input('complemento');
        $sales->bairro  = $request->input('bairro');
        $sales->cidade  = $request->input('cidade');
        $sales->estado  = $request->input('estado');

        $ZipCode = new ZipCodeLibrary();

        $error = $ZipCode->compareRequestAddress($request->all());
        if($error === false) {
            if($sales->save()) {
                $request->session()->flash('status', 'Compra realizada com sucesso!');
                return redirect( route('sales.list') );
            };
        }
        return back()->withInput()->withErrors([$error]);
   }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function edit(Sales $sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sales $sales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales $sales)
    {
        //
    }
}

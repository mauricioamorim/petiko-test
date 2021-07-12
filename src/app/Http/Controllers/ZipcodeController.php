<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\ZipCodeLibrary;


class ZipCodeController extends Controller
{
    /**
     * Return a external request API
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $ZipCodeLibrary = new ZipCodeLibrary();
        return $ZipCodeLibrary->requestAddressByZipCode($request->input('cep'));
    }
}

<?php

namespace App\Http\Controllers\Primarydata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class MediumController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        return view('primarydata.medium.add_medium');
    }

    
    public function store(Request $request)
    {
        
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}

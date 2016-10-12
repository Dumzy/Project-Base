<?php

namespace App\Http\Controllers\Primarydata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Stream;

use View;

class StreamController extends Controller
{
    
    public function index()
    {
        $streams  = Stream::all();
        return View::make('primarydata.stream.view_stream', array('streams' => $streams));
    }

    
    public function create()
    {
        return view('primarydata.stream.add_stream');
    }

    
    public function store(Request $request)
    {
        $stream = new Stream;

        $stream->strname  = $request->strname;

        if($stream->save()){
             return redirect('create-stream?save=success==true')->with('success', 'Stream was successfully added');
        }
        else{
            return redirect('create-stream?save=success==false')->with('success', 'Stream was not successfully added');
        }
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $stream = Stream::where('stream_id' , '=', $id)->first(); 
        return View::make('primarydata.stream.edit_stream', array('stream' => $stream));
    }

    
    public function update(Request $request)
    {
        $stream = Stream::where('stream_id' , '=', $request->stream_id)->first();

        $stream->strname  = $request->strname;

        if($stream->save()){
            return redirect('edit-stream/'.$request->stream_id.'?save=success==true')->with('success', 'Stream was successfully updated');
        }
        else{
            return redirect('edit-stream/'.$request->stream_id.'?save=success==false')->with('success', 'Stream was not successfully updated');
        }
    }

    
    public function destroy($id)
    {
        $stream = Stream::where('stream_id' , '=', $id)->first();  
        
        $stream->deleted = 1;
        
        if($stream->save()){
             return redirect('view-stream/?delete=success==true')->with('success', 'Stream was successfully deleted');
        }
        else{
            return redirect('view-stream/?delete=success==false')->with('success', 'Stream was not successfully deleted');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;
use App\Http\Requests\ThreadRequest;

class ThreadController extends Controller
{
    public function show(Thread $thread)
    {
        return view('threads.show')->with(['thread' => $thread]);
    }
    
    public function create()
    {
        return view('threads.create');
    }
    
    public function store(ThreadRequest $request, Thread $thread)
    {
        $input = $request['thread'];
        $thread->fill($input)->save();
        return redirect()->route('threads.show', $thread->id);
    }
  
    public function edit(Thread $thread)
    {
        return view('threads.edit')->with(['thread' => $thread]);   
    }
    
    public function update(ThreadRequest $request, Thread $thread)
    {
        $input_thread = $request['thread'];
        $thread->fill($input_thread)->save();
        
        return redirect()->route('threads.update', $thread->id);
    }

    public function delete(Thread $thread)
    {
        $thread->delete();
        return redirect('/');
    }
}

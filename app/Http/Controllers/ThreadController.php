<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;
//use App\Models\Post;
//use App\Models\Category;
use Illuminate\Support\Facades\Auth;


class ThreadController extends Controller
{
    public function createThread()
    {
        return view('create-thread');
    }

    public function storeThread(Request $request)
    {
        $validatedData = $request->validate([
            'thread_subject' => 'required|max:255',
            'thread_date' => 'date',
            'thread_cat' => 'required|integer',
            'thread_description' => 'required|string', // Add validation rule for description field
        ]);
        
        $validatedData['thread_by'] = Auth::id();
        Thread::create($validatedData);

        return redirect('/create-thread')->with('success', 'Thread created successfully!');
    }

    #mess
    //public function show(Thread $thread)
    //{
    //    return view('threads.show', ['thread' => $thread]);
    //}

    //public function storePost(Request $request, $category, $threadId)
    //{
    //    $validatedData = $request->validate([
    //        'post_content' => 'required|string',
    //    ]);
    //
    //    $post = new Post();
    //    $post->post_content = $validatedData['post_content'];
    //    $post->thread_id = $threadId;
    //    $post->user_id = Auth::id();
    //    $post->save();
    //
     //   return redirect()->route('threads.show', [$category, $threadId])->with('success', 'Post created successfully!');
    //}
    

}


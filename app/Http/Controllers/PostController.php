<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use Illuminate\Notifications\Notifiable;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use \App\Notifications\CreatePost;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
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
    public function create(){
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $post = Post::create(  [
            'title' => $request->title,
            'body' => $request->body,
        ]);
        $users = User::where('id', '!=', auth()->user()->id)->get();
        $User_Create = auth()->user()->name;
        Notification::send($users,
        new CreatePost($post->id,
        $User_Create,$post->title));
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $get_id_notification = DB::table('notifications')->where('data->Post_id', $id)->pluck('id')->first();
        DB::table('notifications')->where('id', $get_id_notification)->update(['read_at' => now()]);
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function MarkasRead(){
        $user = User::findOrFail(auth()->user()->id);
        foreach ($user->unreadNotifications as $notification) {
            $notification->markAsRead();
        }
        return redirect()->back();
    }
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}

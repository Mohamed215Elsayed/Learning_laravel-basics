<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use App\Traits\TestTrait;
use App\Models\User;
class TestController extends Controller {
    use TestTrait ;
    // public function index(){
    //     // $users = $this->getAllData(new User());
    //     $users = $this->getAllData(User::class);
    //     return $users;
    // }
    public function index(){
        // $users = User::all()->dd();
        // return $users;
        //   return abort(404);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cr $cr)
    {
        //
    }
}

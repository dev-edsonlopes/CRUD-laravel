<?php

namespace App\Http\Controllers;

use App\Models\ModelBook;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    private $objUser;
    private $objBook;

    public function __construct()
    {
        $this->objUser = new User();
        $this->objBook = new ModelBook();
    }
    public function index()
    {
        // dd($this->objBook->find(1)->relUsers);
        // dd($this->objBook->all());
        $book = $this->objBook->all();
        return view('index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->objUser->all();
        return view('create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       $home = $this->objBook->create([
            'title' => $request->title,
            'pages' => $request->pages,
            'price' => $request->price,
            'id_user' => $request->id_user
        ]);
        
        if($home) {
            return redirect('books');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = $this->objBook->find($id);
        return view('show', compact(('book')));
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

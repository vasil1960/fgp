<?php

namespace App\Http\Controllers;


use App\Manuscript;
use Illuminate\Http\Request;
use Session;
use PDO;
use App\Http\Requests\StoreManuscriptPost;
use App\Mail\PostNewManuscript;

class ManuscriptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $manuscripts = Manuscript::where('user_id', auth()->user()->id)->latest()->paginate(5);    
        return view('layouts.manuscripts.index', compact('manuscripts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Navigate to insert form 
        return view('layouts.manuscripts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreManuscriptPost $request)
    {
        $manuscript = new Manuscript;

        $manuscript->coverletter = $request->coverletter;
        $manuscript->title       = $request->title;
        $manuscript->abstract    = $request->abstract;
        $manuscript->keywords    = $request->keywords;
        $manuscript->comment     = $request->comment;
        $manuscript->docfiles    = $request->docfiles;
        $manuscript->user_id     = auth()->user()->id;
        
        $manuscript->save();
        
        // auth()->user()->manuscript()->create($request->all());

        \Mail::to('v.tsigov@gmail.com')->send( new PostNewManuscript($request));
        
        session()->flash('success', 'Thanks for post your manuscript!');
        
        // Return to all manuscripts 
        return redirect()->route('manuscripts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Manuscript  $manuscript
     * @return \Illuminate\Http\Response
     */
    public function show(Manuscript $manuscript)
    {
        return view('layouts.manuscripts.show', compact('manuscript'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manuscript  $manuscript
     * @return \Illuminate\Http\Response
     */
    public function edit(Manuscript $manuscript)
    {
        // return $manuscript;
        return view('layouts.manuscripts.edit', compact('manuscript'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manuscript  $manuscript
     * @return \Illuminate\Http\Response
     */
    public function update(StoreManuscriptPost $request, $id)
    {
        
        $manuscript = Manuscript::findOrFail($id);

        $manuscript->coverletter = $request->coverletter;
        $manuscript->title       = $request->title;
        $manuscript->abstract    = $request->abstract;
        $manuscript->keywords    = $request->keywords;
        $manuscript->comment     = $request->comment;
        $manuscript->docfiles    = $request->docfiles;
        $manuscript->user_id     = auth()->user()->id;
        
        $manuscript->save();

        // \Mail::to('v.tsigov@gmail.com')->send( new PostNewManuscript($request));
        
        session()->flash('success', 'Thanks for update your manuscript!');
        
        // Return to all manuscripts 
        return redirect()->route('manuscripts.show',['id'=>$manuscript->id ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manuscript  $manuscript
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manuscript $manuscript)
    {
        $manuscript = Manuscript::findOrFail($manuscript->id);

        $manuscript->delete();
        
        return redirect(route('manuscripts.index'))->with('success','Thanks for delete your manuscript!');
    }
}

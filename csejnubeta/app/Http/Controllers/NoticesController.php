<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Notice;
use DB;

class NoticesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$notices = notice::all();
        //return notice::where('title', 'notice Two')->get();
        //$notices = DB::select('SELECT * FROM notices');
        //$notices = notice::orderBy('title','desc')->take(1)->get();
        //$notices = notice::orderBy('title','desc')->get();

        $notices = Notice::orderBy('created_at','desc')->paginate(10);
        return view('notices.index')->with('notices', $notices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'notice_file' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        if($request->hasFile('notice_file')){
            // Get filename with the extension
            $filenameWithExt = $request->file('notice_file')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('notice_file')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('notice_file')->storeAs('public/notice_files', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        // Create notice
        $notice = new notice;
        $notice->title = $request->input('title');
        $notice->description = $request->input('description');
        $notice->user_id = auth()->user()->id;
        $notice->notice_file = $fileNameToStore;
        $notice->save();

        return redirect('/notices')->with('success', 'Notice Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice = Notice::find($id);
        return view('notices.show')->with('notice', $notice);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = Notice::find($id);

        // Check for correct user
        if(auth()->user()->id !==$notice->user_id){
            return redirect('/notices')->with('error', 'Unauthorized Page');
        }

        return view('notices.edit')->with('notice', $notice);
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
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

         // Handle File Upload
        if($request->hasFile('notice_file')){
            // Get filename with the extension
            $filenameWithExt = $request->file('notice_file')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('notice_file')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('notice_file')->storeAs('public/notice_files', $fileNameToStore);
        }

        // Create notice
        $notice = Notice::find($id);
        $notice->title = $request->input('title');
        $notice->description = $request->input('description');
        if($request->hasFile('notice_file')){
            $notice->notice_file = $fileNameToStore;
        }
        $notice->save();

        return redirect('/notices')->with('success', 'Notice Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::find($id);

        // Check for correct user
        if(auth()->user()->id !==$notice->user_id){
            return redirect('/notices')->with('error', 'Unauthorized Page');
        }

        if($notice->notice_file != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/notice_files/'.$notice->notice_file);
        }
        
        $notice->delete();
        return redirect('/notices')->with('success', 'notice Removed');
    }
}

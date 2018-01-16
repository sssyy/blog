<?php

namespace App\Http\Controllers\Content;

use App\Models\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pageLimit = 10;
        $contents = Content::where('publish_status','1')
						->orderBy('id','desc')
						->take($pageLimit)
						->get()
						->toArray();

        if (is_array($contents)) {
        	if (View::exists('Content.index'))
        	return \view('Content.index')->with('contents',$contents);
		}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return \view('Content.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $this->validate($request, [
           'title' => 'required',
           'description' => 'required',
           'publish_status' => 'required',
           'top_status' => 'required',
           'content' => 'required',
       ]);

       $data = [
           'title' => $request->input('title'),
           'description' => $request->input('description'),
           'content' => $request->input('content'),
           'count' => 0,
           'publish_status' => $request->input('publish_status') == 'on' ? 1 : 0,
           'top' => $request->input('top_status') == 'on' ? 1 : 0,
           'created_at' => empty($request->input('create_time')) ? date('Y-m-d',time()) : $request->input('create_time'),
           'author_id' => 1
       ];
       $rs = Content::insert($data);

       if ($rs) {
            Session::flash('flash-message-content','create success');
            return \view('Content.create');
       } else {
           Session::flash('flash-message-content','create failed');
           return \view('Content.create');
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
		$content = Content::find($id)->toArray();

		if (is_array($content)) {
			return \view('Content.show')->with('content', $content);
		}
		exit;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        //
    }
}

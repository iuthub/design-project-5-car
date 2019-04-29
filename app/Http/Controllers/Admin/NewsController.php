<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use Validator;
use Session;
use App\News;
use App\File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate(2);
        return view('dashboard.news.index',[
            'news' => $news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validateRequest($request);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $news = new News;
        $news->title = $request->title;
        $news->body = $request->body;
        $news->published = isset($request->published) ? '1' : '0';
        $news->save();

        $image = new File;
        $image->type = 'news';
        $imageName = time().uniqid().'.'.$request->file('image')->getClientOriginalExtension();
        Image::make($request->file('image'))->resize(300, 200)->save('images/small/news/'.$imageName);
        Image::make($request->file('image'))->save('images/news/'.$imageName);
        $image->path = $imageName;
        $image->value_id = $news->id;
        $image->save();
        
        Session::flash('news-created','You have successfully created a new News!');

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        $image = File::where('type','news')->where('value_id',$id)->first();
        // dd($image->path);

        return view('dashboard.news.edit',[
            'news' => $news,
            'image' => $image
        ]);      
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
        $validator = $this->validateRequest($request);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        // dd($request->sale);
        $news = News::find($id);
        $news->title = $request->title;
        $news->body = $request->body;
        $news->published = isset($request->published) ? '1' : '0';
        $news->save();

        if($request->hasFile('image')){
            $image = File::where('type','news')->where('value_id',$id)->first();
            Storage::delete('images/news/'.$image->path);
            $imageName = time().uniqid().'.'.$request->file('image')->getClientOriginalExtension();
            Image::make($request->file('image'))->resize(300, 200)->save('images/small/news/'.$imageName);
            Image::make($request->file('image'))->save('images/news/'.$imageName);
            $image->path = $imageName;
            $image->save();
        }
        
        Session::flash('car-created','You have successfully updated the car!');

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        
        $image = File::where('type','news')->where('value_id',$id)->first();
        unlink(public_path().'images/news/'.$image->path);
        unlink(public_path().'images/small/news/'.$image->path);
        $news->delete();
        $image->delete();

        Session::flash('news-deleted','You have successfully deleted a news!');
        return redirect()->back();
    }

    // To validate request for model News
    public function validateRequest($request)
    {
        return Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
            'image' => 'max:2047|mimes:jpeg,png,jpg'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Article;
use App\Photo;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('IsAdmin')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role==0){
            $articles = Article::latest('id')->paginate(10);
        }else{
            $articles = Article::where('user_id',Auth::id())->latest('id')->paginate(10);
        }
        return view('article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        if(!$request -> hasFile('photo')){
//            return redirect()->back()->withErrors(['photo.*' => 'photo is required']);
//        }
        $request->validate([
            "title"=>"required|min:10|max:255",
            "description"=>"required|min:10",
            "photo.*"=>"mimetypes:image/jpeg,image/png"
        ]);

        if ($request->hasFile('photo')){
            $fileNameArr = [];
            foreach($request->file('photo') as $file){
                $newFileName = uniqid()."_profile.".$file->getClientOriginalExtension();
                array_push($fileNameArr,$newFileName);
                $dir = "/public/article/";
                $file->storeAs($dir,$newFileName);
            }
        }

        $article = new Article();
        $article->title = $request->title;
        $article->description = $request->description;
        $article->user_id = Auth::id();
        $article->save();

        if ($request->hasFile('photo')){
            foreach ($fileNameArr as $f){
                $photo = new Photo();
                $photo->article_id = $article->id;
                $photo->location = $f;
                $photo->save();
            }
        }

        return redirect()->route('article.create')->with("status","<b>$request->title</b> is added");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(article $article)
    {
        return view("article.show",compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(article $article)
    {
        return view('article.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, article $article)
    {
        $request->validate([
            "title"=>"required|min:10|max:255",
            "description"=>"required|min:10",
        ]);

        $article->title = $request->title;
        $article->description = $request->description;
        $article->update();

        return redirect()->route('article.index')->with("updateStatus","Post id<b>$request->id</b> is updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(article $article)
    {
        if (\Illuminate\Support\Facades\Gate::allows('article-delete',$article)){
            $article->delete();
            return redirect()->route('article.index')->with("status","post id <b>$article->id</b> is deleted");
        }else{
            return abort(404);
        }

    }
    public function search(Request $request)
    {
        $searchKey = $request->search;
        $articles = Article::where("title","LIKE","%$searchKey%")->orWhere("description","LIKE","%$searchKey")->paginate(10);
        return view("article.index",compact('articles'));
    }
}

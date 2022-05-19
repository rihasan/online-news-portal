<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $all_published_home_post = DB::table('tbl_post')
                ->join('tbl_category', 'tbl_post.category_id', '=', 'tbl_category.category_id')
                ->where('tbl_post.publication_status', 1)
                ->limit(9)
                ->orderBy('post_id', 'desc')
                ->select('tbl_post.*', 'tbl_category.category_name')
                ->get();

        $latest_published_post = DB::table('tbl_post')
                ->join('tbl_category', 'tbl_post.category_id', '=', 'tbl_category.category_id')
                ->where('tbl_post.publication_status', 1)
                ->orderBy('post_id', 'desc')
                ->select('tbl_post.*', 'tbl_category.category_name')
                ->first();
        
        $all_published_post = DB::table('tbl_post')
                ->join('tbl_category', 'tbl_post.category_id', '=', 'tbl_category.category_id')
                ->where('tbl_post.publication_status', 1)
                ->orderBy('post_id', 'desc')
                ->select('tbl_post.*', 'tbl_category.category_name')
                ->get();
        
        $all_published_opinion_post = DB::table('tbl_post')
                ->where('tbl_post.publication_status', 1)
                ->where('tbl_post.category_id', 6)
                ->orderBy('post_id', 'desc')
                ->limit(4)
                ->get();
        
        $all_published_national_post = DB::table('tbl_post')
                ->where('tbl_post.publication_status', 1)
                ->where('tbl_post.category_id', 1)
                ->orderBy('post_id', 'desc')
                ->limit(5)
                ->get();
        
        $all_published_international_post = DB::table('tbl_post')
                ->where('tbl_post.publication_status', 1)
                ->where('tbl_post.category_id', 2)
                ->orderBy('post_id', 'desc')
                ->limit(5)
                ->get();
        
        $all_published_life_style_post = DB::table('tbl_post')
                ->where('tbl_post.publication_status', 1)
                ->where('tbl_post.category_id', 7)
                ->orderBy('post_id', 'desc')
                ->limit(5)
                ->get();
        
        $home_content = view('pages.home')
                ->with('all_home_post', $all_published_home_post)
                ->with('all_post', $all_published_post)
                ->with('all_published_opinion_post', $all_published_opinion_post)
                ->with('all_published_national_post', $all_published_national_post)
                ->with('all_published_international_post', $all_published_international_post)
                ->with('all_published_life_style_post', $all_published_life_style_post)
                ->with('leadnews', $latest_published_post);
        return view('index')
                        ->with('content', $home_content);
    }

    public function newscategory($id) {
        $all_published_post = DB::table('tbl_post')
                ->join('tbl_category', 'tbl_post.category_id', '=', 'tbl_category.category_id')
                ->where('tbl_post.publication_status', 1)
                ->where('tbl_category.category_name', $id)
                ->orderBy('post_id', 'desc')
                ->select('tbl_post.*', 'tbl_category.category_name')
                ->get();
        $news_details_content = view('pages.menu_single')
                ->with('all_post', $all_published_post)
                ->with('id', $id);

        return view('index')
                        ->with('content', $news_details_content);
    }

    public function newsdetails($name) {
        $singlenewsdetails = DB::table('tbl_post')
                ->join('tbl_category', 'tbl_post.category_id', '=', 'tbl_category.category_id')
                ->select('tbl_post.*', 'tbl_category.category_name')
                ->where('post_name', $name)
                ->first();

        $all_published_post = DB::table('tbl_post')
                ->join('tbl_category', 'tbl_post.category_id', '=', 'tbl_category.category_id')
                ->where('tbl_post.publication_status', 1)
                ->orderBy('post_id', 'desc')
                ->select('tbl_post.*', 'tbl_category.category_name')
                ->get();

        $news_details_content = view('pages.single')
                ->with('all_post', $all_published_post)
                ->with('name', $name)
                ->with('singlenewsdetails', $singlenewsdetails);

        return view('index')
                        ->with('content', $news_details_content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}

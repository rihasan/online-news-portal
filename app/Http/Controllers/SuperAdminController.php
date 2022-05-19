<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class SuperAdminController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $admin_id = Session::get('admin_id');
        if ($admin_id == null) {
            return Redirect::to('/admin-panel')->send();
        }

        $home_content = view('admin.pages.home');
        return view('admin.dashboard')
                        ->with('content', $home_content);
    }

    /*
     *   Category Management start
     */

    public function add_category() {
        $admin_id = Session::get('admin_id');
        if ($admin_id == null) {
            return Redirect::to('/admin-panel')->send();
        }

        $categry_content = view('admin.pages.add_category');
        return view('admin.dashboard')
                        ->with('content', $categry_content);
    }

    public function save_category(Request $request) {
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = (DB::raw('CURRENT_TIMESTAMP'));

        DB::table('tbl_category')->insert($data);
        Session::put('message', 'Category Information Save Successfully');
        return Redirect::to('manage-category');
    }

    public function manage_category() {
        $admin_id = Session::get('admin_id');
        if ($admin_id == null) {
            return Redirect::to('/admin-panel')->send();
        }

        $category_info = DB::table('tbl_category')->get();
        $manage_category_content = view('admin.pages.manage_category')->with('all_category_info', $category_info);
        return view('admin.dashboard')
                        ->with('content', $manage_category_content);
    }

    public function published_category($category_id) {
        $admin_id = Session::get('admin_id');
        if ($admin_id == null) {
            return Redirect::to('/admin-panel')->send();
        }
        DB::table('tbl_category')
                ->where('category_id', $category_id)
                ->update(['publication_status' => 1]);
        Session::put('message', 'Publication Status Changed Published Successfully');
        return Redirect::to('/manage-category');
    }

    public function unpublished_category($category_id) {
        $admin_id = Session::get('admin_id');
        if ($admin_id == null) {
            return Redirect::to('/admin-panel')->send();
        }
        DB::table('tbl_category')
                ->where('category_id', $category_id)
                ->update(['publication_status' => 0]);
        Session::put('message', 'Publication Status Changed Unpublished Successfully');
        return Redirect::to('/manage-category');
    }

    public function edit_category($category_id) {
        $category_info = DB::table('tbl_category')->where('category_id', $category_id)->first();
        $edit_category_content = view('admin.pages.edit_category')->with('category_info', $category_info);
        return view('admin.dashboard')
                        ->with('content', $edit_category_content);
    }

    public function update_category(Request $request) {
        $category_id = $request->category_id;
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        $data['publication_status'] = $request->publication_status;

        DB::table('tbl_category')
                ->where('category_id', $category_id)
                ->update($data);
        Session::put('message', 'Category Info Updated Successfully');
        return Redirect::to('/manage-category');
    }

    public function delete_category($category_id) {
        DB::table('tbl_category')->where('category_id', $category_id)->delete();
        Session::put('message', 'Category Info Deleted Successfully');
        return Redirect::to('/manage-category');
    }

    /*
     *   Category Management end
     */

    /*
     *   Author Management start
     */

    public function add_author() {
        $admin_id = Session::get('admin_id');
        if ($admin_id == null) {
            return Redirect::to('/admin-panel')->send();
        }

        $author_content = view('admin.pages.add_author');
        return view('admin.dashboard')
                        ->with('content', $author_content);
    }

    public function save_author(Request $request) {
        $data = array();
        $data['author_name'] = $request->author_name;
        $data['author_description'] = $request->author_description;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = (DB::raw('CURRENT_TIMESTAMP'));

        DB::table('tbl_author')->insert($data);
        Session::put('message', 'Author Information Save Successfully');
        return Redirect::to('manage-author');
    }

    public function manage_author() {
        $admin_id = Session::get('admin_id');
        if ($admin_id == null) {
            return Redirect::to('/admin-panel')->send();
        }

        $author_info = DB::table('tbl_author')->get();
        $manage_author_content = view('admin.pages.manage_author')->with('all_author_info', $author_info);
        return view('admin.dashboard')
                        ->with('content', $manage_author_content);
    }

    public function published_author($author_id) {
        $admin_id = Session::get('admin_id');
        if ($admin_id == null) {
            return Redirect::to('/admin-panel')->send();
        }
        DB::table('tbl_author')
                ->where('author_id', $author_id)
                ->update(['publication_status' => 1]);
        Session::put('message', 'Publication Status Changed Published Successfully');
        return Redirect::to('/manage-author');
    }

    public function unpublished_author($author_id) {
        $admin_id = Session::get('admin_id');
        if ($admin_id == null) {
            return Redirect::to('/admin-panel')->send();
        }
        DB::table('tbl_author')
                ->where('author_id', $author_id)
                ->update(['publication_status' => 0]);
        Session::put('message', 'Publication Status Changed Unpublished Successfully');
        return Redirect::to('/manage-author');
    }

    public function edit_author($author_id) {
        $author_info = DB::table('tbl_author')->where('author_id', $author_id)->first();
        $edit_author_content = view('admin.pages.edit_author')->with('author_info', $author_info);
        return view('admin.dashboard')
                        ->with('content', $edit_author_content);
    }

    public function update_author(Request $request) {
        $author_id = $request->author_id;
        $data = array();
        $data['author_name'] = $request->author_name;
        $data['author_description'] = $request->author_description;
        $data['publication_status'] = $request->publication_status;

        DB::table('tbl_author')
                ->where('author_id', $author_id)
                ->update($data);
        Session::put('message', 'Author info Updated Successfully');
        return Redirect::to('/manage-author');
    }

    public function delete_author($author_id) {
        DB::table('tbl_author')->where('author_id', $author_id)->delete();
        Session::put('message', 'Author info Deleted Successfully');
        return Redirect::to('/manage-author');
    }

    /*
     *   Author Management end
     */


    /*
     *   Post Management start
     */

    public function add_post() {
        $admin_id = Session::get('admin_id');
        if ($admin_id == null) {
            return Redirect::to('/admin-panel')->send();
        }

        $published_category = DB::table('tbl_category')
                ->where('publication_status', 1)
                ->get();

        $published_author = DB::table('tbl_author')
                ->where('publication_status', 1)
                ->get();

        $post_content = view('admin.pages.add_post')
                ->with('published_category', $published_category)
                ->with('published_author', $published_author);

        return view('admin.dashboard')
                        ->with('content', $post_content);
    }

    public function save_post(Request $request) {

        $data = array();
        $data['post_name'] = $request->post_name;
        $data['category_id'] = $request->category_id;
        $data['author_id'] = $request->author_id;
        $data['post_short_description'] = $request->post_short_description;
        $data['post_long_description'] = $request->post_long_description;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = (DB::raw('CURRENT_TIMESTAMP'));

        /*
         * Image Upload start
         */
        $image = $request->file('post_image');
        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/post_images/';
            $image_ulr = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['post_image'] = $image_ulr;
                DB::table('tbl_post')->insert($data);
                Session::put('message', 'Post Information Save Successfully!');
                return Redirect::to('/manage-post');
            }
        } else {
            DB::table('tbl_post')->insert($data);
            Session::put('message', 'Post Information Save Successfully!');
            return Redirect::to('/manage-post');
        }
        /*
         * Image Upload start
         */
    }

    public function manage_post() {
        $admin_id = Session::get('admin_id');
        if ($admin_id == null) {
            return Redirect::to('/admin-panel')->send();
        }

        $post_info = DB::table('tbl_post')->get();
        $published_category = DB::table('tbl_category')
                ->where('publication_status', 1)
                ->get();

        $published_author = DB::table('tbl_author')
                ->where('publication_status', 1)
                ->get();

        $manage_post_content = view('admin.pages.manage_post')
                ->with('all_post_info', $post_info)
                ->with('all_published_category', $published_category)
                ->with('all_published_author', $published_author);
        return view('admin.dashboard')
                        ->with('content', $manage_post_content);
    }

    public function published_post($post_id) {
        $admin_id = Session::get('admin_id');
        if ($admin_id == null) {
            return Redirect::to('/admin-panel')->send();
        }
        DB::table('tbl_post')
                ->where('post_id', $post_id)
                ->update(['publication_status' => 1]);
        Session::put('message', 'Publication Status Changed Published Successfully');
        return Redirect::to('/manage-post');
    }

    public function unpublished_post($post_id) {
        $admin_id = Session::get('admin_id');
        if ($admin_id == null) {
            return Redirect::to('/admin-panel')->send();
        }
        DB::table('tbl_post')
                ->where('post_id', $post_id)
                ->update(['publication_status' => 0]);
        Session::put('message', 'Publication Status Changed Unpublished Successfully');
        return Redirect::to('/manage-post');
    }

    public function edit_post($post_id) {
        $post_info = DB::table('tbl_post')->where('post_id', $post_id)->first();
        $published_category = DB::table('tbl_category')
                ->where('publication_status', 1)
                ->get();
        $published_author = DB::table('tbl_author')
                ->where('publication_status', 1)
                ->get();
        $edit_post_content = view('admin.pages.edit_post')
                ->with('all_post_info', $post_info)
                ->with('published_category', $published_category)
                ->with('published_author', $published_author);
        return view('admin.dashboard')
                        ->with('content', $edit_post_content);
    }

    public function view_post($post_id) {
        $post_info = DB::table('tbl_post')->where('post_id', $post_id)->first();
        $published_category = DB::table('tbl_category')
                ->where('publication_status', 1)
                ->get();
        $published_author = DB::table('tbl_author')
                ->where('publication_status', 1)
                ->get();
        $view_post_content = view('admin.pages.view_post')
                ->with('all_post_info', $post_info)
                ->with('published_category', $published_category)
                ->with('published_author', $published_author);
        return view('admin.dashboard')
                        ->with('content', $view_post_content);
    }

    public function update_post(Request $request) {
        $post_id = $request->post_id;
        $data = array();
        $data['post_name'] = $request->post_name;
        $data['category_id'] = $request->category_id;
        $data['author_id'] = $request->author_id;
        $data['post_short_description'] = $request->post_short_description;
        $data['post_long_description'] = $request->post_long_description;
        $data['publication_status'] = $request->publication_status;

        DB::table('tbl_post')
                ->where('post_id', $post_id)
                ->update($data);
        Session::put('message', 'Post Updated Successfully');
        return Redirect::to('/manage-post');
    }

    public function delete_post($post_id) {
        DB::table('tbl_post')->where('post_id', $post_id)->delete();
        Session::put('message', 'Post Deleted Successfully');
        return Redirect::to('/manage-post');
    }

    /*
     *   Author Management end
     */

    /*
     *   Logout start
     */

    public function logout() {
        Session::put('admin_id', null);
        Session::put('admin_name', null);
        Session::put('message', 'You are successfully logged out!');
        return Redirect::to('/admin-panel');
    }

    /*
     *   Logout start
     */

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

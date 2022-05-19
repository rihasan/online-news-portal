
@extends('admin.dashboard')
@section('content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{URL::to('/dashboard')}}">Home</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="{{URL::to('/add-post')}}">Add Post</a>
    </li>
</ul>


<div class="row-fluid sortable">        
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span> All Post</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <center>
                    <h2 style="color: green;"><?php
                        $message = Session::get('message');
                        if (isset($message)) {
                            echo $message;
                            Session::put('message', null);
                        }
                        ?></h2>
                </center>
                <thead>
                    <tr>
                        <th>Post Id</th>
                        <th>Post Name</th>
                        <th>Category Name</th>
                        <th>Author Name</th>
                        <th>Publication Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    @foreach($all_post_info as $post_info)
                    <tr>
                        <td class="center">{{$post_info->post_id}}</td>
                        <td class="center">{{$post_info->post_name}}</td>
                        <td class="center">
                            @foreach($all_published_category as $category_info)
                            <?php
                            if ($post_info->category_id == $category_info->category_id) {
                                echo $category_info->category_name;
                            }
                            ?>
                            @endforeach
                        </td>
                        <td class="center">
                            @foreach ($all_published_author as $author_info)
                            <?php
                            if ($post_info->author_id == $author_info->author_id) {
                                echo $author_info->author_name;
                            }
                            ?>
                            @endforeach
                        </td>

                        <td class="center">
                            <?php if ($post_info->publication_status == 0) { ?>
                                <span class="label label-important">Unpublished</span>
                            <?php } else { ?>
                                <span class="label label-success">Published</span>
                            <?php } ?>
                        </td>
                        <td class="center">
                            <a class="btn btn-primary" href="{{URL::to('/view-post/'.$post_info->post_id)}}" title="View Post">
                                <i class="halflings-icon white zoom-in"></i>  
                            </a>
                            <?php if ($post_info->publication_status == 0) { ?>
                                <a class="btn btn-success" href="{{URL::to('/published-post/'.$post_info->post_id)}}" title="Unpublished">
                                    <i class="halflings-icon white arrow-up"></i>  
                                </a>
                            <?php } else { ?>
                                <a class="btn btn-danger" href="{{URL::to('/unpublished-post/'.$post_info->post_id)}}" title="Published">
                                    <i class="halflings-icon white arrow-down"></i>  
                                </a>
                            <?php } ?>
                            <a class="btn btn-info" href="{{URL::to('/edit-post/'.$post_info->post_id)}}" title="Edit Post">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <?php
                            $access_label = Session::get('access_label');
                            if ($access_label == 1) {
                                ?>
                                <a class="btn btn-danger" onclick="return confirm('Are You Sure To Delete?')" href="{{URL::to('/delete-post/'.$post_info->post_id)}}" onclick = "return confirm_delete()" title="Delete" >
                                    <i class="halflings-icon white trash"></i> 
                                </a>
                            <?php } ?>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>            
        </div>
    </div><!--/span-->
</div><!--/row-->
@endsection
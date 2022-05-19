
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
        <a href="{{URL::to('/manage-post')}}"> Manage Post </a> 
    </li>
</ul>



<div class="row-fluid sortable">        
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span> View Post Details</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <tr>
                    <td>Post Id</td>
                    <td>{{$all_post_info->post_id}}</td>
                </tr>                   
                <tr>
                    <td>Product Name</td>
                    <td>{{$all_post_info->post_name}}</td>
                </tr>                   
                <tr>
                    <td>Category Name</td>
                    <td>
                        @foreach( $published_category as $category)
                        @if($all_post_info->category_id == $category->category_id)
                        {{$category->category_name}}
                        @endif
                        @endforeach
                    </td>
                </tr>                   
                <tr>
                    <td>Author Name</td>
                    <td>
                        <?php
                        foreach ($published_author as $author) {

                            if ($all_post_info->author_id == $author->author_id) {
                                echo $author->author_name;
                            }
                        }
                        ?>
                    </td>
                </tr>                   
                <tr>
                    <td>Post Short Description</td>
                    <td><?php echo $all_post_info->post_short_description; ?></td>
                </tr>                   
                <tr>
                    <td>Post Long Description</td>
                    <td><?php echo $all_post_info->post_long_description; ?></td>
                </tr>                   
                <tr>
                    <td>Post Image</td>
                    <td>
                        <?php 
//                        echo '<pre>';
//                        print_r($all_post_info->post_image);
//                        exit();
                        
                        if (file_exists($all_post_info->post_image)) { ?>
                            <img src="{{URL::to('/'.$all_post_info->post_image)}}" alt="" width="150" height="150" >
                             <?php } else { ?>
                                             <img src="{{asset('public/post_images/noimages.jpg')}}" alt="" width="150" height="150" >
                             <?php } ?>
                             </td>
                    </tr>                   
                    <tr>
                        <td>Publication Status</td>
                        <td>
                             <?php
                             if ($all_post_info->publication_status == 1) {
                                 echo "Published";
                             } else {
                                 echo "Unpublished";
                             }
                             ?>

                    </td>
                </tr>                   
            </table>     
        </div>
    </div><!--/span-->
</div><!--/row-->
@endsection
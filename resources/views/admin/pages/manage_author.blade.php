
@extends('admin.dashboard')
@section('content')
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{URL::to('/dashboard')}}">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="{{URL::to('/add-author')}}"> Add author </a></li>
</ul>

<div class="row-fluid sortable">
    <h2 style="color: #0f0; text-align: center" >
        <?php
        $message = Session::get('message');
        if ($message) {
            echo $message;
            Session::put('message', null);
        }
        ?>
    </h2>

    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Author Id</th>
                        <th>Author Name</th>
                        <th>Author Description</th>
                        <th>Publication Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    @foreach($all_author_info as $author_info)
                    <tr>
                        <td>{{$author_info->author_id}}</td>
                        <td class="center">{{$author_info->author_name}}</td>
                        <td class="center"><?php echo $author_info->author_description; ?></td>
                        <td class="center">
                            <?php if ($author_info->publication_status == 0) { ?>
                                <span class="label label-important">Unpublished</span>
                            <?php } else { ?>
                                <span class="label label-success">Published</span>
                            <?php } ?>
                        </td>

                        <td class="center">
                            <?php if ($author_info->publication_status == 0) { ?>
                                <a class="btn btn-success" href="{{URL::to('/published-author/'.$author_info->author_id)}}" title="Published">
                                    <i class="halflings-icon white arrow-up"></i>  
                                </a>
                            <?php } else { ?>
                                <a class="btn btn-danger" href="{{URL::to('/unpublished-author/'.$author_info->author_id)}}" title="UnpPublished">
                                    <i class="halflings-icon white arrow-down"></i>  
                                </a>
                            <?php } ?>
                            <a class="btn btn-success" href="{{URL::to('/edit-author/'.$author_info->author_id)}}" title="Edit">
                                <i class="halflings-icon white edit"></i>  
                            </a>

                            <?php
                            $access_label = Session::get('access_label');
                            if ($access_label == 1) { ?>
                                <a class="btn btn-danger" href="{{URL::to('/delete-author/'.$author_info->author_id)}}" title="Delete?" onclick="return check_delete();" >
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
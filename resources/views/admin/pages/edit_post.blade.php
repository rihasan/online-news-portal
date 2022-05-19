
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
        <a href="{{URL::to('/manage-post')}}">Manage Post</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Post</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <h2 style="color: green; text-align: center">

            </h2>
            {!! Form::open(['url' => '/update-post', 'method' => 'post', 'class' => 'form-horizontal', 'name' => 'edit_to_update_post']) !!}
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="focusedInput">Post Name</label>
                    <div class="controls">
                        <input name="post_id" id="focusedInput" class="input-xlarge focused" type="hidden" value="{{$all_post_info->post_id}}" >
                        <input name="post_name" id="focusedInput" class="input-xlarge focused" type="text" value="{{$all_post_info->post_name}}" required="required">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="selectError3">Category Name</label>
                    <div class="controls">
                        <select name="category_id" id="selectError3" required="required">
                            @foreach($published_category as $category)
                            @if($all_post_info->category_id == $category->category_id)
                            <option selected="selected" value="{{$category->category_id}}">{{$category->category_name}}</option>
                            @endif
                            @if($all_post_info->category_id != $category->category_id)
                            <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="selectError3">Author Name</label>
                    <div class="controls">
                        <select name="author_id" id="selectError3" required="required">
                            @foreach($published_author as $author)
                            @if($all_post_info->author_id == $author->author_id)
                            <option selected="selected" value="{{$author->author_id}}"> {{$author->author_name}}</option>
                            @endif
                            @if($all_post_info->author_id != $author->author_id)
                            <option value="{{$author->author_id}}">{{$author->author_name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Post Short Description</label>
                    <div class="controls">
                        <textarea name="post_short_description" class="cleditor" id="textarea2" rows="3">{{$all_post_info->post_short_description}}</textarea>
                    </div>
                </div>

                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Post long Description</label>
                    <div class="controls">
                        <textarea name="post_long_description" class="cleditor" id="textarea2" rows="3">{{$all_post_info->post_long_description}} </textarea>
                    </div>
                </div>
                <!--
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Post Image</label>
                                    <div class="controls">
                                        <input type="file" name="post_image" id="focusedInput" class="input-xlarge focused">
                                    </div>
                                </div>-->


                <div class="control-group">
                    <label class="control-label" for="selectError3">Publication Status</label>
                    <div class="controls">
                        <select name="publication_status" id="selectError3" required="required">
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" name="btn" class="btn btn-primary">Update Post</button>
                </div>
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div><!--/span-->

</div><!--/row-->
<script type="text/javascript">
    document.forms['edit_to_update_post'].elements['publication_status'].value = '<?php echo $all_post_info->publication_status ?>'
</script>    

@endsection
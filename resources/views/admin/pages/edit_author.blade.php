

@extends('admin.dashboard')
@section('content')
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{URL::to('/dashboard')}}">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="{{URL::to('/manage-author')}}"> Manage Author </a></li>
</ul>


<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Author</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
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

                {!! Form::open(['url' => '/update-author', 'method' => 'post', 'class' => 'form-horizontal', 'name' => 'edit_author']) !!}
                <fieldset>
                    <div class="control-group">
                        <div class="controls">
                            <input class="input-xlarge focused" name="author_id" id="focusedInput" type="hidden"  value="{{$author_info->author_id}}">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput"> Author Name </label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="author_name" id="focusedInput" type="text" value="{{$author_info->author_name}}">
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2"> Author Description </label>
                        <div class="controls">
                            <textarea class="cleditor" name="author_description" id="textarea2" rows="3">{{$author_info->author_description}}</textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="selectError3"> Publication Status </label>
                        <div class="controls">
                            <select name="publication_status" id="selectError3" required="required">
                                <option value="0"> Unpublished </option>
                                <option value="1"> Published </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" name="btn" class="btn btn-primary">Save changes</button>
                    </div>
                </fieldset>
                {!! Form::close() !!}
            </div>
        </div><!--/span-->

    </div><!--/row-->

    <script type="text/javascript">
        document.forms['edit_author'].elements['publication_status'].value = '<?php echo $author_info->publication_status ?>'
    </script>      
    @endsection

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
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Author</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            
            {!! Form::open(['url' => '/save-author', 'method' => 'post', 'class' => 'form-horizontal']) !!}
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="focusedInput"> Author Name </label>
                    <div class="controls">
                        <input class="input-xlarge focused" name="author_name" id="focusedInput" type="text" placeholder="Enter Author Name" required="required">
                    </div>
                </div>

                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2"> Author Description </label>
                    <div class="controls">
                        <textarea class="cleditor" name="author_description" id="textarea2" rows="3" required="required"></textarea>
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
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div><!--/span-->

</div><!--/row-->


@endsection
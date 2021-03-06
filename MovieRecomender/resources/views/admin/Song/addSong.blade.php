@extends('admin.master')
@section('mainContent')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('admin/song/manage')}}">Manage Songs</a> <i class="fa fa-angle-right"></i> <span style="text-align: center;color: green;">{{Session::get('message')}}</span></li>
    </ol>
    <div class="validation-system">

        <div class="validation-form">
            <!---->

            <form method="post" action="{{url('admin/song/save')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="vali-form">
                    <div class="col-md-6 form-group1">
                        <label class="control-label">Song Title</label>
                        <input type="text" placeholder="Song Title" required="" name="name">
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
                <div class="col-md-12 form-group2 group-mail">
                    <label class="control-label">Type</label>
                    <select type="text" name="type">
                        @if(isset($types))
                        @foreach($types as $type)
                        <option value="{{$type->type}}">{{$type->type}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="clearfix"> </div>
                <div class="col-md-12 form-group1 group-mail">
                    <label class="control-label">Singer Name </label>
                    <input type="text" placeholder="Singer Name" required="" name="singer">
                </div>
                <div class="clearfix"> </div>
                <div class="clearfix"> </div>
                <div class="col-md-12 form-group2 group-mail">
                    <label class="control-label">Language</label>
                    <select type="text" name="language">
                        @if(isset($languages))
                            @foreach($languages as $language)
                                <option value="{{$language->language}}">{{$language->language}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-md-12 form-group1 group-mail">
                    <label class="control-label">Url</label>
                    <input type="text" placeholder="Song Url" required="" name="link">
                </div>
                <div class="clearfix"> </div>
                <div class="col-md-12 form-group1 group-mail">
                    <label class="control-label">Picture</label>
                    <input type="file" name="picture">
                </div>
                <div class="clearfix"> </div>

                <div class="col-md-12 form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </div>
                <div class="clearfix"> </div>
            </form>

            <!---->
        </div>

    </div>
    <!--//grid-->
    @endsection
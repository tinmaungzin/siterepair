@extends('layouts.app')
@section('content')
    <div class="columns">
        @include('postSideBar')
        <div class="column is-8">
            @if(Session::has('msg'))
                <p class="is-success">{{ Session::get('msg') }}</p>
            @endif
            <h4>Add an announcement</h4>
            <form class="form" action="{{ route('announcements.insert') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="field">
                    <label class="label">Content</label>
                    <div class="control">
                        <textarea class="textarea" name="content" required></textarea>
                        @if($errors->has('content'))
                            <p class="help is-danger">{{ $errors->first('content') }}</p>
                        @endif
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <input type="submit" name="submit" value="Submit">
                    </div>
                    <div class="control">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection @section('style')
    <style type="text/css">
        .is-8 {
            display: block;
            margin: 0 auto;
        }
    </style>
@endsection

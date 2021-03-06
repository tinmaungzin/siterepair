@extends('layouts.app') @section('content')
    <div class="columns">
        @include('depSideBar')
        <div class="column">
            <div class="content">
                <h3>Create a department</h3>
                @if(Session::has('msg'))
                    <p class="is-success">{{ Session::get('msg') }}</p>
                @endif
                <form action="{{ route('admin.insertDep') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input type="text" name="name" class="input" required> @if($errors->has('name'))
                                <p class="help is-danger">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Department Image</label>
                        <div class="control">
                            <input type="file" name="img_dir">
                            @if($errors->has('img_dir'))
                                <p class="help is-danger">{{ $errors->first('img_dir') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">History</label>
                        <div class="control">
                            <textarea name="history" class="textarea" required></textarea> @if($errors->has('history'))
                                <p class="help is-danger">{{ $errors->first('history') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Mission</label>
                        <div class="control">
                            <textarea name="mission" class="textarea" required></textarea> @if($errors->has('mission'))
                                <p class="help is-danger">{{ $errors->first('mission') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Vision</label>
                        <div class="control">
                            <textarea name="vision" class="textarea" required></textarea>@if($errors->has('vision'))
                                <p class="help is-danger">{{ $errors->first('vision') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Department type</label>
                        <div class="control">
                            <label class="radio">
                                <input type="radio" name="type" value="main" checked>
                                Main department
                            </label>
                            <label class="radio">
                                <input type="radio" name="type" value="support">
                                Supporting department
                            </label>
                            @if($errors->has('vision'))
                                <p class="help is-danger">{{ $errors->first('type') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <input type="submit" name="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
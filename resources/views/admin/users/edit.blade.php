@extends('admin.layouts.admin')

@section('content')
    <h1 class="pt-5">Change user information</h1>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-body">
                        <form method="post" action="/admin/users/{{ $user->id }}/update">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email">NickName</label>
                                <input type="text" class="form-control" id="name" value="{{ $user->username }}" placeholder="Email" name="name" required>
                            </div>
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Update profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

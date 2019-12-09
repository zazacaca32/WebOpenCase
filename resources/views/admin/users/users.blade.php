@extends('admin.layouts.admin')

@section('content')
    <h1 class="pt-5">Verified users</h1>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Avatar</th>
                                <th scope="col">NickName</th>
                                <th scope="col">Register</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($active as $key => $actives)
                            <tr>
                                <td class="package"><img src="{!! $actives->avatar !!}" alt=""></td>
                                <td>{{ $actives->username }}</td>
                                <td>{{ $actives->created_at }}</td>
                                <td><a href="/admin/users/{{ $actives->id }}" class="btn btn-primary"><i class="fas fa-user-edit"></i></a>
                                        <div class="btn-group">
                                            <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-times"></i></button>
                                            <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <li>
                                                    <a class="dropdown-item" href="/admin/users/{{ $actives->id }}/delete">Delete user</a>
                                                </li>
                                            </ul>
                                        </div></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.layouts.admin')

@section('content')
    <h1 class="pt-5">Active users</h1>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Package</th>
                                <th scope="col">NickName</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Timer</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($active as $key => $actives)
                            <tr>
                                <th class="package"><img src="{!! $package[$key] !!}" alt=""></th>
                                <td>{{ $actives->name }}</td>
                                <td>{{ $actives->email }}</td>
                                <td>{{ $actives->ks_pass }}</td>
                                <td class="timer">{!! $timer[$key] !!}</td>
                                <td><a href="/ametka/users/{{ $actives->id }}" class="btn btn-primary"><i class="fas fa-user-edit"></i></a>
                                        <div class="btn-group">
                                            <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-anchor"></i></button>
                                            <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <li>
                                                    <a class="dropdown-item" href="/ametka/users/{{ $actives->id }}/package/user">Expire access</a>
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

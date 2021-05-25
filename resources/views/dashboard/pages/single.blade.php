@extends('dashboard.layout.main')
@section('content')

@isset($data)

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Rejected Refugee</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Position</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key=>$value)
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$value->nawy_baxewkar}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->position}}</td>
                            <td> <a href="{{asset('storage/'.$value->image)}}" target="_blank">
                                    <div class="email-list-item">
                                        <div class="email-author">
                                            <img src="{{ asset('storage/'.$value->image)}}" alt="">
                                            <span class="author-name"></span>
                                            <span class="email-date">{{$value->created_at}}</span>
                                        </div>
                                    </div>
                                </a></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <center><a class="dropdown-item"
                                                    href="{{route('ourteam.edit',$value->id)}}">Edit</a></center>
                                        </li>
                                        <li>
                                            <form action="{{route('ourteam.destroy',$value->id)}}" method="post">@csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item">Delete</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endisset

@endsection
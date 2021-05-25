@extends('dashboard.layout.main')
@section('content')
@if (isset($single))
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Update Location</h5>
                @include('dashboard.layout.message')
                <form action="{{route('ouroffice.update',$single->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" value="{{$single->title}}" class="form-control"
                                id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputFullname" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" value="{{$single->address}}" class="form-control"
                                id="inputFullname">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Position" class="col-sm-2 col-form-label">Google Map Link</label>
                        <div class="col-sm-10">
                            <input type="text" name="link_googl_map" value="{{$single->link_googl_map}}"
                                class="form-control" id="Position">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" class="form-control" id="Image">
                        </div>
                    </div>
                    <div>
                        <button style="float: left" type="submit" class="btn btn-primary">Update</button>
                        <img src="{{ asset('storage/'.$single->image)}}" style="float: right;height:200px"
                            class="post-image" alt="">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@else
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add New Location</h5>
                @include('dashboard.layout.message')
                <form action="{{route('ouroffice.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputFullname" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" class="form-control" id="inputFullname">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Position" class="col-sm-2 col-form-label">Link Google Map</label>
                        <div class="col-sm-10">
                            <input type="text" name="link_googl_map" class="form-control" id="Position">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" class="form-control" id="Image">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
@isset($data)

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Our Team</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Address</th>
                            <th scope="col">Link Google Map</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key=>$value)
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$value->title}}</td>
                            <td>{{$value->address}}</td>
                            <td><a class="btn btn-primary" href="{{$value->link_googl_map}}" target="_blank">Link</a>
                            </td>
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
                                                    href="{{route('ouroffice.edit',$value->id)}}">Edit</a></center>
                                        </li>
                                        <li>
                                            <form action="{{route('ouroffice.destroy',$value->id)}}" method="post">@csrf
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
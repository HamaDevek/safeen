@extends('dashboard.layout.main')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Update User</h5>
                @include('dashboard.layout.message')
                <form action="{{route('user.update',$single->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" value="{{$single->email}}"
                                id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputFullname" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{$single->name}}" class="form-control"
                                id="inputFullname">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="cerre" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="text" name="password" class="form-control" id="cerre">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="cece" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input type="text" name="password_confirmation" class="form-control" id="cece">
                        </div>
                    </div>
                    <div>
                        <button style="float: left" type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
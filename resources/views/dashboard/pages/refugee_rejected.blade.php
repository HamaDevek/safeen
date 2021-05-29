@extends('dashboard.layout.main')
@section('content')

@isset($data)
@include('dashboard.layout.message')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Rejected Refugee</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Naw</th>
                            <th scope="col">Nawy Xezan</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Xawankary ?</th>
                            <th scope="col">shweny nishtaje esa</th>
                            <th scope="col">shweny nishtaje peshu</th>
                            <th scope="col">zhmaray mnall</th>
                            <th scope="col">baryxezan</th>
                            <th scope="col">din</th>
                            <th scope="col">pisha</th>
                            <th scope="col">zanyarytr</th>
                            <th scope="col">Nawxo</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key=>$value)
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$value->nawy_baxewkar}}</td>
                            <td>{{$value->nawy_xezan}}</td>
                            <td>{{$value->talafon}}</td>
                            <td><a href="#"
                                    class="btn {{$value->xawankary ? 'btn-primary' :'btn-danger' }}  ">{{$value->xawankary ? 'Yes' : 'No'}}</a>
                            </td>
                            <td>{{$value->shweny_nishtaje_esa}}</td>
                            <td>{{$value->shweny_nishtaje_peshu}}</td>
                            <td>{{$value->zh_mnal}}</td>
                            <td>{{$value->baryxezan}}</td>
                            <td>{{$value->din}}</td>
                            <td>{{$value->pisha}}</td>
                            <td>
                                <div style="max-width: 150px">{{$value->zanyarytr}}</div>
                            </td>
                            <td><a href="#"
                                    class="btn {{$value->nawxo ? 'btn-primary' :'btn-danger' }}  ">{{$value->nawxo ? 'Internal' : 'External'}}</a>
                            </td>

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @if (!is_null($value->document))
                                        <li>
                                            <center><a class="dropdown-item" target="_blank"
                                                    href="{{asset('storage/'.$value->document)}}">Document</a></center>
                                        </li>
                                        @endif

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
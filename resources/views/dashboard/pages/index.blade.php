@extends('dashboard.layout.main')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add New Refugee</h5>
                @include('dashboard.layout.message')
                <form action="{{route('datasend')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="s-12">
                        <input class="form-control" name="nawy_baxewkar" placeholder="Your fullname"
                            title="Your fullname" type="text" />
                    </div>
                    <br>
                    <div class="s-12">
                        <input class="form-control" name="nawy_xezan" placeholder="Your hasbund" title="Your hasbund"
                            type="text" />
                    </div>
                    <br>

                    <div class="s-12">
                        <input class="form-control" name="talafon" placeholder="Your phone" title="Your phone"
                            type="number" />
                    </div>
                    <br>

                    <div class="s-12">
                        <input class="form-control" name="shweny_nishtaje_esa" placeholder="Your place now"
                            title="Your place now" type="text" />
                    </div>
                    <br>

                    <div class="s-12">
                        <input class="form-control" name="shweny_nishtaje_peshu" placeholder="Your place before"
                            title="Your place before" type="text" />
                    </div>
                    <br>

                    <div class="s-12">
                        <input class="form-control" name="zh_mnal" placeholder="Your children number"
                            title="Your children number" type="number" />
                    </div>
                    <br>

                    <label>Family State</label>
                    <div class="s-12">
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="baryxezan" id="baryxezan1" value="XRAP"
                                checked>
                            <label class="form-check-label" for="baryxezan1">
                                Bad
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="baryxezan" id="baryxezan2"
                                value="MAMNAWAND">
                            <label class="form-check-label" for="baryxezan2">
                                Medium
                            </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="baryxezan" id="baryxezan3" value="BASH">
                            <label class="form-check-label" for="baryxezan3">
                                Good
                            </label>
                        </div>
                    </div>
                    <br>

                    <div class="s-12">
                        <input class="form-control" name="pisha" placeholder="which work do you know ?"
                            title="which work do you know ?" type="text" />
                    </div>
                    <br>

                    <div class="s-12">
                        <input class="form-control" name="din" placeholder="Religion" title="Religion" type="text" />
                    </div>
                    <br>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="defaultCheck1" name="xawankary">
                        <label class="form-check-label" for="defaultCheck1">
                            Do you have work ?
                        </label>
                    </div>
                    <br>

                    <div class="s-12">
                        <textarea class="form-control" name="zanyarytr" placeholder="Extra Information"
                            rows="3"></textarea>
                    </div>
                    <br>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="nawxo" name="nawxo">
                        <label class="form-check-label" for="nawxo">
                            Internal Refugee ?
                        </label>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Head Family ID</label>
                        <input class="form-control" type="file" class="form-control-file" id="exampleFormControlFile1"
                            name="document">
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
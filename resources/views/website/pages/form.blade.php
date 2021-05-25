@extends('website.layout.app')
@section('content')
<article>
    <header class="section background-dark">
        <div class="line">
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Contact To Refugee</h1>
            <p class="margin-bottom-0 text-size-16">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde,
                rerum minus atque ipsa voluptas illo quam fuga nihil repudiandae, ab eum blanditiis, libero beatae
                voluptatum tempora aspernatur accusamus obcaecati explicabo?</p>
        </div>
    </header>
    <div class="section background-white">

        <div class="line">
            <div class="margin">
                <div class="s-12 m-12 l-12">
                    <h2 class="margin-bottom-10">Request To Refugee</h2>

                    @if(session('success'))
                    <h1 style="color: green"> {{session('success')}}</h1>
                    @endif
                    @if(count($errors) > 0)
                    @foreach ($errors->all() as $error)
                    <h1 style="color: red"> {{$error}}</h1>
                    @endforeach
                    @endif
                    @if(session('error'))
                    <h1 style="color: red"> {{session('error')}}</h1>
                    @endif
                    <form class="customform" method="post" enctype="multipart/form-data" action="{{route('datasend')}}">
                        @csrf
                        <div class="line">
                            <div class="margin">
                                <div class="s-12 m-12 l-6">
                                    <input name="nawy_baxewkar" placeholder="Your fullname" title="Your fullname"
                                        type="text" />
                                </div>
                                <div class="s-12 m-12 l-6">
                                    <input name="nawy_xezan" placeholder="Your hasbund" title="Your hasbund"
                                        type="text" />
                                </div>
                            </div>
                        </div>
                        <div class="s-12">
                            <input name="talafon" placeholder="Your phone" title="Your phone" type="number" />
                        </div>
                        <div class="s-12">
                            <input name="shweny_nishtaje_esa" placeholder="Your place now" title="Your place now"
                                type="text" />
                        </div>
                        <div class="s-12">
                            <input name="shweny_nishtaje_peshu" placeholder="Your place before"
                                title="Your place before" type="text" />
                        </div>
                        <div class="s-12">
                            <input name="zh_mnal" placeholder="Your children number" title="Your children number"
                                type="number" />
                        </div>
                        <label>Family State</label>
                        <div class="s-12">
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="baryxezan" id="baryxezan1"
                                    value="XRAP" checked>
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
                                <input class="form-check-input" type="radio" name="baryxezan" id="baryxezan3"
                                    value="BASH">
                                <label class="form-check-label" for="baryxezan3">
                                    Good
                                </label>
                            </div>
                        </div>
                        <div class="s-12">
                            <input name="pisha" placeholder="which work do you know ?" title="which work do you know ?"
                                type="text" />
                        </div>
                        <div class="s-12">
                            <input name="din" placeholder="Religion" title="Religion" type="text" />
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="xawankary">
                            <label class="form-check-label" for="defaultCheck1">
                                Do you have work ?
                            </label>
                        </div>
                        <div class="s-12">
                            <textarea name="zanyarytr" placeholder="Extra Information" rows="3"></textarea>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="nawxo" name="nawxo">
                            <label class="form-check-label" for="nawxo">
                                Internal Refugee ?
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Document</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="document">
                        </div>
                        <div class="s-12"><button class="s-12 submit-form button background-primary text-white"
                                type="submit">Send</button></div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</article>

@endsection
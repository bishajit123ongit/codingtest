@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

<div class="col-md-2">
<div class="card">
<div style="color:#ffffff;    background: rgb(29 25 90);" class="card-header"><i style="font-size: 22px;margin-right: 10px;" class="fa fa-bars" aria-hidden="true"></i>Bulky.ly</div>

<div style="background: rgb(29 25 90);" class="card-body">
<a  style="color:#ffffff; font-size: 13px;" href="{{route('buffer.post')}}" class=""><i style="margin-right:3px;"class="fa fa-user" aria-hidden="true"></i>Admin</a>
</div>
<div style="background: rgb(29 25 90);" class="card-body">
<a style="color:#ffffff; font-size: 13px;" href="" class=""><i  style="margin-right:3px;" class="fa fa-home" aria-hidden="true"></i>Home</a>
</div>

<div style="background: rgb(29 25 90);" class="card-body">
<a style="color:#ffffff; font-size: 13px;" href="" class=""><i style="margin-right:3px;"class="fa fa-user" aria-hidden="true"></i>Content Upload</a>
</div>

<div style="background: rgb(29 25 90);" class="card-body">
<a style="color:#ffffff;font-size: 13px;" href="" class=""><i style="margin-right:3px;" class="fa fa-file-pdf-o" aria-hidden="true"></i>Content Curation</a>
</div>

<div style="background: rgb(29 25 90);" class="card-body">
<a style="color:#ffffff; font-size: 13px;" href="" class=""><i style="margin-right:3px;" class="fa fa-wifi" aria-hidden="true"></i>Rss automation</a>
</div>

<div style="background: rgb(29 25 90);" class="card-body">
<a style="color:#ffffff; font-size: 13px;" href="" class=""><i style="margin-right:3px;" class="fa fa-line-chart" aria-hidden="true"></i>Analytics</a>
</div>

<div style="background: rgb(29 25 90);" class="card-body">
<a style="color:#ffffff; font-size: 13px;" href="" class=""><i style="margin-right:3px;" class="fa fa-calendar-check-o" aria-hidden="true"></i>Calender</a>
</div>

<div style="background: rgb(29 25 90);" class="card-body">
<a style="color:#ffffff; font-size: 13px;" href="" class=""><i style="margin-right:3px;" class="fa fa-user" aria-hidden="true"></i>Social account</a>
</div>

<div style="background: rgb(29 25 90);" class="card-body">
<a style="color:#ffffff; font-size: 13px;" href="" class=""><i style="margin-right:3px;" class="fa fa-cog" aria-hidden="true"></i>Settings</a>
</div>

<div style="background: rgb(29 25 90);" class="card-body">
<a style="color:#ffffff; font-size: 13px;" href="" class=""><i style="margin-right:3px;" class="fa fa-history" aria-hidden="true"></i>History</a>
</div>


</div>
</div>

        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

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
                <div class="card-header">
				<input type="text" name="date" id="date" class="form-control" value="">
                </div>

                <div class="card-body">
                <table class="table">
                <thead>
                    <th>Group Name</th>
                    <th>Group Type</th>
                    <th>Account Name</th>
                    <th>Post text</th>
                    <th>Time</th>
                </thead> 
                <tbody>
		  	@foreach($bufferPostings as $bufferPosting)
		  	<tr>
		  		<td>{{$bufferPosting->socialPostGroup->name}}</td>
		  		<td>{{$bufferPosting->socialPostGroup->type}}</td>
		  		<td>{{$bufferPosting->user->name}}</td>
                <td>{{$bufferPosting->socialPost->text}}</td>
                <td>{{$bufferPosting->sent_at}}</td>
		  	</tr>
		  	@endforeach
		  </tbody>
			
		</table>
        {{$bufferPostings->links()}}
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
flatpickr('#date',{
		enableTime:true,
		enableSeconds:true
	});
</script>

@endsection

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection



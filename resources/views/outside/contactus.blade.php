@extends('layouts.outside')

@section('title')
    Dashboard
@endsection


@section('content')
<div class="col-md-12">
	<h4>Contact Us</h4>
	<div class="row">
		<div class="col-md-4 contents">
			<br>
			<p><label class="content-title">Address :</label> Tarlac, Tarlac, Philippines</p>
			<p><label class="content-title">Contact Number :</label> +63999 102 3214</p>
			<p><label class="content-title">Email :</label> jasonviado@yopmail.com</p>
		</div>
		<div class="col-md-8 contents">
			<form>
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Subject</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<label>Message</label>
					<textarea class="messageArea form-control"></textarea>
				</div>
				<div class="form-group">
					<button type="button" class="btn btn-primary">Submit</button>
				</div>				
			</form>		
		</div>
	</div>
</div>
@endsection
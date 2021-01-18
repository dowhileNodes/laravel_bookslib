@extends('layout')
@section('content')
@if(Session::get('status'))
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="container">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card card-signin my-5">
				<div class="card-body">
					<form method="post" action="list">
						<legend>
							<h3>Login</h3>
						</legend>
						<br>
							@csrf
							<div class="form-group">
								<label>Username</label>
								<input type="username" name="username" class="form-control" placeholder="Enter username" required>
								</div>
								<div class="form-group">
									<label>Password</label>
									<div class="input-group">
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-lock"/>
										</span>
										<input type="password" class="form-control" name="password" id="password" placeholder="Password" required data-toggle="popover" data-content="Enter Password...">
										</div>
									</div>
									<div class="form-group">
										<label>Captcha:</label>
										<div class="input-group">
											<img src=".jpg" height="50px" width="150px"/>
											<input type="password" class="form-control" name="password" id="password" placeholder="Enter captcha here" required data-toggle="popover" data-content="Enter Password...">
											</div>
										</div>
										<button type="submit" class="btn btn-primary btn-block">Login</button>
									</form>
									<div class="container">
									<div class="row">
										<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
											<a href="forgot-password">Forgot Password</a>
										</div>
										<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
											<a href="\showRegisterView">Signup</a>
										</div>
										<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
											<a href="\showUserList">Show available users (for Debug)</a>
										</div>
									</div>
									</div>
									<br>
									</div>
								</div>
							</div>
						</div>
					</div>
					@stop
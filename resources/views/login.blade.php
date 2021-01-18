@extends('layout')
@section('content')

@if(Session::get('status'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{Session::get('status')}}<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Navbar</span>

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
											<a href="\showRegisterView">Sign-up</a>
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
	</nav>
					@stop
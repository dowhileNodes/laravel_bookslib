@extends('layout')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card card-signin my-5">
				<div class="card-body">
					<legend>
						<h1>Signup</h1>
					</legend>
					<form method="post" action="doRegister">
						@csrf
						<div class="form-group">
							<label>Fullname</label>
							<input type="text" name="fullname" class="form-control" placeholder="Enter firstname">
							</div>
									<div class="form-group">
										<label>Email</label>
										<input type="email" name="email" class="form-control" placeholder="Enter email">
											<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
										</div>
										<div class="form-group">
											<label>Password</label>
											<div class="input-group">
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-lock"/>
												</span>
												<input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required data-toggle="popover" title="Password Strength" data-content="Enter a password...">
												</div>
											</div>
											<div class="form-group">
												<label>Confirm Password</label>
												<div class="input-group">
													<span class="input-group-addon">
														<span class="glyphicon glyphicon-lock"/>
													</span>
													<input type="password" class="form-control" name="password" id="password" placeholder="Confirm your Password" required data-toggle="popover" title="Password Strength" data-content="Confirm your Password...">
													</div>
												</div>
												<div class="form-group">
													<label>Captcha:</label>
													<div class="input-group">
														<img src=".jpg" height="50px" width="150px"/>
														<input type="password" class="form-control" name="password" id="password" placeholder="Enter captcha here" required data-toggle="popover" data-content="Enter Password...">
														</div>
													</div>
													<button type="submit" class="btn btn-primary btn-block">Register</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							@stop
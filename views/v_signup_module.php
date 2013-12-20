		<!-- begin sign up module form -->
		<form method="POST" class="form-horizontal" action="/users/p_signup" role="form">
			<h3>Sign up</h3>

			<!-- sign up with alias, email, and password -->
			<div class="form-group">
				<label class="col-sm-3 control-label">Alias</label>
				<div class="col-sm-9">
					<input type="text" name="alias" class="form-control" placeholder="alias name" required>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label">Email</label>
				<div class="col-sm-9">
					<input type="email" name="email" class="form-control" placeholder="your@email.com" required>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label">Pass</label>
				<div class="col-sm-9">
					<input type="password" name="password" class="form-control" placeholder="password" required>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button class="btn btn-success pull-right" type="submit">Sign up</button>
				</div>
			</div>
		</form>
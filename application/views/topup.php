
        <form action="<?= BASE_URL();?>users/login/login" method="post">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Username ..">
						<small id="username" class="form-text text-muted">Input your username.</small>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">remember me</label>
					</div>
					<!-- <button type="submit" class="btn btn-primary">Login</button> -->
				</div>
					<button type="submit" class="btn btn-primary">Login</button>
</form>


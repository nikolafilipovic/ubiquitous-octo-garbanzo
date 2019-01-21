<!-- MODALS -->
<div id="save-search-modal" class="modal fade share-saved-homes" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content width-override">
			<div class="multi-step">
				<div class="step" id="initial">
					<div class="modal-header">
						<h5 class="modal-title">Sign in or register to save search</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="close-link" aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<div class="has-mail-left">
								<input type="text" class="form-control" placeholder="Email">
								<a href="#" class="btn btn-block step-toggler" data-triger="#login">Submit <i class="far fa-arrow-right"></i></a>
							</div>
						</div>
						<hr>
						<div class="sphere-container">
							<p>Or connect with</p>
							<a class="sphere sphere--fb">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a class="sphere sphere--twitt">
								<i class="fab fa-twitter"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="step" id="login">
					<div class="modal-header">
						<h5 class="modal-title">Welcome back!</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="close-link" aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<div class="has-mail-left">
								<input type="text" class="form-control" placeholder="Email" value="knownuser@coolcompany.com">
							</div>
							<div class="spacer-1rem"></div>
							<div class="has-key-left">
								<input type="password" class="form-control" placeholder="Password" value="">
							</div>
							<a href="#" class="btn btn-block step-toggler" data-triger="#signup">Sign in <i class="far fa-arrow-right"></i></a>
							<a href="#" class="help-link">Forgot password?</a>
						</div>
						<hr>
						<div class="sphere-container">
							<p>Or connect with</p>
							<a class="sphere sphere--fb">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a class="sphere sphere--twitt">
								<i class="fab fa-twitter"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="step" id="signup">
					<div class="modal-header">
						<h5 class="modal-title">Create a password</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="close-link" aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<p class="message">Create a password to access your account any time.</p>
							<div class="spacer-1rem"></div>
							<div class="has-key-left">
								<input type="password" class="form-control" placeholder="Password" value="">
							</div>
							<a href="#" class="btn btn-block step-toggler" data-triger="#done">Submit <i class="far fa-arrow-right"></i></a>
							<a href="#" class="help-link">Terms of use</a>
						</div>
					</div>
				</div>
				<div class="step" id="done">
					<div class="modal-header">
						<h5 class="modal-title">Your search was saved!</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="close-link" aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<p class="message">You can modify your saved searches in My Account.</p>
							<a href="#" class="btn btn-block step-toggler" data-triger="#done">Go to My Account <i class="far fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
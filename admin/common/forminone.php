<main class="content">
	<div class="container-fluid p-0">
		<h1 class="h3 mb-3">Form Layouts</h1>
		<div class="row">
			<div class="col-12 col-xl-6">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Basic form</h5>
					</div>
					<div class="card-body">
						<form>
							<fieldset class="mb-3">
								<div class="mb-3 p-3">
									<label class="form-label">Email address</label>
									<input type="email" class="form-control" placeholder="Email">
								</div>
								<div class="mb-3">
									<label class="form-label">Textarea</label>
									<textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
								</div>
								<div class="mb-3">
									<label class="form-label w-100">File input</label>
									<input type="file">
									<small class="form-text text-muted">Example block-level help text here.</small>
								</div>
								<div class="mb-3 col-md-4">
									<label class="form-label" for="inputState">State</label>
									<select id="inputState" class="form-control">
										<option selected>Choose...</option>
										<option>...</option>
									</select>
								</div>
								<div class="mb-3 col-md-2">
									<label class="form-label" for="inputZip">Zip</label>
									<input type="text" class="form-control" id="inputZip">
								</div>

								<div class="row">
									<label class="col-form-label col-sm-2 text-sm-right pt-sm-0">Radios</label>
									<div class="col-sm-10">
										<label class="form-check">
											<input name="radio-3" type="radio" class="form-check-input" checked>
											<span class="form-check-label">Default radio</span>
										</label>
										<label class="form-check">
											<input name="radio-3" type="radio" class="form-check-input">
											<span class="form-check-label">Second default radio</span>
										</label>
										<label class="form-check">
											<input name="radio-3" type="radio" class="form-check-input" disabled>
											<span class="form-check-label">Disabled radio</span>
										</label>
										<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right pt-sm-0">Checkbox</label>
											<div class="col-sm-10">
												<label class="form-check m-0">
													<input type="checkbox" class="form-check-input">
													<span class="form-check-label">Check me out</span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="mb-3 row">
									<div class="col-sm-10 ml-sm-auto">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</div>

							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</fieldset>


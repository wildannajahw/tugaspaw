@extends('layouts.app')

@section('content')
<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6" style="border-right: solid 2px; border-color:#bf9b30">
							<h3>CUSTOM SIZE</h3>

							<h4>CREATE YOUR SIZE</h4>
							<form action="">
								<div class="form-group d-flex justify-content-center">
									<input type="text" class="form-control" id="weight" placeholder="enter your weight" name="weight">
								</div>
							</form>
							<form action="">
									<div class="form-group d-flex justify-content-center">
										<input type="text" class="form-control" id="height" placeholder="enter your height" name="height">
									</div>
								</form>

							<button type="button" class="btn" id="create">Create</button>

						</div>
						<div class="col-sm-6">
							<h3 style="margin-top:1%">RESULT</h3>
							<h4>Weight</h4>
							<div class="mx-auto" style="border: solid 1px;width:300px;height:38px;margin-left: 10%;border-radius: 5px;margin-bottom: 1%;">
							<div id="result1" style="font-size: 200%;padding-top: 3.5px;">
								</div>
								</div>
								<h4>Height</h4>
								<div class="mx-auto" style="border: solid 1px;width:300px;height:38px;margin-left: 10%;border-radius: 5px; ">
										<div id="result2" style="font-size: 200%;padding-top: 3.5px;">
											</div>
											</div>
								<button class="btn" id="reset" name="reset">Reset</button>
								<button class="btn" id="save" name="save">Save Your Size</button>
							</div>
						</div>
					</div>
				</div>
@endsection

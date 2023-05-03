<div class="row">
	<div class="col-sm-6">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col mt-0">
						<h5 class="card-title">Loan Applications</h5>
					</div>
					<div class="col-auto">
						<div class="stat text-primary">
							<i class="fas fa-money"></i>
						</div>
					</div>
				</div>
				<h4 class="mt-1 mb-3" style="font-weight: bold;">
					<a style="color:black" href="{{route('loanapplication',encrypt(Auth::user()->employee_id))}}">Apply</a>
				</h4>
				<div class="mb-0">
					<span class="text-success">Get Started<i class="mdi mdi-arrow-bottom-right">Apply for a Loan</i></span>
					<span class="text-muted">Loan applications</span>
				</div>
			</div>
		</div>
		
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col mt-0">
						<h5 class="card-title">Application History</h5>
					</div>
					<div class="col-auto">
						<div class="stat text-primary">
							<i class="fas fa-credit-card"></i>
						</div>
					</div>
				</div>
				<h4 class="mt-1 mb-3" style="font-weight: bold;">
					<a style="color:black" href="{{'collectionsView'}}">Settle Balance</a>
				</h4>
				<div class="mb-0">
					<span class="text-success"><i class="mdi mdi-arrow-bottom-right"></i>pay online </span>
					<span class="text-muted">via mobile money</span>
				</div>
			</div>
		</div>
		
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col mt-0">
						<h5 class="card-title">payments history</h5>
					</div>
					<div class="col-auto">
						<div class="stat text-primary">
							<i class="fas fa-money-check-alt"></i>
						</div>
					</div>
				</div>
				<h4 class="mt-1 mb-3" style="font-weight: bold;">
					<a style="color:black" href="{{route('checkpayments')}}">Payments History</a>
				</h4>
				
				<div class="mb-0">
					<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i>check your ballance</span>
					<span class="text-muted">& payment history</span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-xl-6 col-xxl-7">
		<div class="card flex-fill w-100">
			<div class="card-header">
				<h5 class="card-title mb-0">Your Borrowing Records</h5>
			</div>
			<div class="card-body py-3">
				<div class="chart chart-sm">
					<canvas id="chartjs-dashboard-line"></

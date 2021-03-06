@extends('layouts.app')
@section('meta_title') Dashboard @endsection
@section('page_bread_scrum')
	Dashboard
@endsection
@section('content')

	<!-- Main content -->
	<div class="content-wrapper">

		<!-- Content area -->
		<div class="content">
			<!-- Dashboard content -->
			
			<!-- Quick stats boxes -->
			<div class="row">
				<div class="col-lg-3">

					<!-- Members online -->
					<div class="card bg-teal-400">
						<div class="card-body">
							<div class="d-flex">
								<h3 class="font-weight-semibold mb-0">0</h3>
								<span class="badge bg-teal-800 badge-pill align-self-center ml-auto">0%</span>
		                	</div>
		                	
		                	<div>
								Members online
								<div class="font-size-sm opacity-75">0 avg</div>
							</div>
						</div>

						<div class="container-fluid">
							<div id="members-online"></div>
						</div>
					</div>
					<!-- /members online -->

				</div>

				<div class="col-lg-3">

					<!-- Current server load -->
					<div class="card bg-pink-400">
						<div class="card-body">
							<div class="d-flex">
								<h3 class="font-weight-semibold mb-0">0%</h3>
								{{-- <div class="list-icons ml-auto">
			                		<div class="list-icons-item dropdown">
			                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
											<a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
											<a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
											<a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
										</div>
			                		</div>
		                		</div> --}}
		                	</div>
		                	
		                	<div>
								Current server load
								<div class="font-size-sm opacity-75">0% avg</div>
							</div>
						</div>

						<div id="server-load"></div>
					</div>
					<!-- /current server load -->

				</div>

				<div class="col-lg-3">

					<!-- Today's revenue -->
					<div class="card bg-blue-400">
						<div class="card-body">
							<div class="d-flex">
								<h3 class="font-weight-semibold mb-0">$0</h3>
								<div class="list-icons ml-auto">
			                		<a class="list-icons-item" data-action="reload"></a>
			                	</div>
		                	</div>
		                	
		                	<div>
								Today's revenue
								<div class="font-size-sm opacity-75">$0 avg</div>
							</div>
						</div>

						<div id="today-revenue"></div>
					</div>
					<!-- /today's revenue -->

				</div>

				<div class="col-sm-6 col-xl-3">

					<!-- Basic area chart -->
					<div class="card">
						<div class="card-body">
							Current Date and Time
							<div class="d-flex">
								<h3 class="font-weight-semibold mb-0" id="currentTime"></h3>
		                	</div>

		                	<div>
								<div class="text-muted font-size-sm">{{date("M d, Y")}}</div>
							</div>
						</div>

						<div id="chart_area_basic"><svg width="261.25" height="50"><g transform="translate(0,0)"></g></svg></div>
					</div>
					<!-- /basic area chart -->

				</div>

			</div>
			<!-- /quick stats boxes -->

			<div class="row">
				<div class="col-xl-8">

					<!-- Marketing campaigns -->
					{{--<div class="card">
						<div class="card-header header-elements-sm-inline">
							<h6 class="card-title">Marketing campaigns</h6>
							<div class="header-elements">
								<span class="badge bg-success badge-pill">28 active</span>
								<div class="list-icons ml-3">
			                		<div class="list-icons-item dropdown">
			                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
										<div class="dropdown-menu">
											<a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
											<a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
											<a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
										</div>
			                		</div>
			                	</div>
		                	</div>
						</div>

						<div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
							<div class="d-flex align-items-center mb-3 mb-sm-0">
								<div id="campaigns-donut"></div>
								<div class="ml-3">
									<h5 class="font-weight-semibold mb-0">38,289 <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (+16.2%)</span></h5>
									<span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">May 12, 12:30 am</span>
								</div>
							</div>

							<div class="d-flex align-items-center mb-3 mb-sm-0">
								<div id="campaign-status-pie"></div>
								<div class="ml-3">
									<h5 class="font-weight-semibold mb-0">2,458 <span class="text-danger font-size-sm font-weight-normal"><i class="icon-arrow-down12"></i> (-4.9%)</span></h5>
									<span class="badge badge-mark border-danger mr-1"></span> <span class="text-muted">Jun 4, 4:00 am</span>
								</div>
							</div>

							<div>
								<a href="#" class="btn bg-indigo-300"><i class="icon-statistics mr-2"></i> View report</a>
							</div>
						</div>

						<div class="table-responsive">
							<table class="table text-nowrap">
								<thead>
									<tr>
										<th>Campaign</th>
										<th>Client</th>
										<th>Changes</th>
										<th>Budget</th>
										<th>Status</th>
										<th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
									</tr>
								</thead>
								<tbody>
									<tr class="table-active table-border-double">
										<td colspan="5">Today</td>
										<td class="text-right">
											<span class="progress-meter" id="today-progress" data-progress="30"></span>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="mr-3">
													<a href="#">
														<img src="{{ asset('images/brands/facebook.png" class="rounded-circle" width="32" height="32" alt="">
													</a>
												</div>
												<div>
													<a href="#" class="text-default font-weight-semibold">Facebook</a>
													<div class="text-muted font-size-sm">
														<span class="badge badge-mark border-blue mr-1"></span>
														02:00 - 03:00
													</div>
												</div>
											</div>
										</td>
										<td><span class="text-muted">Mintlime</span></td>
										<td><span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 2.43%</span></td>
										<td><h6 class="font-weight-semibold mb-0">$5,489</h6></td>
										<td><span class="badge bg-blue">Active</span></td>
										<td class="text-center">
											<div class="list-icons">
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
														<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
														<a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="mr-3">
													<a href="#">
														<img src="{{ asset('images/brands/youtube.png" class="rounded-circle" width="32" height="32" alt="">
													</a>
												</div>
												<div>
													<a href="#" class="text-default font-weight-semibold">Youtube videos</a>
													<div class="text-muted font-size-sm">
														<span class="badge badge-mark border-danger mr-1"></span>
														13:00 - 14:00
													</div>
												</div>
											</div>
										</td>
										<td><span class="text-muted">CDsoft</span></td>
										<td><span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 3.12%</span></td>
										<td><h6 class="font-weight-semibold mb-0">$2,592</h6></td>
										<td><span class="badge bg-danger">Closed</span></td>
										<td class="text-center">
											<div class="list-icons">
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
														<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
														<a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="mr-3">
													<a href="#">
														<img src="{{ asset('images/brands/spotify.png" class="rounded-circle" width="32" height="32" alt="">
													</a>
												</div>
												<div>
													<a href="#" class="text-default font-weight-semibold">Spotify ads</a>
													<div class="text-muted font-size-sm">
														<span class="badge badge-mark border-grey-400 mr-1"></span>
														10:00 - 11:00
													</div>
												</div>
											</div>
										</td>
										<td><span class="text-muted">Diligence</span></td>
										<td><span class="text-danger"><i class="icon-stats-decline2 mr-2"></i> - 8.02%</span></td>
										<td><h6 class="font-weight-semibold mb-0">$1,268</h6></td>
										<td><span class="badge bg-grey-400">On hold</span></td>
										<td class="text-center">
											<div class="list-icons">
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
														<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
														<a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="mr-3">
													<a href="#">
														<img src="{{ asset('images/brands/twitter.png" class="rounded-circle" width="32" height="32" alt="">
													</a>
												</div>
												<div>
													<a href="#" class="text-default font-weight-semibold">Twitter ads</a>
													<div class="text-muted font-size-sm">
														<span class="badge badge-mark border-grey-400 mr-1"></span>
														04:00 - 05:00
													</div>
												</div>
											</div>
										</td>
										<td><span class="text-muted">Deluxe</span></td>
										<td><span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 2.78%</span></td>
										<td><h6 class="font-weight-semibold mb-0">$7,467</h6></td>
										<td><span class="badge bg-grey-400">On hold</span></td>
										<td class="text-center">
											<div class="list-icons">
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
														<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
														<a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr class="table-active table-border-double">
										<td colspan="5">Yesterday</td>
										<td class="text-right">
											<span class="progress-meter" id="yesterday-progress" data-progress="65"></span>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="mr-3">
													<a href="#">
														<img src="{{ asset('images/brands/bing.png" class="rounded-circle" width="32" height="32" alt="">
													</a>
												</div>
												<div>
													<a href="#" class="text-default font-weight-semibold">Bing campaign</a>
													<div class="text-muted font-size-sm">
														<span class="badge badge-mark border-success mr-1"></span>
														15:00 - 16:00
													</div>
												</div>
											</div>
										</td>
										<td><span class="text-muted">Metrics</span></td>
										<td><span class="text-danger"><i class="icon-stats-decline2 mr-2"></i> - 5.78%</span></td>
										<td><h6 class="font-weight-semibold mb-0">$970</h6></td>
										<td><span class="badge bg-success-400">Pending</span></td>
										<td class="text-center">
											<div class="list-icons">
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
														<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
														<a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="mr-3">
													<a href="#">
														<img src="{{ asset('images/brands/amazon.png" class="rounded-circle" width="32" height="32" alt="">
													</a>
												</div>
												<div>
													<a href="#" class="text-default font-weight-semibold">Amazon ads</a>
													<div class="text-muted font-size-sm">
														<span class="badge badge-mark border-danger mr-1"></span>
														18:00 - 19:00
													</div>
												</div>
											</div>
										</td>
										<td><span class="text-muted">Blueish</span></td>
										<td><span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 6.79%</span></td>
										<td><h6 class="font-weight-semibold mb-0">$1,540</h6></td>
										<td><span class="badge bg-blue">Active</span></td>
										<td class="text-center">
											<div class="list-icons">
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
														<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
														<a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="mr-3">
													<a href="#">
														<img src="{{ asset('images/brands/dribbble.png" class="rounded-circle" width="32" height="32" alt="">
													</a>
												</div>
												<div>
													<a href="#" class="text-default font-weight-semibold">Dribbble ads</a>
													<div class="text-muted font-size-sm">
														<span class="badge badge-mark border-blue mr-1"></span>
														20:00 - 21:00
													</div>
												</div>
											</div>
										</td>
										<td><span class="text-muted">Teamable</span></td>
										<td><span class="text-danger"><i class="icon-stats-decline2 mr-2"></i> 9.83%</span></td>
										<td><h6 class="font-weight-semibold mb-0">$8,350</h6></td>
										<td><span class="badge bg-danger">Closed</span></td>
										<td class="text-center">
											<div class="list-icons">
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
														<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
														<a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
													</div>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div> --}}
					<!-- Marketing campaigns -->

					<!-- Support tickets -->
					<div class="card">
						<div class="card-header header-elements-sm-inline">
							<h6 class="card-title">Support tickets</h6>
							<div class="header-elements">
								<a class="text-default daterange-ranges font-weight-semibold cursor-pointer dropdown-toggle">
									<i class="icon-calendar3 mr-2"></i>
									<span></span>
								</a>
		                	</div>
						</div>

						<div class="card-body d-md-flex align-items-md-center justify-content-md-between flex-md-wrap">
							<div class="d-flex align-items-center mb-3 mb-md-0">
								<div id="tickets-status"></div>
								<div class="ml-3">
									<h5 class="font-weight-semibold mb-0">0 <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (0%)</span></h5>
									<span class="badge badge-mark border-success mr-1"></span> <span class="text-muted"> 00:00:00 </span>
								</div>
							</div>

							<div class="d-flex align-items-center mb-3 mb-md-0">
								<a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
									<i class="icon-alarm-add"></i>
								</a>
								<div class="ml-3">
									<h5 class="font-weight-semibold mb-0">0</h5>
									<span class="text-muted">total tickets</span>
								</div>
							</div>

							<div class="d-flex align-items-center mb-3 mb-md-0">
								<a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
									<i class="icon-spinner11"></i>
								</a>
								<div class="ml-3">
									<h5 class="font-weight-semibold mb-0">00:00:00</h5>
									<span class="text-muted">response time</span>
								</div>
							</div>

							<div>
								<a href="#" class="btn bg-teal-400"><i class="icon-statistics mr-2"></i> Report</a>
							</div>
						</div>

						<div class="table-responsive">
							<table class="table text-nowrap">
								<thead>
									<tr>
										<th style="width: 50px">Due</th>
										<th style="width: 300px;">User</th>
										<th>Description</th>
										<th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
									</tr>
								</thead>
								<tbody>
									<tr class="table-active table-border-double">
										<td colspan="3">Active tickets</td>
										<td class="text-right">
											<span class="badge bg-blue badge-pill">1</span>
										</td>
									</tr>

									<tr>
										<td class="text-center">
											<h6 class="mb-0">12</h6>
											<div class="font-size-sm text-muted line-height-1">hours</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="mr-3">
													<a href="#" class="btn bg-teal-400 rounded-round btn-icon btn-sm">
														<span class="letter-icon"></span>
													</a>
												</div>
												<div>
													<a href="#" class="text-default font-weight-semibold letter-icon-title">Annabelle Doney</a>
													<div class="text-muted font-size-sm"><span class="badge badge-mark border-blue mr-1"></span> Active</div>
												</div>
											</div>
										</td>
										<td>
											<a href="#" class="text-default">
												<div class="font-weight-semibold">[#1183] Workaround for OS X selects printing bug</div>
												<span class="text-muted">Chrome fixed the bug several versions ago, thus rendering this...</span>
											</a>
										</td>
										<td class="text-center">
											<div class="list-icons">
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
														<a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-checkmark3 text-success"></i> Resolve issue</a>
														<a href="#" class="dropdown-item"><i class="icon-cross2 text-danger"></i> Close issue</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr class="table-active table-border-double">
										<td colspan="3">Resolved tickets</td>
										<td class="text-right">
											<span class="badge bg-success badge-pill">1</span>
										</td>
									</tr>

									<tr>
										<td class="text-center">
											<i class="icon-checkmark3 text-success"></i>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="mr-3">
													<a href="#" class="btn bg-success-400 rounded-round btn-icon btn-sm">
														<span class="letter-icon"></span>
													</a>
												</div>
												<div>
													<a href="#" class="text-default font-weight-semibold letter-icon-title">Alan Macedo</a>
													<div class="text-muted font-size-sm"><span class="badge badge-mark border-success mr-1"></span> Resolved</div>
												</div>
											</div>
										</td>
										<td>
											<a href="#" class="text-default">
												<div>[#1046] Avoid some unnecessary HTML string</div>
												<span class="text-muted">Rather than building a string of HTML and then parsing it...</span>
											</a>
										</td>
										<td class="text-center">
											<div class="list-icons">
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
														<a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-plus3 text-blue"></i> Unresolve issue</a>
														<a href="#" class="dropdown-item"><i class="icon-cross2 text-danger"></i> Close issue</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr class="table-active table-border-double">
										<td colspan="3">Closed tickets</td>
										<td class="text-right">
											<span class="badge bg-danger badge-pill">1</span>
										</td>
									</tr>

									<tr>
										<td class="text-center">
											<i class="icon-cross2 text-danger-400"></i>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="mr-3">
													<a href="#">
														<img src="{{ asset('images/placeholders/placeholder.jpg') }}" class="rounded-circle" width="32" height="32" alt="">
													</a>
												</div>
												<div>
													<a href="#" class="text-default font-weight-semibold">Mitchell Sitkin</a>
													<div class="text-muted font-size-sm"><span class="badge badge-mark border-danger mr-1"></span> Closed</div>
												</div>
											</div>
										</td>
										<td>
											<a href="#" class="text-default">
												<div>[#1040] Account for static form controls in form group</div>
												<span class="text-muted">Resizes control label's font-size and account for the standard...</span>
											</a>
										</td>
										<td class="text-center">
											<div class="list-icons">
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
														<a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-plus3 text-blue"></i> Unresolve issue</a>
														<a href="#" class="dropdown-item"><i class="icon-spinner11 text-grey"></i> Reopen issue</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
					<!-- /support tickets -->


					<!-- Latest posts -->
					<div class="card">
						<div class="card-header header-elements-inline">
							<h6 class="card-title">Latest posts</h6>
							<div class="header-elements">
								<div class="list-icons">
			                		<a class="list-icons-item" data-action="collapse"></a>
			                		<a class="list-icons-item" data-action="reload"></a>
			                		<a class="list-icons-item" data-action="remove"></a>
			                	</div>
		                	</div>
	                	</div>

						<div class="card-body pb-0">
							<div class="row">
								<div class="col-xl-6">
									<div class="media flex-column flex-sm-row mt-0 mb-3">
			        					<div class="mr-sm-3 mb-2 mb-sm-0">
											<div class="card-img-actions">
												<a href="#">
													<img src="{{ asset('images/placeholders/placeholder.jpg') }}" class="img-fluid img-preview rounded" alt="">
													<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
												</a>
											</div>
										</div>

			        					<div class="media-body">
											<h6 class="media-title"><a href="#">It allowance prevailed</a></h6>
				                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
				                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video tutorials</li>
				                    		</ul>
											Alteration literature to or an sympathize mr imprudence. Of is ferrars subject enjoyed...
										</div>
									</div>
								</div>

								<div class="col-xl-6">
									<div class="media flex-column flex-sm-row mt-0 mb-3">
			        					<div class="mr-sm-3 mb-2 mb-sm-0">
											<div class="card-img-actions">
												<a href="#">
													<img src="{{ asset('images/placeholders/placeholder.jpg') }}" class="img-fluid img-preview rounded" alt="">
													<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
												</a>
											</div>
										</div>

			        					<div class="media-body">
											<h6 class="media-title"><a href="#">Too carriage attended</a></h6>
				                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
				                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> FAQ section</li>
				                    		</ul>
											Marianne or husbands if at stronger ye. Considered is as middletons uncommonly...
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /latest posts -->

				</div>

				<div class="col-xl-4">

					<!-- Progress counters -->
					<div class="row">

						<div class="col-md-12">

							<!-- Simple text stats with icons -->
							<div class="card card-body">
								<div class="row text-center">
									<div class="col-4">
										<p><i class="icon-users2 icon-2x d-inline-block text-info"></i></p>
										<h5 class="font-weight-semibold mb-0">0</h5>
										<span class="text-muted font-size-sm">Total Contacts</span>
									</div>

									<div class="col-4">
										<p><i class="icon-point-up icon-2x d-inline-block text-warning"></i></p>
										<h5 class="font-weight-semibold mb-0">0</h5>
										<span class="text-muted font-size-sm">Total Tickets</span>
									</div>

									<div class="col-4">
										<p><i class="icon-cash3 icon-2x d-inline-block text-success"></i></p>
										<h5 class="font-weight-semibold mb-0">0</h5>
										<span class="text-muted font-size-sm">Total Assets</span>
									</div>
								</div>
							</div>
							<!--/ Simple text stats with icons -->

						</div>

						<div class="col-sm-6">

							<!-- Available hours -->
							<div class="card text-center">
								<div class="card-body">

				                	<!-- Progress counter -->
									<div class="svg-center position-relative" id="hours-available-progress"></div>
									<!-- /progress counter -->


									<!-- Bars -->
									<div id="hours-available-bars"></div>
									<!-- /bars -->

								</div>
							</div>
							<!-- /available hours -->

						</div>

						<div class="col-sm-6">

							<!-- Productivity goal -->
							<div class="card text-center">
								<div class="card-body">

									<!-- Progress counter -->
									<div class="svg-center position-relative" id="goal-progress"></div>
									<!-- /progress counter -->

									<!-- Bars -->
									<div id="goal-bars"></div>
									<!-- /bars -->

								</div>
							</div>
							<!-- /productivity goal -->

						</div>
					</div>
					<!-- /progress counters -->


					<!-- Daily sales -->
					<div class="card">
						<div class="card-header header-elements-inline">
							<h6 class="card-title">Daily sales stats</h6>
							<div class="header-elements">
								<span class="font-weight-bold text-danger-600 ml-2">$0</span>
								<div class="list-icons ml-3">
			                		<div class="list-icons-item dropdown">
			                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
										<div class="dropdown-menu">
											<a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
											<a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
											<a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
										</div>
			                		</div>
			                	</div>
							</div>
						</div>

						<div class="card-body">
							<div class="chart" id="sales-heatmap"></div>
						</div>

						<div class="table-responsive">
							<table class="table text-nowrap">
								<thead>
									<tr>
										<th class="w-100">Application</th>
										<th>Time</th>
										<th>Price</th>
									</tr>
								</thead>
								<tbsody>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="mr-3">
													<a href="#" class="btn bg-indigo-400 rounded-round btn-icon btn-sm">
														<span class="letter-icon"></span>
													</a>
												</div>
												<div>
													<a href="#" class="text-default font-weight-semibold letter-icon-title">Delta application</a>
													<div class="text-muted font-size-sm"><i class="icon-lifebuoy font-size-sm mr-1"></i> Support</div>
												</div>
											</div>
										</td>
										<td>
											<span class="text-muted font-size-sm">00:00</span>
										</td>
										<td>
											<h6 class="font-weight-semibold mb-0">$0</h6>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- /daily sales -->


					<!-- My messages -->
					<div class="card">
						<div class="card-header header-elements-inline">
							<h6 class="card-title">My messages</h6>
							<div class="header-elements">
								<span><i class="icon-history text-warning mr-2"></i> 00:00:00</span>
								<span class="badge bg-success align-self-start ml-3">N/A</span>
							</div>
						</div>

						<!-- Numbers -->
						<div class="card-body py-0">
							<div class="row text-center">
								<div class="col-4">
									<div class="mb-3">
										<h5 class="font-weight-semibold mb-0">0</h5>
										<span class="text-muted font-size-sm">this week</span>
									</div>
								</div>

								<div class="col-4">
									<div class="mb-3">
										<h5 class="font-weight-semibold mb-0">0</h5>
										<span class="text-muted font-size-sm">this month</span>
									</div>
								</div>

								<div class="col-4">
									<div class="mb-3">
										<h5 class="font-weight-semibold mb-0">0</h5>
										<span class="text-muted font-size-sm">all messages</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /numbers -->


						<!-- Area chart -->
						<div id="messages-stats"></div>
						<!-- /area chart -->


						<!-- Tabs -->
	                	<ul class="nav nav-tabs nav-tabs-solid nav-justified bg-indigo-400 border-x-0 border-bottom-0 border-top-indigo-300 mb-0">
							<li class="nav-item">
								<a href="#messages-tue" class="nav-link font-size-sm text-uppercase active" data-toggle="tab">
									Tuesday
								</a>
							</li>

							<li class="nav-item">
								<a href="#messages-mon" class="nav-link font-size-sm text-uppercase" data-toggle="tab">
									Monday
								</a>
							</li>

							<li class="nav-item">
								<a href="#messages-fri" class="nav-link font-size-sm text-uppercase" data-toggle="tab">
									Friday
								</a>
							</li>
						</ul>
						<!-- /tabs -->


						<!-- Tabs content -->
						<div class="tab-content card-body">
							<div class="tab-pane active fade show" id="messages-tue">
								<ul class="media-list">
									<li class="media">
										<div class="mr-3 position-relative">
											<img src="{{ asset('images/placeholders/placeholder.jpg') }}" class="rounded-circle" width="36" height="36" alt="">
											<span class="badge bg-danger-400 badge-pill badge-float border-2 border-white">8</span>
										</div>

										<div class="media-body">
											<div class="d-flex justify-content-between">
												<a href="#">James Alexander</a>
												<span class="font-size-sm text-muted">14:58</span>
											</div>

											The constitutionally inventoried precariously...
										</div>
									</li>
								</ul>
							</div>

							<div class="tab-pane fade" id="messages-mon">
								<ul class="media-list">
									<li class="media">
										<div class="mr-3">
											<img src="{{ asset('images/placeholders/placeholder.jpg') }}" class="rounded-circle" width="36" height="36" alt="">
										</div>

										<div class="media-body">
											<div class="d-flex justify-content-between">
												<a href="#">Isak Temes</a>
												<span class="font-size-sm text-muted">Tue, 19:58</span>
											</div>

											Reasonable palpably rankly expressly grimy...
										</div>
									</li>
								</ul>
							</div>

							<div class="tab-pane fade" id="messages-fri">
								<ul class="media-list">
									<li class="media">
										<div class="mr-3">
											<img src="{{ asset('images/placeholders/placeholder.jpg') }}" class="rounded-circle" width="36" height="36" alt="">
										</div>

										<div class="media-body">
											<div class="d-flex justify-content-between">
												<a href="#">Owen Stretch</a>
												<span class="font-size-sm text-muted">Mon, 18:12</span>
											</div>

											Tardy rattlesnake seal raptly earthworm...
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- /tabs content -->

					</div>
					<!-- /my messages -->


					<!-- Daily financials -->
					<div class="card">
						<div class="card-header header-elements-inline">
							<h6 class="card-title">Daily financials</h6>
							<div class="header-elements">
								<span class="badge bg-danger-400 badge-pill">0</span>
							</div>
						</div>

						<div class="card-body">
							<div class="chart mb-3" id="bullets"></div>

							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-pink text-pink rounded-round border-2 btn-icon"><i class="icon-statistics"></i></a>
									</div>
									
									<div class="media-body">
										Stats for July, 6: <span class="font-weight-semibold">1938</span> orders, <span class="font-weight-semibold text-danger">$4220</span> revenue
										<div class="text-muted">2 hours ago</div>
									</div>

									<div class="ml-3 align-self-center">
										<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-checkmark3"></i></a>
									</div>
									
									<div class="media-body">
										Invoices <a href="#">#4732</a> and <a href="#">#4734</a> have been paid
										<div class="text-muted">Dec 18, 18:36</div>
									</div>

									<div class="ml-3 align-self-center">
										<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-alignment-unalign"></i></a>
									</div>
									
									<div class="media-body">
										Affiliate commission for June has been paid
										<div class="text-muted">36 minutes ago</div>
									</div>

									<div class="ml-3 align-self-center">
										<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon"><i class="icon-spinner11"></i></a>
									</div>

									<div class="media-body">
										Order <a href="#">#37745</a> from July, 1st has been refunded
										<div class="text-muted">4 minutes ago</div>
									</div>

									<div class="ml-3 align-self-center">
										<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon"><i class="icon-redo2"></i></a>
									</div>
									
									<div class="media-body">
										Invoice <a href="#">#4769</a> has been sent to <a href="#">Robert Smith</a>
										<div class="text-muted">Dec 12, 05:46</div>
									</div>

									<div class="ml-3 align-self-center">
										<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- /daily financials -->

				</div>
			</div>
			<!-- /dashboard content -->

		</div>
		<!-- /content area -->

	</div>
	<!-- /main content -->

@endsection

@section('js')
<script>
function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("currentTime").innerText = time;
    document.getElementById("currentTime").textContent = time;
    
    setTimeout(showTime, 1000);
}

showTime();
</script>
@endsection
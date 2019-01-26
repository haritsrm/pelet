@extends('layouts.layout')

@section('content')
                <div class="row">
                    <!-- Detached sidebar -->
                    <div class="sidebar-detached col-md-3">
                        <div class="sidebar sidebar-default sidebar-separate">
                            <div class="sidebar-content">
                                <!-- User details -->
                                <div class="content-group">
									<div class="panel-body bg-indigo-400 border-radius-top text-center" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png); background-size: contain;">
										<div class="content-group-sm">
											<h6 class="text-semibold no-margin-bottom">
												{{ Auth::user()->name }}
											</h6>

											<span class="display-block">Head of UX</span>
										</div>

										<a href="#" class="display-inline-block content-group-sm">
											<img src="/images/profile/placeholder.jpg" class="img-circle img-responsive" alt="" style="width: 110px; height: 110px;">
										</a>

										<ul class="list-inline list-inline-condensed no-margin-bottom">
											<li><a href="#" class="btn bg-indigo btn-rounded btn-icon"><i class="icon-google-drive"></i></a></li>
											<li><a href="#" class="btn bg-indigo btn-rounded btn-icon"><i class="icon-twitter"></i></a></li>
											<li><a href="#" class="btn bg-indigo btn-rounded btn-icon"><i class="icon-github"></i></a></li>
										</ul>
									</div>

									<div class="panel no-border-top no-border-radius-top">
										<ul class="navigation">
											<li>
												<a href="{{ route('logout') }}" onclick="event.preventDefault();
																				document.getElementById('logout-form').submit();">
													<i class="icon-switch2"></i> Logout
												</a>

												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													@csrf
												</form>
											</li>
										</ul>
									</div>
								</div>
								<!-- /user details -->
                            </div>
                        </div>
                    </div>
                    <!-- /detached sidebar -->

					<!-- Detached content -->
					<div class="container-detached col-md-9">

									<!-- Account settings -->
									<div class="panel panel-flat border-top-info panel-collapsed">
										<div class="panel-heading">
											<h6 class="panel-title">Pengaturan Akun</h6>
											<div class="heading-elements">
												<ul class="icons-list">
							                		<li><a data-action="collapse"></a></li>
							                		<li><a data-action="reload"></a></li>
							                		<li><a data-action="close"></a></li>
							                	</ul>
						                	</div>
										</div>

										<div class="panel-body">
											<form action="#">
												<div class="form-group">
													<div class="row">
														<div class="col-md-6">
															<label>Username</label>
															<input type="text" value="Kopyov" readonly="readonly" class="form-control">
														</div>

														<div class="col-md-6">
															<label>Current password</label>
															<input type="password" value="password" readonly="readonly" class="form-control">
														</div>
													</div>
												</div>

												<div class="form-group">
													<div class="row">
														<div class="col-md-6">
															<label>New password</label>
															<input type="password" placeholder="Enter new password" class="form-control">
														</div>

														<div class="col-md-6">
															<label>Repeat password</label>
															<input type="password" placeholder="Repeat new password" class="form-control">
														</div>
													</div>
												</div>

												<div class="form-group">
													<div class="row">
														<div class="col-md-6">
															<label>Profile visibility</label>

															<div class="radio">
																<label>
																	<input type="radio" name="visibility" class="styled" checked="checked">
																	Visible to everyone
																</label>
															</div>

															<div class="radio">
																<label>
																	<input type="radio" name="visibility" class="styled">
																	Visible to friends only
																</label>
															</div>

															<div class="radio">
																<label>
																	<input type="radio" name="visibility" class="styled">
																	Visible to my connections only
																</label>
															</div>

															<div class="radio">
																<label>
																	<input type="radio" name="visibility" class="styled">
																	Visible to my colleagues only
																</label>
															</div>
														</div>

														<div class="col-md-6">
															<label>Notifications</label>

															<div class="checkbox">
																<label>
																	<input type="checkbox" class="styled" checked="checked">
																	Password expiration notification
																</label>
															</div>

															<div class="checkbox">
																<label>
																	<input type="checkbox" class="styled" checked="checked">
																	New message notification
																</label>
															</div>

															<div class="checkbox">
																<label>
																	<input type="checkbox" class="styled" checked="checked">
																	New task notification
																</label>
															</div>

															<div class="checkbox">
																<label>
																	<input type="checkbox" class="styled">
																	New contact request notification
																</label>
															</div>
														</div>
													</div>
												</div>

						                        <div class="text-right">
						                        	<button type="submit" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>
						                        </div>
					                        </form>
										</div>
									</div>
									<!-- /account settings -->

                                    <!-- Profile info -->
									<div class="panel panel-flat border-top-success">
										<div class="panel-heading">
											<h6 class="panel-title">Informasi Profil</h6>
											<div class="heading-elements">
												<ul class="icons-list">
							                		<li><a data-action="collapse"></a></li>
							                		<li><a data-action="reload"></a></li>
							                		<li><a data-action="close"></a></li>
							                	</ul>
						                	</div>
										</div>

										<div class="panel-body">
											<form action="#">
												<div class="form-group">
													<div class="row">
														<div class="col-md-6">
															<label>Username</label>
															<input type="text" value="Eugene" class="form-control">
														</div>
														<div class="col-md-6">
															<label>Full name</label>
															<input type="text" value="Kopyov" class="form-control">
														</div>
													</div>
												</div>

												<div class="form-group">
													<div class="row">
														<div class="col-md-6">
															<label>Address line 1</label>
															<input type="text" value="Ring street 12" class="form-control">
														</div>
														<div class="col-md-6">
															<label>Address line 2</label>
															<input type="text" value="building D, flat #67" class="form-control">
														</div>
													</div>
												</div>

												<div class="form-group">
													<div class="row">
														<div class="col-md-4">
															<label>City</label>
															<input type="text" value="Munich" class="form-control">
														</div>
														<div class="col-md-4">
															<label>State/Province</label>
															<input type="text" value="Bayern" class="form-control">
														</div>
														<div class="col-md-4">
															<label>ZIP code</label>
															<input type="text" value="1031" class="form-control">
														</div>
													</div>
												</div>

												<div class="form-group">
													<div class="row">
														<div class="col-md-6">
															<label>Email</label>
															<input type="text" readonly="readonly" value="eugene@kopyov.com" class="form-control">
														</div>
														<div class="col-md-6">
								                            <label>Your country</label>
								                            <select class="select">
								                                <option value="germany" selected="selected">Germany</option> 
								                                <option value="france">France</option> 
								                                <option value="spain">Spain</option> 
								                                <option value="netherlands">Netherlands</option> 
								                                <option value="other">...</option> 
								                                <option value="uk">United Kingdom</option> 
								                            </select>
														</div>
													</div>
												</div>

						                        <div class="form-group">
						                        	<div class="row">
						                        		<div class="col-md-6">
															<label>Phone #</label>
															<input type="text" value="+99-99-9999-9999" class="form-control">
															<span class="help-block">+99-99-9999-9999</span>
						                        		</div>

														<div class="col-md-6">
															<label class="display-block">Upload profile image</label>
						                                    <input type="file" class="file-styled">
						                                    <span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
														</div>
						                        	</div>
						                        </div>

						                        <div class="text-right">
						                        	<button type="submit" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>
						                        </div>
											</form>
										</div>
									</div>
									<!-- /profile info -->

                    </div>
					<!-- /Detached content -->
                
@endsection
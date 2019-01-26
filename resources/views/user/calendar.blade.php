@extends('layouts.layout')

@section('content')
                    <!-- External events -->
                    <div class="panel panel-flat">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="content-group" id="external-events">
										<h6>Draggable Events</h6>
										<div class="fc-events-container content-group">
											<div class="fc-event" data-color="#546E7A">Sauna and stuff</div>
											<div class="fc-event" data-color="#26A69A">Lunch time</div>
											<div class="fc-event" data-color="#546E7A">Meeting with Fred</div>
											<div class="fc-event" data-color="#FF7043">Shopping</div>
											<div class="fc-event" data-color="#5C6BC0">Restaurant</div>
											<div class="fc-event">Basketball</div>
											<div class="fc-event">Daily routine</div>
										</div>

										<div class="checkbox checkbox-right checkbox-switchery switchery-xs text-center">
											<label>
												<input type="checkbox" class="switch" checked="checked" id="drop-remove">
												Remove after drop
											</label>
										</div>
									</div>
								</div>

								<div class="col-md-9">
									<div class="fullcalendar-external"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- /external events -->
@endsection
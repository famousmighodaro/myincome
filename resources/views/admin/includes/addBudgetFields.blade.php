				<div class="form-group">
					<label for="budgetName">Budget name</label>
					<input type="text" class="form-control" id="budgetName" aria-describedby="IncomeTitle" placeholder="Title of an income" name="name" requirted="true" value="{{old('name')}}">
				</div>

				<div class="form-group">
					<label for="totalAmount"></label>
					<input type="number" step="0.01" min="1" max="10000000" class="form-control" id="totalAmount" aria-describedby="IncomeTitle" placeholder="Amount" name="total_amount"  value="{{old('total_amount')}}">
				</div>
				
				<div class="row">
					<div class="col-lg-2">
						<div class="form-group">
							<label for="incomeType">Budget type</label>
						   
								<select class="form-control" id="budgetAndIncomeType" name="budget_type_id" >
									<option value="" >Select budget type</option>
										@foreach($budgetTypes as $budgetType)
											
											<option value=
												"{{$budgetType->id}}" 
												{{
													(strtolower(old('budget_type'))==strtolower($budgetType->id) 
													)?
													'selected':''
												}}>{{$budgetType->name}}
											</option>
											
										@endforeach
								</select>
						</div>
					</div>
					<div class="col-lg-1">

						<div class="form-group paid">
							<label>Paid</label>
							<label class="switch">
							  <input type="checkbox" name="paid">
							  <span class="slider round"></span>
							</label>
						</div>
					</div>
						<div class="col-lg-2 dates">
							<div class="orm-group" data-date-format="mm-dd-yyyy">
								 <label for="startDate">State date</label>
								<input type="text"  class="form-control" placeholder="yyyy-mm-dd" autocomplete="off" id="startDate" name="start_date" value="{{old('start_date')}}" />
								 <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							</div>
						</div>
					<div class="col-lg-2 dates">

						<div class="form-group" data-date-format="mm-dd-yyyy">
							 <label for="endDate">End date</label>
							<input type="text" width="200" class="form-control" placeholder="yyyy-mm-dd" autocomplete="off" id="endDate" name="end_date" value="{{old('end_date')}}"/>
							 <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
						</div>
					</div>
					<div class="col-lg-2 receivedMonth dates">
						<div class="orm-group" data-date-format="mm-dd-yyyy">
							 <label for="paymentMonth">Payment month</label >
								<select class="form-control" id="paymentMonth" name="payment_month">
									<option value="">Select month</option>
									@foreach($months as  $month)
										<option value="{{$month->id}}" {{(strtolower(old('received_month'))==strtolower($month->id))? 'selected':''}}>{{$month->name}}</option>
									@endforeach

								</select>
						</div>
					</div>

					<div class="col-lg-2 dates">
						<div class="orm-group" data-date-format="mm-dd-yyyy">
							 <label for="paymentDate">Payment day</label>
								<select class="form-control" id="paymentDays" name="payment_day">
									<option value="">select day</option>
									@foreach($days as $day)
										<option value="{{$day->id}}" {{(strtolower(old('received_day'))==($day->id))?'selected':''}}>{{$day->id}}</option>
									@endforeach
								</select>
						</div>
					</div>
				</div>

		  <input type="submit" name="" value="add budget">

		  @if($errors->any())
	<div class="notifucation is-danger" style="color: white; background-color: red; height:auto;">
		@foreach($errors->all() as $error)
			<li>{{ $error }} </li>
		@endforeach
	</div>
@endif
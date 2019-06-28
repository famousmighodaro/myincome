		        <div class="form-group">
		            <label for="budgetName">Budget name</label>
		            <input type="text" class="form-control" id="budgetName" aria-describedby="IncomeTitle" placeholder="Title of an income" name="name" requirted="true" value="{{old('amount', $budget->name ?? null)}}">
		        </div>

		        <div class="form-group">
		            <label for="totalAmount"></label>
		            <input type="number" step="0.01" min="1" max="10000000" class="form-control" id="totalAmount" aria-describedby="IncomeTitle" placeholder="Amount" name="total_amount"  value="{{old('total_amount', $budget->total_amount ?? null)}}">
		        </div>
		        
				<div class="form-group">
				    <label for="totalAmount">Budget category</label>
				    <select class="form-control" name="budget_category_id">
				    	@foreach($budgetCategories as $category)
				    		<option value="{{$category->id}}"  {{
				    											(strtolower(old('budget_category_id', $budget->budget_category_id))==strtolower($category->id) 
				    														)?'selected':''
				    											}}>
				    											{{$category->name}}

				    		</option>
				    	@endforeach
				    </select >
				</div>
		        <div class="row">
		        	<div class="col-lg-3">
		        		<div class="form-group">
				            <label for="incomeType">Budget type</label>
				           
				                <select class="form-control" id="budgetAndIncomeType" name="budget_type_id" >
				                	<option value="" >Select budget type</option>
								    	@foreach($budgetTypes as $index => $budgetType)
								    		
								    		<option value=
								    			"{{$budgetType->id}}" 
								    			{{
								    				(strtolower(old('budget_type'))==strtolower($budgetType->id) 
								    				|| strtolower($budget->budget_type_id)==strtolower($budgetType->id))?
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
		        			<input type="text"  class="form-control" placeholder="yyyy-mm-dd" autocomplete="off" id="startDate" name="start_date" value="{{old('start_date', $budget->start_date ?? null)}}" />
		        			 <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		        		</div>
		        	</div>
		        	<div class="col-lg-2 dates">
		        		<div class="form-group" data-date-format="mm-dd-yyyy">
		        			 <label for="endDate">End date</label>
		        			<input type="text" width="200" class="form-control" placeholder="yyyy-mm-dd" autocomplete="off" id="endDate" name="end_date" value="{{old('end_date', $budget->end_date ?? null)}}"/>
		        			 <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		        		</div>
		        	</div>
		        	<div class="col-lg-2 receivedMonth dates">
		        		<div class="orm-group" data-date-format="mm-dd-yyyy">
		        			 <label for="paymentMonth">Payment month</label >
		        				<select class="form-control" id="paymentMonth" name="payment_month">
		        					<option value="">Select month</option>
		        					@foreach($months as $month)
		        						<option value="{{$month->id}}" {{(strtolower(old('payment_month'))==strtolower($month->id) || strtolower($budget->payment_month)==strtolower($month->id))? 'selected':''}}>{{$month->name}}</option>
		        					@endforeach

		        				</select>
		        		</div>
		        	</div>

		        	<div class="col-lg-2 dates">
		        		<div class="orm-group" data-date-format="mm-dd-yyyy">
		        			 <label for="paymentDate">Payment day</label>
		        				<select class="form-control" id="paymentDays" name="payment_day">
		        					<option value="">select day</option>
		        					@foreach($days as  $day)
		        						<option value="{{$day->id}}" {{(old('payment_day')==($day->id)|| ($budget->payment_day)==strtolower($day->id))?'selected':''}}>{{$day->days_no}}</option>
		        					@endforeach
		        				</select>
		        		</div>
		        	</div>
		        </div>
		        <div class="form-group">
                    <label for="categories">saving categories</label>
                     <select name="category_id" class="form-control">
                        <option value="">Select category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" {{(old('category')==$category->id)?'selected':''}}>{{$category->name}}</option>
                            @endforeach
                     </select>
                </div>

		        <div class="form-group">
		            <label for="savingTitle">Income name</label>
		            <input type="text" class="form-control" id="savingTitle" aria-describedby="SavingTitle" placeholder="Title of an saving" name="name" requirted="true" value="{{old('name', $saving->name ?? null)}}">
		        </div>

		        <div class="form-group">
		            <label for="amount">Total amount</label>
		            <input type="number" step="0.01" min="1" max="10000000" class="form-control" id="amount" aria-describedby="IncomeTitle" placeholder="Amount" name="amount" required="true" value="{{old('amount', $saving->amount ?? null)}}">
		        </div>
		        <div class="row">
		        	<div class="col-lg-2">
		        		<div class="form-group">
				            <label for="budgetIncomeAndSavingType">Saving type</label>
				           
				                <select class="form-control" id="budgetIncomeAndSavingType" name="saving_type" >
				                	<option value="" >Select saving type</option>
								    	@foreach($savingTypes as $savingType)
								    		
								    		<option value=
								    			"{{$savingType->id}}" 
								    			{{
								    				(strtolower(old('saving_type'))==strtolower($savingType->id) 
								    				|| strtolower($saving->income_type)==strtolower($savingType->id))?
								    				'selected':''
								    			}}>{{$savingType->name}}
								    		</option>

								    	@endforeach
							    </select>
				        </div>
		        	</div>
		        	<div class="col-lg-2 ">
			        	<div class="form-group">
				            <label for="intervalSavingAmount">Interval saving amount</label>
				            <input type="number" step="0.01" min="1" max="10000000" class="form-control" id="intervalSavingAmount" aria-describedby="IncomeTitle" placeholder="Amount" name="interval_saving_amount" required="true" value="{{old('interval_saving_amount', $saving->interval_saving_amount ?? null)}}">
			        	</div>
			        </div>
			        <div class="col-lg-2 ">
			        	<div class="form-group">
				            <label for="savingTargetAmount">Saving target amount</label>
				            <input type="number" step="0.01" min="1" max="10000000" class="form-control" id="savingTargetAmount" aria-describedby="" placeholder="Amount" name="saving_target_amount" required="true" value="{{old('saving_target_amount', $saving->saving_target_amount ?? null)}}">
			        	</div>
			        </div>
		        	<div class="col-lg-2 dates">
		        		<div class="orm-group" data-date-format="mm-dd-yyyy">
		        			 <label for="startDate">State date</label>
		        			<input type="text"  class="form-control" placeholder="yyyy-mm-dd" autocomplete="off" id="startDate" name="start_date" value="{{old('start_date', $saving->start_date ?? null)}}" />
		        			 <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		        		</div>
		        	</div>
		        	<div class="col-lg-2 dates">

		        		<div class="form-group" data-date-format="mm-dd-yyyy">
		        			 <label for="endDate">End date</label>
		        			<input type="text" width="200" class="form-control" placeholder="yyyy-mm-dd" autocomplete="off" id="endDate" name="end_date" value="{{old('end_date', $saving->end_date ?? null)}}"/>
		        			 <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		        		</div>
		        	</div>
		        	<div class="col-lg-2 receivedMonth dates">
		        		<div class="orm-group" data-date-format="mm-dd-yyyy">
		        			 <label for="paymentMonth">Recieved month</label >
		        				<select class="form-control" id="paymentMonth" name="payment_month">
		        					<option value="">Select month</option>
		        					@foreach($months as $index => $month)
		        						<option value="{{$index}}" {{(strtolower(old('payment_month'))==strtolower($index) || strtolower($saving->payment_month)==strtolower($index))? 'selected':''}}>{{$month->name}}</option>
		        					@endforeach

		        				</select>
		        		</div>
		        	</div>
		        	<div class="col-lg-1 dates">
		        		<div class="orm-group" data-date-format="mm-dd-yyyy">
		        			 <label for="paymentDate">Payment date</label>
		        				<select class="form-control" id="paymentDays" name="payment_day">
		        					<option value="">select day</option>
		        					@foreach($days as $index => $day)
		        						<option value="{{$index}}" {{(strtolower(old('payment_day'))==strtolower($index)|| strtolower($saving->payment_day)==strtolower($index))?'selected':''}}>{{$day->id}}</option>
		        					@endforeach
		        				</select>
		        		</div>
		        	</div>
		        </div>

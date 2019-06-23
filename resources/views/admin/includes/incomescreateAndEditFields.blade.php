		        <div class="form-group">
		            <label for="incomeTitle">Income name</label>
		            <input type="text" class="form-control" id="incomeTitle" aria-describedby="IncomeTitle" placeholder="Title of an income" name="name" requirted="true" value="{{old('amount', $income->name ?? null)}}">
		        </div>

		        <div class="form-group">
		            <label for="amount">Total amount</label>
		            <input type="number" step="0.01" min="1" max="10000000" class="form-control" id="amount" aria-describedby="IncomeTitle" placeholder="Amount" name="amount" required="true" value="{{old('amount', $income->amount ?? null)}}">
		        </div>
		        <div class="row">
		        	<div class="col-lg-3">
		        		<div class="form-group">
				            <label for="incomeType">Income type</label>
				           
				                <select class="form-control" id="budgetAndIncomeType" name="income_type" >
				                	<option value="select" >Select income type</option>
								    	@foreach($incomeTypes as $incomeType)
								    		
								    		<option value=
								    			"{{$incomeType->id}}" 
								    			{{
								    				(strtolower(old('income_type'))==strtolower($incomeType->id) 
								    				|| strtolower($income->income_type)==strtolower($incomeType->id))?
								    				'selected':''
								    			}}>{{$incomeType->name}}
								    		</option>

								    	@endforeach
							    </select>
				        </div>
		        	</div>
		        	<div class="col-lg-2 dates">
		        		<div class="orm-group" data-date-format="mm-dd-yyyy">
		        			 <label for="startDate">State date</label>
		        			<input type="text"  class="form-control" placeholder="yyyy-mm-dd" autocomplete="off" id="startDate" name="start_date" value="{{old('start_date', $income->start_date ?? null)}}" />
		        			 <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		        		</div>
		        	</div>
		        	<div class="col-lg-2 dates">

		        		<div class="form-group" data-date-format="mm-dd-yyyy">
		        			 <label for="endDate">End date</label>
		        			<input type="text" width="200" class="form-control" placeholder="yyyy-mm-dd" autocomplete="off" id="endDate" name="end_date" value="{{old('end_date', $income->end_date ?? null)}}"/>
		        			 <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		        		</div>
		        	</div>
		        	<div class="col-lg-2 receivedMonth dates">
		        		<div class="orm-group" data-date-format="mm-dd-yyyy">
		        			 <label for="receivedMonth">Recieved month</label >
		        				<select class="form-control" id="receivedMonth" name="received_month">
		        					<option value="">Select month</option>
		        					@foreach($months as $index => $month)
		        						<option value="{{$index}}" {{(strtolower(old('received_month'))==strtolower($index) || strtolower($income->received_month)==strtolower($index))? 'selected':''}}>{{$month->name}}</option>
		        					@endforeach

		        				</select>
		        		</div>
		        	</div>
		        	<div class="col-lg-2 dates">
		        		<div class="orm-group" data-date-format="mm-dd-yyyy">
		        			 <label for="receivedDate">Recieved date</label>
		        				<select class="form-control" id="receivedDays" name="received_day">
		        					<option value="">select day</option>
		        					@foreach($days as $index => $day)
		        						<option value="{{$index}}" {{(strtolower(old('received_day'))==strtolower($index)|| strtolower($income->received_day)==strtolower($index))?'selected':''}}>{{$day->id}}</option>
		        					@endforeach
		        				</select>
		        		</div>
		        	</div>
		        </div>

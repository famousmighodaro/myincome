


		@method('PATCH')
		@csrf
		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter budget name" name="name" value="{{old('name', $budget->name)}}">
		  </div>  

		  <div class="form-group">
		    <label for="totalAmount">Total amount</label>
		    <input type="text" class="form-control" id="totalAmount" aria-describedby="budgetName" placeholder="Enter total budgeted amount for this item" name="total_amout" value="{{old('total_amout', $budget->total_amout)}}" >
		  </div>

		  <div class="form-group">
		    <label for="totalAmount">Budget category</label>

		    <select class="form-control" name="budget_category_id">
		    	@foreach($budgetCategories as $category)
		    		<option value="{{$category->id}}" {{
		    											(strtolower(old('category'))==strtolower($category->name)
		    												|| strtolower($category->id)==strtolower($budget->budget_category_id)
		    														)?'selected':''
		    											}}>{{$category->name}}

		    		</option>
		    	@endforeach
		    </select >

		  </div>


		<div class="custom-control custom-switch">
		  	<input type="checkbox" class="custom-control-input" id="recurring" data-toggle="collaps" data-target="#recurringItems"  aria-expanded="true" aria-controls="recurringItems" name="recurring" {{$budget->recurring ?'checked':''}} >
		  	<label class="custom-control-label" for="recurring">Recurring</label>
		</div>

		  <div id="recurringItems" class="collaps card">
			
			 <div class="form-group">
			    <label for="paymentInterval">Payment interval</label>
			    <select class="form-control" id="paymentInterval" name="payment_interval" value="{{old('payment_interval', $budget->payment_interval)}}">
			    	  @foreach($intervals as $interval => $key)
			    	  	<option value="{{$interval}}" {{ (strtolower($budget->payment_interval)==strtolower($key)) ? 'selected' : '' }}>{{$key}}</option>
			    	  @endforeach
			    </select>
			 </div>

			  <div class="form-group">
				    <label for="paymentAmount">Interval paymet amount</label>
				    <input type="text" class="form-control" id="paymentAmount" aria-describedby="budgetName" placeholder="Enter the amout payable monthly" name="interval_amount" value="{{old('interval_amount', $budget->interval_amount)}}">
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


			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="startDate">Start date</label>
			      <input type="date" class="form-control" id="startDate" placeholder="Select start date" name="start_date" value="{{old('start_date', date('Y-m-d')), $budget->start_date}}" >
			    </div>
			    <div class="form-group col-md-6">
			      <label for="endDate">End date</label>
			      <input type="date" class="form-control" id="endDate" placeholder="Select end date" name="end_date" value="{{old('end_date', date('Y-m-d'), $budget->end_date)}}">
			    </div>
			  </div>

		  </div>

		  <input type="submit" name="" value="Update budget">

		  @if($errors->any())
	<div class="notifucation is-danger" style="color: white; background-color: red; height:auto;">
		@foreach($errors->all() as $error)
		    <li>{{ $error }} </li>
		@endforeach
	</div>
@endif

	



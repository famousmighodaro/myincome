@extends('/admin/layouts/base')



@section('content')

<div class="row">
	<div class="col-md-5">
		<h3>{{$budgetCategory->name}} 
		</h3>
	</div>

	<div class="col-md-7">
		<div class="progress" style="height: 20px; background-color:;">
		  	<div class="progress-bar  bg-success" role="progressbar" style="width: 75%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">75%</div>
  			<div class="progress-bar bg-warning" role="progressbar" style="width: 3%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h3>Total Amount: {{$budgetCategory->budgets()->sum('total_amount')}}</h3>
			</div>

			<div class="col-md-6">
				<h3>Total Paid: {{$budgetCategory->budgets()->sum('total_paid')}}</h3>

			</div>

			<div class="row">
				<div class="col-md-12">
					
				</div>
			</div>
		
		</div>
	</div>
</div>

	<div class="">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
			      aria-selected="true">Details</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
			      aria-selected="false">Payment history</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
			      aria-selected="false">Add payment</a>
			  </li>
		</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  	<ul>
  		<div class="row">
  			<div class="col-md-3"><li><strong>Budget name:</strong>  {{$budget->name}} </li></div>
  			<div class="col-md-3"><li><strong>Total amount:</strong>  {{$budget->total_amount}} </li></div>
  			<div class="col-md-3"><li><strong>Total Paid:</strong>  {{$budget->total_paid}} </li></div>
  			<div class="col-md-3"><li><strong>Open payment:</strong>  {{$budget->opened_payment}} </li></div>
  		</div>
 		<div class="row">
  			<div class="col-md-3"><li><strong>Payment completed?:</strong>  {{$budget->completed_payment}} </li></div>
  			<div class="col-md-3"><li><strong>Date created:</strong>  {{$budget->created_at}} </li></div>
  		</div>

  		<div class="card">
  			<div class="card-header"></div>
  			<div class="card-body">
		 		<div class="row">
		  			<div class="col-md-3"><li><strong>Recurring:</strong>  {{$budget->recurring}} </li></div>
		  			<div class="col-md-3"><li><strong>Payment interval:</strong>  {{$budget->payment_interval}} </li></div>
		  		</div>
		  		<div class="row">
		  			<div class="col-md-3"><li><strong>Interval amount:</strong>  {{$budget->interval_amout}} </li></div>
		  			<div class="col-md-3"><li><strong>Payment interval:</strong>  {{$budget->number_of_months}} </li></div>
		  		</div>
		  		<div class="row">
		  			<div class="col-md-3"><li><strong>Start:</strong>  {{$budget->start_date}} </li></div>
		  			<div class="col-md-3"><li><strong>End date:</strong>  {{$budget->end_date}} </li></div>
		  		</div>
  			</div>
  		</div>
  	</ul>
</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
	@if($budget->payments->count())
		<table class="table table-striped">
	  		<thead class="thead-dark">
	  			<tr>
	  				<th>No.</th>
		  			<th>Amount</th>
		  			<th>Date Paid</th>
	  			</tr>
	  		</thead>
	  			@foreach($budget->payments as $payment)
	  				<tr> 
	  					<td>{{$count++}}</td>
	  					<td>{{$payment->added_amount}}</td>
	  					<td>{{$payment->created_at}}</td>
	  				</tr>
				@endforeach
  		</table>
  		@else
  		<p>you don't have payment on this budget yet</p>
  		@endif
  </div>
  	<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
	  	<form method="post" action="/budget/{{$budget->id}}/payment">
	  		@csrf
	  		<div class="form-group">
            <label for="addedPaymentAmount">Amount</label>
            <input type="text" class="form-control" id="addedPaymentAmount" aria-describedby="BudgetPaymentAmountAddedHelp" placeholder="" name="added_amount" value="{{old('added_amount')}}" required="true">
           
          </div>
          <input type="submit" name="" value="Add payment">
	  	</form>
	</div>
</div>

<a href="/admin/category/{{$budgetCategory->id}}" class="nav-btn" type="button"><< Back </a>
	</div>



@endsection
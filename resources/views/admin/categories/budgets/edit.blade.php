@extends('/admin/layouts/base')



@section('content')

<div class="row">
	<div class="col-md-5">



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

<div class="card">
	<div class="card-header">
		Edit budget
	</div>
	<div class="card-body">
		<form method="post" action="/admin/category/{{$budgetCategory->id}}/budget/{{$budget->id}}" class="editForm">
					@method('PATCH')
		@csrf
			@includeif('/admin/includes/budgetCreateAndEditFields')

	
			 <div class="modal-footer">
		            <button type="submit" data-toggle="collapse" data-target="" href="/admin/incomes" id="bc">Cancel</button>
		            <input type="submit" name="" value="Update income">
		        </div>



		    @if($errors->any())
	<div class="notifucation is-danger" style="color: white; background-color: red; height:auto;">
		@foreach($errors->all() as $error)
		    <li>{{ $error }} </li>
		@endforeach
	</div>
@endif
		</form>

	</div>
</div>
@endsection
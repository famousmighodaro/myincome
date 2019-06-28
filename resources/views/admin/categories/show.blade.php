@extends('/admin/layouts/base')



@section('content')

<div class="row">
	<div class="col-md-5">
		<h3>{{$budgetCategory->name}} 
			<small><a type="submit" href="/admin/category/{{$budgetCategory->id}}/edit">edit</a></small>
			<small>
				<form action="/admin/category/{{$budgetCategory->id}}/destroy" method="post">
					@method('DELETE')
					@csrf
					
			        	<input type="submit" name="" value="Delete">

			        
				</form>
			</small>
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

@if($budgetCategory->budgets->count())
	<div class="box">
		<div class="bg-secondary">
				@includeif('/admin/includes/addBudget')	
		</div>






	<table id="budgetTable" class="display" style="width:100%">
        <thead>
           <tr>
                 <th class="all"></th>
                <th class="all">#</th>
                <th class="all">Name</th>
                <th class="all">Total Amout</th>
                <th class="desktop">Budget type</th>
                <th class="desktop">Total paid</th>
                <th class="desktop">Opened payment</th>
                <th class="desktop">Completed payment</th>
                <th class="desktop">Total no. of Month <strong>(s)</strong></th>
                <th class="desktop">Start date</th>
                <th class="desktop">End date</th>
                <th class="desktop">operation</th>
                
            </tr>
          </thead>
          <tbody>
          <?php $count=1;  ?> 
        @foreach($budgetCategory->budgets as $budget)
           
            <tr>
                <td></td>
                <td>{{$count++}}</td>
                <td>{{$budget->name}}</td>
                <td>{{$budget->total_amount}}</td>
                <td>{{(isset($budget->budget_type_id))?$budget->budgetType->name:''}}</td>
                <td>{{$budget->total_paid}}</td>
                <td>{{$budget->opened_payment}}</td>
                <td>
                    <form method="post" action="/budgets/{{$budget->id}}">
                        @method('PATCH')
                        @csrf
                        <label for="completed_payment">
                            <input type="checkbox" name="completed_payment" onChange="this.form.submit()" {{$budget->completed_payment ? 'checked':''}} > 
                            <?php 
                                if($budget->completed_payment){
                                    echo '&#x2705;';
                                }

                            ?>
                        </label>
                    </form>
                </td>
                <td>{{$budget->number_of_months}}</td>
                <td>{{$budget->start_date}}</td>
                <td>{{$budget->end_date}}</td>
                <td><a href="/admin/categories/{{$budget->budget_category_id}}/budgets/{{$budget->id}}/edit">edit</a> |
                <a href="/admin/category/{{$budget->budget_category_id}}/budget/{{$budget->id}}">show</a></td>
            </tr>
          
        	@endforeach
        </tbody>
    </table>


	</div>
	@else
		<h4>you have empty budget on this category</h4>
		@includeif('/admin/includes/addBudget')	

	@endif
@endsection
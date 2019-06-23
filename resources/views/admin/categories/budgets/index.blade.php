@extends('/admin/layouts/base')


@section('content')
         <?php $count=1;  ?> 
	<div>
		<div class="actionsMenu toolbar">
			[ <a class="" data-toggle="collapse" href="#collapseAddBudget" role="button" aria-expanded="false" aria-controls="collapseAddBudget">Add budget</a> ] 
			[ <a href="">Anaylise your budget</a>]
		</div>

	
		<div id="collapseAddBudget" class="collapse">
			<form method="post" action="/budget">
		        {{ csrf_field() }}
				<div class="form-group">
                    <label for="categories">Budget categories</label>
                     <select name="budget_category_id" class="form-control">
                        <option value="">Select category</option>
                            @foreach($budgetCategories as $budgetCategory)
                                <option value="{{$budgetCategory->id}}" {{(old('budget_category_id')==$budgetCategory->id)?'selected':''}}>{{$budgetCategory->name}}</option>
                            @endforeach
                     </select>
                </div>
				@includeif('/admin/includes/addBudgetFields')
		      
		        <div class="modal-footer">
		            <button type="button" data-toggle="collapse" data-target="#collapseAddBudget" id="bc">Close</button>
		            <input type="submit" name="" value="Add income">
		        </div>
            </form>
		</div>
	</div>
    <div><br></div>
	<table id="budgetTable" class="display" style="width:100%">
        <thead>
           <tr>
                 <th class="all"></th>
                <th class="all">#</th>
               
                <th class="all">Category</th>
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
        @foreach($budgets as $budget)
           
            <tr>
                <td></td>
                <td>{{$count++}}</td>
                
                @for($i=0; $i<$budgetCategories->count(); $i++ )
                    @if($budget->budget_category_id==$budgetCategories[$i]->id)
                <td>{{ $budgetCategories[$i]->name}}</td>
                @endif
                @endfor
                <td>{{$budget->name}}</td>
                <td>{{$budget->total_amount}}</td>
                <td>{{$budget->budgetType->name}}</td>
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




@endsection
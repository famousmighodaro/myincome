@extends('/admin/layouts/base')



@section('content')

<div class="row">
	<div class="col-md-5">
		<h3>{{$budgetCategory->name}} </h3>
	</div>
	<div class="col-md-7">
		<h3>Total amount: 500 euro</h3>
	</div>
</div>

<div class="container">
	<form method="post" action="/admin/category/{{$budgetCategory->id}}">
		<h3>Edit budget category name</h3>
		    @method('PATCH')
        @csrf         

          <div class="form-group">
            <label for="budgetCategoryName">Budget Category Name</label>
            <input type="text" class="form-control" id="budgetCategoryName" aria-describedby="BudgetNameHelp" placeholder="" name="name" value="{{$budgetCategory->name}}" required="true">
           
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="" value="Update name">
      </div>
        </form>
</div>


@endsection
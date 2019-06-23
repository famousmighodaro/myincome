@extends('/admin/layouts/base')

@section('content')

<h1>Showing all your budget categories</h1>


<table id="budgetTable" class="display" style="width:100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Total Amout</th>
      <th scope="col">No. of items on the budget</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($budgetCategories as $budgetCategory)
    <a href=" ">
    	<tr class='clickable-row' data-href='/admin/category/{{$budgetCategory->id}}'>
      <th scope="row">{{$count++}}</th>
      <td>{{$budgetCategory->name}}</td>
      <td>{{$budgetCategory->budgets->sum('total_amount')}}</td>
      <td>{{$budgetCategory->budgets->count()}}</td>
    </tr>
    </a>
	@endforeach
    
  </tbody>
</table>

@endsection
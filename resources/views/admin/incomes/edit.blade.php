@extends('/admin/layouts/base')


@section('content')
	<div>
		<div class="actionsMenu toolbar">
			[ <a class="" data-toggle="collapse" href="#collapseAddIncome" role="button" aria-expanded="false" aria-controls="collapseAddIncome">Add an income</a> ] 
			[ <a href="">Anaylise your income</a>]
		</div>
	
		<div id="" class="">
			<form method="post" action="/admin/income/{{$income->id}}">
		        {{ csrf_field() }}
				@method('PATCH')
				@includeif('/admin/includes/incomesCreateAndEditFields')
		      
		        <div class="modal-footer">
		            <button type="submit" data-toggle="collapse" data-target="" href="/admin/incomes" id="bc">Cancel</button>
		            <input type="submit" name="" value="Update income">
		        </div>
            </form>
		</div>
	</div>

	

@endsection
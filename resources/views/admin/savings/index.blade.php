@extends('/admin/layouts/base')


@section('content')

	<div>
		<div class="actionsMenu toolbar">
			[ <a class="" data-toggle="collapse" href="#collapseAddIncome" role="button" aria-expanded="false" aria-controls="collapseAddIncome">Add saving</a> ] 
			[ <a href="">Anaylise your savings</a>]
		</div>
	
		<div id="collapseAddIncome" class="collapse">
			<form method="post" action="/admin/saving">
		        {{ csrf_field() }}
				
				@includeif('/admin/includes/savingsCreateAndEditFields')
		      
		        <div class="modal-footer">
		            <button type="button" data-toggle="collapse" data-target="#collapseAddIncome" id="bc">Close</button>
		            <input type="submit" name="" value="Add income">
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


	<table id="incomeTable" class="display" style="width:100%">
        <thead>
            <tr>
            	<th class="all"></th>
                <th class="all">saving's name</th>
                <th class="all">Amount</th>
                <th class="desktop tablet-p">Saving type</th>
                <th class="desktop tablet-l">Start date</th>
                <th class="desktop tablet-l">End date</th>
                <th class="desktop">Recieved month</th>
                <th class="desktop">Recieved day</th>
                <td class="never">Created at</td>
                <td class="desktop">operation</td>
            </tr>
        </thead>
        <tbody>
        	
        </tbody>


@endsection
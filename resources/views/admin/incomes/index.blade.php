@extends('/admin/layouts/base')


@section('content')
	<div>
		<div class="actionsMenu toolbar">
			[ <a class="" data-toggle="collapse" href="#collapseAddIncome" role="button" aria-expanded="false" aria-controls="collapseAddIncome">Add an income</a> ] 
			[ <a href="">Anaylise your income</a>]
		</div>
	
		<div id="collapseAddIncome" class="collapse">
			<form method="post" action="/admin/income">
		        {{ csrf_field() }}
				
				@includeif('/admin/includes/incomesCreateAndEditFields')
		      
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
                <th class="all">income name</th>
                <th class="all">Amount</th>
                <th class="desktop tablet-p">Income type</th>
                <th class="desktop tablet-l">Start date</th>
                <th class="desktop tablet-l">End date</th>
                <th class="desktop">Recieved month</th>
                <th class="desktop">Recieved day</th>
                <td class="never">Created at</td>
                <td class="desktop">operation</td>
            </tr>
        </thead>
        <tbody>
        	@foreach($incomes as $income)
        		<tr>
        			<td></td>
        			<td>{{$income->name}}</td>
        			<td>{{$income->amount }}</td>
        			<td>{{(isset($income->income_type))?$income->incomeType->name:'' }}</td>
        			<td>{{$income->start_date }}</td>
        			<td>{{$income->end_date}}</td>
        			<td>{{(isset($income->received_month))?$income->receivedMonth->name:''}}</td>
        			<td>{{$income->received_day}}</td>
        			<td>{{$income->created_at}}</td>
        			<td><a href="/admin/income/{{$income->id}}/edit" class="operations edit-icon"><small><i class="fas fa-pencil-alt"></i></small></a> |
						<form method="post" action="/admin/income/{{$income->id}}">
							@csrf
							@method('DELETE')
							
							
							<button type="submit" class="btn-xm operations del-icon"><i class="fa fa-trash" aria-hidden="true"></i></button>
						</form>

        			</td>
        		</tr>
        	@endforeach
        </tbody>
    </table>

@endsection
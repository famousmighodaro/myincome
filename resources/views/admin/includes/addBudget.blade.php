<ul>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    add budget
  </a>
 

</ul>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    
	<form method="post" action="/categories/{{$budgetCategory->id}}/budget">

		@csrf


		  @includeif('/admin/includes/addBudgetFields')		

	</form>


  </div>
</div>
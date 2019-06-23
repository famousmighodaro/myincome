<!-- Button trigger modal -->
<a type=""  class="" data-toggle="modal" data-target="#createBudgetModal">
  Create category
</a>

<!-- Modal -->
<div class="modal fade" href="/admin/create" id="createBudgetModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Create budget category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="/admin/category">
        {{ csrf_field() }}
      <div class="modal-body">
        
          

          <div class="form-group">
            <label for="budgetCategoryName">Budget Category Name</label>
            <input type="text" class="form-control" id="budgetCategoryName" aria-describedby="BudgetNameHelp" placeholder="" name="name" required="true">
           
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="" value="create budget">
      </div>
        </form>

    </div>
  </div>
</div>





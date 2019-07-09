<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.2.5/css/rowReorder.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">


    <title></title>

  </head>
  <body>
    @includeif('/layouts.nav')
    
  <div class="container-fluid" id="page-container">



  
  
  
    <h1>we are panel</h1>
  <div class="content">
        <div class="row">
            <div class="col-md-3 col-lg-2" style="background-color:red;">
                <div class="container">
                  <li><a href="">Overview</a></li>
                  <li><a href="">Budget category</a></li>
                  @include('admin.layouts.menus.create_budget')
                  <ul>
                    <li><a href="/admin/incomes">Incomes</a></li>
                    <li><a href="/admin/budgets">Budget</a></li>
                    <li><a href="/admin/savings">Savings</a></li>
                    <li><a href="">Transactions</a></li>
                    
                  </ul>
                </div>
            </div>
            <div class="col-md-9 col-lg-10">
               @yield('content')
            </div>
        </div>
</div>
      <footer class="footer">
        
            <span class="">
               copy right 2019
            </span>
        
      </footer>
  </div>

   @include('layouts.script_links')
  </body>
</html>

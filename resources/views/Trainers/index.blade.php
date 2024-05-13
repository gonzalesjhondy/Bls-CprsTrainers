@include('includes/header')

@include('includes/sidebar')

@include('includes/topnavbar')

    <!-- page content -->
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Welcome <small>Trainers Page Info List</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <!-- <h2>Table<small>Trainers</small></h2> -->
                    <!-- <button type="button" class="btn btn-round btn-primary btn-sm">Add</button> -->
                    <button type="button" class="btn btn-primary btn-sm" onclick="AddTrainerFormModal()">Add trainer</button>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p> -->

                  <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th class="column-title">FullName </th>
                                        <th class="column-title">Middlename </th>
                                        <th class="column-title">Lastname</th>
                                        <th class="column-title">Suffix</th>
                                        <th class="column-title">Email</th>
                                        <th class="column-title">Assignment</th>
                                        <th class="column-title no-link last"><span class="nobr">LGU</span>
                                        </th>
                                        <th class="column-title">Age_bracket</th>
                                        <th class="column-title">Gender</th>
                                        <th class="column-title">Profession</th>
                                        <th class="column-title">Contact_number</th>
                                        <th class="column-title">Created_by</th>
                                       <th class="column-title" colspan="1">Action X</th>
                                       
                                       <th class="bulk-actions" colspan="0">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                            </th>
                                         </tr>
                                        </thead>

                                         <tr>
                                          <tbody>
                                         <tr class="even pointer">
                                         <td class="">Fullname</td>
                                         <td class="">Middlename</td>
                                         <td class="">Lastname</td>
                                         <td class="">Suffix</td>
                                         <td class="">Email</td>
                                         <td class="">Assignment</td>
                                         <td class="">LGU</td>
                                         <td class="">Age_Bracket</td>
                                         <td class="">Gender</td>
                                         <td class="">Profession</td>
                                         <td class="">Contact_Number</td>
                                         <td class="">Created_By</td>

                                         <td colspan="2">
                                         <button class="btn btn-primary btn-sm" onclick="ViewTraining()">View</button>
                                         <a href="Edit" class="btn btn-primary btn-sm">Edit</a>
                                         <a href="Update" class="btn btn-primary btn-sm">Update</a>
                                       
                                        </td>

                                        </tr>
                                  </tbody>

                      </table>
                    </div>
							   
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        @include('Trainers/trainer')
    @include('includes/footer')

    <script>
  // Define the function in the global scope
  function AddTrainerFormModal() {
    $("#addTrainerModal").modal('show');
   
  }

  function ViewTraining(){
    $('#ViewTrainingModal').modal('show');

  }
  
</script>          
                       
                        

                          
                 
						
       
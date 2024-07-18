@include('includes/header')

@include('includes/sidebar')

@include('includes/topnavbar')


<!-- Add this modal structure at the bottom of your page -->



    <!-- page content -->
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
      

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <!-- <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div> -->
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
              <div class="clearfix"></div>

          <div class="col-md-12 ">
            <div class="col-md-12">
              <div class="x_panel">
                  <div class="x_title">
                  <h2>BLS-CPR Area of Assignment Sub</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createNewModal">CREATE NEW</button>
                    <br />
                    <br />
                    <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                          <tr class="headings">
                              <th class="column-title">Area of Assignment (Main)</th>
                              <th class="column-title">Area of Assignment (Sub)</th>
                              <th class="column-title">Actions</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($areaofAssignments as $assignment)
                          <tr class="even pointer">
                              <td>{{ $assignment->areaofassignment->AreaAssignmentMain }}</td> <!-- Display AreaAssignmentMain instead of AreaOfAssignmentId -->
                              <td>{{ $assignment->AreaAssignmentSub }}</td>
                              <td>
                                  <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
                                  <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                              </td>
                          </tr>
                      @endforeach
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      <div class="modal fade" id="createNewModal" tabindex="-1" role="dialog" aria-labelledby="createNewModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="createNewModalLabel">Create New Area of Assignment</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form id="createNewForm" action="{{ route('trainer.saveAreaOfAssignmentSub') }}" method="POST">
          @csrf
          <div class="form-group">
              <h6>Area of Assignment Main & Sub</h6>
              <select class="form-control mb-2 " name="AreaOfAssignmentId" id="AreaOfAssignmentId">
                  <option value="">Choose option</option>
                  @foreach($areaofAssignmentMain as $assignment)
                      <option value="{{ $assignment->id }}">{{ $assignment->AreaAssignmentMain }}</option>
                  @endforeach
              </select>
              <h6>Area of Assignment Sub</h6>
              <input type="text" class="form-control mt-2 mb-4" id="AreaAssignmentSub" name="AreaAssignmentSub" required>
          </div>
          <div class="pull-right">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-success">Submit</button>
          </div>
      </form>
      </div>
    </div>
  </div>
</div>

        <!-- /page content -->
    
    @include('includes/footer')

    <script>




    $('#createNewForm').on('submit', function(e){
    e.preventDefault();
    let areaofAssignmentSub = $('#AreaAssignmentSub').val();
    let areaofAssignmentId = $('#AreaOfAssignmentId').val();

    $.ajax({
        type: "POST",
        url: $(this).attr('action'),
        data: {
            AreaOfAssignmentId: areaofAssignmentId,
            AreaAssignmentSub: areaofAssignmentSub,
            _token: '{{ csrf_token() }}'
        },
        success: function(response){
            console.log(response.message);
            // Optionally, you can refresh the page or update the table dynamically
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });

    // Close the modal
    $('#createNewModal').modal('hide');
});


  
</script>          
                       
                        

                          
                 
						
       
@include('includes/header')

@include('includes/sidebar')

@include('includes/topnavbar')

<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- Add this modal structure at the bottom of your page -->

    <!-- page content -->
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_right">
                <div class="col-md-6 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control"  id="searchInput"  placeholder="Search">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Search!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
              <div class="clearfix"></div>

          <div class="col-md-12 ">
          <div id="successAlert" class="alert alert-success alert-dismissible fade show" role="alert" style="display:none;">
              Area of Assignment Sub added successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div id="removeAlert" class="alert alert-danger alert-dismissible fade show" role="alert" style="display:none;">
             Area of Assignment Sub remove successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div id="editAlert" class="alert alert-primary alert-dismissible fade show" role="alert" style="display:none;">
           Area of Assignment Sub updated successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
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
                    <table class="table table-striped jambo_table bulk_action" id="blsTable">
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
                              <button class="btn btn-sm btn-info btn-edit" data-id="{{ $assignment->id }}" data-description="{{ $assignment->areaofassignment->AreaAssignmentMain }}"><i class="fa fa-edit"></i></button>
                              <button class="btn btn-sm btn-danger btn-delete" data-id="{{ $assignment->id }}"><i class="fa fa-trash"></i></button>
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
              <h5 class="modal-title" id="createNewModalLabel">Create New </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
          <form id="createNewForm" action="{{ route('trainer.saveAreaOfAssignmentSub') }}" method="POST">
            @csrf
            <div class="form-group">
                <h6>Area of Assignment Main </h6>
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


<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Area Of Assignment Main</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="editForm" action="{{ route('trainer.updateAreaOfAssignmentSub') }}" method="POST">
          @csrf
          <input type="hidden" id="editAreaAssignmentId" name="id">
          <div class="form-group">
            <h6>Area of Assignment Main</h6>
            <select class="form-control mb-2" id="AreaAssignmentMain" name="AreaAssignmentMain">
              <option value="">Choose option</option>
              @foreach($areaofAssignmentMain as $areaofAssignment)
              <option value="{{ $areaofAssignment->id }}">{{ $areaofAssignment->AreaAssignmentMain }}</option>
              @endforeach
            </select>
            <h6>Area of Assignment Sub</h6>
            <input type="text" class="form-control" id="editAreaAssignmentSub" name="AreaAssignmentSub" required>
          </div>
          <div class="pull-right">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div> 
        </form>
      </div>
    </div>
  </div>
</div>



  <!-- /page content -->
    
  @include('includes/footer')

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

  <script>


// $('#blsTable').DataTable({
//         "lengthMenu": [[15, 25, 50, -1], [15, 25, 50, "All"]],
//         "pageLength": 15,
//         "dom": 'lrtip'  // This 
//     });

//     $('#searchInput').on('keyup', function () {
//         $('#blsTable').DataTable().search($(this).val()).draw();
//     });


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
        $('#successAlert').show();

        $('#createNewForm')[0].reset();

        // Automatically hide the alert after 5 seconds
        setTimeout(function() {
          $('#successAlert').hide();
          window.location.reload();
        }, 1500);
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });

    // Close the modal
    $('#createNewModal').modal('hide');
});



$(document).ready(function() {
    // Edit button click event to populate and show the modal
    $('.btn-edit').on('click', function() {
        var id = $(this).data('id');
        
        // Fetch the data from the server
        $.ajax({
            url: '/trainer/get-area-of-assignment/' + id, // Adjust this URL to your route
            type: 'GET',
            success: function(response) {
                // Populate the modal fields with the response data
                $('#editAreaAssignmentId').val(response.id);
                $('#editAreaAssignmentSub').val(response.AreaAssignmentSub);

                // Set the selected option in the dropdown based on the ID
                $('#AreaAssignmentMain').val(response.AreaOfAssignmentId).change();

                // Show the modal
                $('#editModal').modal('show');
            },
            error: function(xhr, status, error) {
                console.error('Error fetching data:', xhr.responseText);
            }
        });
    });

    $('#editForm').on('submit', function(e) {
        e.preventDefault();
        let areaAssignmentId = $('#editAreaAssignmentId').val();
        let areaAssignmentMain = $('#AreaAssignmentMain').val();
        let areaAssignmentSub = $('#editAreaAssignmentSub').val();

        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: {
                id: areaAssignmentId,
                AreaAssignmentMain: areaAssignmentMain,
                AreaAssignmentSub: areaAssignmentSub,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                $('#editAlert').show();

                // Hide the alert after 1.5 seconds
                setTimeout(function() {
                    $('#editAlert').hide();
                    window.location.reload();
                }, 1500);
            },
            error: function(xhr, status, error) {
                console.error('Error in form submission:', xhr.responseText);
            }
        });

        // Close the modal
        $('#editModal').modal('hide');
    });
});




$('.btn-delete').on('click', function() {
        var id = $(this).data('id');

        if (confirm('Are you sure you want to delete this Area of Assignment Sub?')) {
            $.ajax({
                type: "DELETE",
                url: "{{ url('trainer/deleteAreaOfAssignmentSub') }}/" + id,
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                  $('#removeAlert').show();

                // Hide the alert after 3 seconds
                setTimeout(function() {
                    $('#removeAlert').hide();
                    window.location.reload();
                }, 1500);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
    });
  
</script>          
                       
                        

                          
                 
						
       
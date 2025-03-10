@include('includes/header')

@include('includes/sidebar')

@include('includes/topnavbar')
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_right">
        <div class="col-md-5 col-sm-5 form-group pull-right top_search">
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row" style="display: block;">
      <div class="clearfix"></div>

      <div class="col-md-12 ">
      <div id="successAlert" class="alert alert-success alert-dismissible fade show" role="alert" style="display:none;">
          Profession/Work added successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div id="removeAlert" class="alert alert-danger alert-dismissible fade show" role="alert" style="display:none;">
        Profession/Work remove successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div id="editAlert" class="alert alert-primary alert-dismissible fade show" role="alert" style="display:none;">
        Profession/Work updated successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>BLS-CPR Trainer Profession / Work</h2>
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
                      <th class="column-title">Profession / Work </th>
                      <th class="column-title">Actions </th>
                    </tr>
                  </thead>

                  <tbody>
                  @foreach($profWorks as $profWork)
                  <tr class="even pointer">
                      <td>{{ $profWork->ProfWorkDesc }}</td> <!-- Display AgeBracketDesc -->
                      <td>
                          <button class="btn btn-sm btn-info btn-edit" data-id="{{ $profWork->id }}" data-description="{{ $profWork->ProfWorkDesc }}"><i class="fa fa-edit"></i></button>
                          <button class="btn btn-sm btn-danger btn-delete" data-id="{{ $profWork->id }}"><i class="fa fa-trash"></i></button>
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
<!-- /page content -->

<!-- Create New Modal -->
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
        <form id="createNewForm" action="{{ route('trainer.saveProfWork') }}" method="POST">
          <div class="form-group">
            <h6 for="profWork" >Profession / Work</label>
            <input type="text" class="form-control mt-2 mb-4" id="ProfWorkDesc" name="ProfWorkDesc" required>
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
        <h5 class="modal-title" id="editModalLabel">Edit Profession/Work</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="editForm" action="{{ route('trainer.updateProfWork') }}" method="POST">
          @csrf
          <input type="hidden" id="editProfWork" name="id">
          <div class="form-group">
            <label for="editProfWorkDesc">Profession / Work</label>
            <input type="text" class="form-control" id="editProfWorkDesc" name="ProfWorkDesc" required>
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


@include('includes/footer')

<script>
    $(document).ready(function(){
      $('#createNewForm').on('submit', function(e){
        e.preventDefault();
        // Handle form submission here, e.g., using AJAX to send data to the server
        let profWorkDescription = $('#ProfWorkDesc').val();

        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: {
                ProfWorkDesc: profWorkDescription,
                _token: '{{ csrf_token() }}' // Include CSRF token for Laravel security
            },
            success: function(response){
              // Show the success alert
              $('#successAlert').show();
              $('#createNewForm')[0].reset();

              // Automatically hide the alert after 5 seconds
              setTimeout(function() {
                $('#successAlert').hide();
                window.location.reload();
              }, 1500);
                // Optionally, you can refresh the page or update the table dynamically
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });


        // Close the modal
        $('#createNewModal').modal('hide');
        // Optionally, you can refresh the page or update the table dynamically
      });
    });


    $(document).ready(function() {
        // Edit button click event to populate and show the modal
        $('.btn-edit').on('click', function() {
            var profWorkId = $(this).data('id');
            var profWorkDesc = $(this).data('description');
            $('#editProfWork').val(profWorkId);
            $('#editProfWorkDesc').val(profWorkDesc);
            $('#editModal').modal('show');
        });

        $('#editForm').on('submit', function(e) {
            e.preventDefault();
            let profWorkId = $('#editProfWork').val();
            let profWorkDesc = $('#editProfWorkDesc').val();

            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: {
                    id: profWorkId,
                    ProfWorkDesc: profWorkDesc,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log(response.message);
                    $('#editAlert').show();

                  // Hide the alert after 3 seconds
                  setTimeout(function() {
                      $('#editAlert').hide();
                      window.location.reload();
                  }, 1500);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
            // Close the modal
            $('#editModal').modal('hide');
        });
    });


    $('.btn-delete').on('click', function() {
        var profWorkId = $(this).data('id');

        if (confirm('Are you sure you want to delete this profession/work?')) {
            $.ajax({
                type: "DELETE",
                url: "{{ url('trainer/deleteProfWork') }}/" + profWorkId,
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


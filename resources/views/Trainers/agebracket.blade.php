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
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>BLS-CPR Trainer Age Bracket</h2>
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
                        <th class="column-title">Age Description Bracket</th>
                        <th class="column-title">Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                  @foreach($ageBrackets as $ageBracket)
                  <tr class="even pointer">
                      <td>{{ $ageBracket->AgeBracketDesc }}</td> <!-- Display AgeBracketDesc -->
                      <td>
                      <button class="btn btn-sm btn-info btn-edit" data-id="{{ $ageBracket->id }}" data-description="{{ $ageBracket->AgeBracketDesc }}"><i class="fa fa-edit"></i></button>
                      <button class="btn btn-sm btn-danger btn-delete" data-id="{{ $ageBracket->id }}"><i class="fa fa-trash"></i></button>
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
        <h5 class="modal-title" id="createNewModalLabel">Create New Age Bracket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="createNewForm" action="{{ route('trainer.saveAgeBracket') }}" method="POST">
          <div class="form-group">
            <h6 for="ageBracketDescription" >Age Bracket Description</label>
            <input type="text" class="form-control mt-2 mb-4" id="AgeBracketDesc" name="AgeBracketDesc" required>
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



<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Age Bracket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="editForm" action="{{ route('trainer.updateAgeBracket') }}" method="POST">
          @csrf
          <input type="hidden" id="editAgeBracketId" name="id">
          <div class="form-group">
            <label for="editAgeBracketDesc">Age Bracket Description</label>
            <input type="text" class="form-control" id="editAgeBracketDesc" name="AgeBracketDesc" required>
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
    $('#createNewForm').on('submit', function(e){
    e.preventDefault();
    let ageBracketDescription = $('#AgeBracketDesc').val();

    $.ajax({
        type: "POST",
        url: $(this).attr('action'),
        data: {
            AgeBracketDesc: ageBracketDescription,
            _token: '{{ csrf_token() }}' // Include CSRF token for Laravel security
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

  
$(document).ready(function() {
        // Edit button click event to populate and show the modal
        $('.btn-edit').on('click', function() {
            var ageBracketId = $(this).data('id');
            var ageBracketDesc = $(this).data('description');
            $('#editAgeBracketId').val(ageBracketId);
            $('#editAgeBracketDesc').val(ageBracketDesc);
            $('#editModal').modal('show');
        });

        $('#editForm').on('submit', function(e) {
            e.preventDefault();
            let ageBracketId = $('#editAgeBracketId').val();
            let ageBracketDesc = $('#editAgeBracketDesc').val();

            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: {
                    id: ageBracketId,
                    AgeBracketDesc: ageBracketDesc,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log(response.message);
                    // Optionally, you can refresh the page or update the table dynamically
                    location.reload(); // Reload the page to see changes
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });

            // Close the modal
            $('#editModal').modal('hide');
        });
    });

       // Delete button click event
       $('.btn-delete').on('click', function() {
        var ageBracketId = $(this).data('id');

        if (confirm('Are you sure you want to delete this age bracket?')) {
            $.ajax({
                type: "DELETE",
                url: "{{ url('trainer/deleteAgeBracket') }}/" + ageBracketId,
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log(response.message);
                    location.reload(); // Reload the page to see changes
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
    });

</script>

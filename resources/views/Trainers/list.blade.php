@include('includes/header')

@include('includes/sidebar')

@include('includes/topnavbar')

<!-- Add DataTables CSS -->
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<style>
    /* Ensure the table header remains sticky */
    .thead-sticky {
        position: sticky;
        top: 0;
        background-color: #fff;
        z-index: 10; 
    }

    /* Make the first two columns sticky */
    #blsTable th:first-child,
    #blsTable td:first-child,
    #blsTable th:nth-child(2),
    #blsTable td:nth-child(2) {
        position: sticky;
        left: 0;
        z-index: 9; 
        background-color: white;
    }

    /* Make the last column sticky */
    #blsTable th:last-child,
    #blsTable td:last-child {
        position: sticky;
        right: 0;
        z-index: 9;
    }
    
    /* Ensure the tbody scrolls */
    .tbody-scroll {
        overflow-y: auto;
        max-height: 400px;
    }

</style>


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        <div class="title_left">
                <h3>BLS-CPR Trainer Information</small></h3>
              </div>
            <div class="title_right">
                <div class="col-md-6 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" id="searchInput" placeholder="Search...">
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
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>BLS-CPR Trainer List</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <div class="table-responsive">
                            <table id="blsTable" class="table table-striped">
                                <thead>
                                    <tr class="headings">
                                        <th class="column-title">BLS ID No.</th>
                                        <th class="column-title">EMAIL</th>
                                        <th class="column-title text-nowrap">LAST NAME</th>
                                        <th class="column-title text-nowrap">FIRST NAME</th>
                                        <th class="column-title text-nowrap">MIDDLE NAME</th>
                                        <th class="column-title">SUFFIX</th>
                                        <th class="column-title">GENDER</th>
                                        <th class="column-title text-nowrap">CONTACT NO.</th>
                                        <th class="column-title text-nowrap">AREA OF ASSIGNMENT (MAIN)</th>
                                        <th class="column-title text-nowrap">AREA OF ASSIGNMENT (SUB)</th>
                                        <th class="column-title text-nowrap">AGE BRACKET</th>
                                        <th class="column-title text-nowrap">PROF WORK</th>
                                        <th class="column-title text-nowrap">TRAINING DATE</th>
                                        <th class="column-title text-nowrap">TRAINING PLACE</th>
                                        <th class="column-title text-nowrap">AGENCY CONDUCTED</th>
                                        <th class="column-title text-nowrap">AGENCY CONDUCTED (Others)</th>
                                        <th class="column-title text-nowrap">CONDUCTED SIX TRAINING</th>
                                        <th class="column-title text-nowrap">Training From (1)</th>
                                        <th class="column-title text-nowrap">Training To (1)</th>
                                        <th class="column-title text-nowrap">PLACE OF AGENCY (1)</th>
                                        <th class="column-title text-nowrap">Training From (2)</th>
                                        <th class="column-title text-nowrap">Training To (2)</th>
                                        <th class="column-title text-nowrap">PLACE OF AGENCY (2)</th>
                                        <th class="column-title text-nowrap">Training From (3)</th>
                                        <th class="column-title text-nowrap">Training To (3)</th>
                                        <th class="column-title text-nowrap">PLACE OF AGENCY (3)</th>
                                        <th class="column-title text-nowrap">Training From (4)</th>
                                        <th class="column-title text-nowrap">Training To (4)</th>
                                        <th class="column-title text-nowrap">PLACE OF AGENCY (3)</th>
                                        <th class="column-title text-nowrap">Training From (5)</th>
                                        <th class="column-title text-nowrap">Training To (5)</th>
                                        <th class="column-title text-nowrap">PLACE OF AGENCY (5)</th>
                                        <th class="column-title text-nowrap">Training From (6)</th>
                                        <th class="column-title text-nowrap">Training To (6)</th>
                                        <th class="column-title text-nowrap">PLACE OF AGENCY (6)</th>
                                        <th class="column-title no-link last"><span class="nobr">Action</span>
                                        </th>
                                        <th class="bulk-actions" colspan="7">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions (
                                                <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($blsinfos as $blsinfo)
                                    <tr class="even pointer">
                                        <td>{{ $blsinfo->BlsId }}</td>
                                        <td>{{ $blsinfo->Email }}</td>
                                        <td>{{ $blsinfo->Lastname }}</td>
                                        <td>{{ $blsinfo->Firstname }}</td>
                                        <td>{{ $blsinfo->Middlename }}</td>
                                        <td>{{ $blsinfo->Suffix }}</td>
                                        <td>{{ $blsinfo->Gender }}</td>
                                        <td>{{ $blsinfo->ContactNum }}</td>
                                        <td>{{ $blsinfo->AreaOfAssignment }}</td>
                                        <td>{{ $blsinfo->AreaOfAssignmentSub }}</td>
                                        <td>{{ $blsinfo->AgeBracketDesc }}</td>
                                        <td>{{ $blsinfo->ProfWorkDesc }}</td>
                                        <td>{{ $blsinfo->TrainingDate }}</td>
                                        <td>{{ $blsinfo->TrainingPlace }}</td>
                                        <td>{{ $blsinfo->AgencyConducted }}</td>
                                        <td>{{ $blsinfo->AgencyConductedOthers }}</td>
                                        <td>{{ $blsinfo->ConductedSixTraining }}</td>
                                        <td>{{ $blsinfo->TrnFrom1 }}</td>
                                        <td>{{ $blsinfo->TrnTo1 }}</td>
                                        <td>{{ $blsinfo->TrnFtOthers1 }}</td>
                                        <td>{{ $blsinfo->TrnFrom2 }}</td>
                                        <td>{{ $blsinfo->TrnTo2 }}</td>
                                        <td>{{ $blsinfo->TrnFtOthers2 }}</td>
                                        <td>{{ $blsinfo->TrnFrom3 }}</td>
                                        <td>{{ $blsinfo->TrnTo3 }}</td>
                                        <td>{{ $blsinfo->TrnFtOthers3 }}</td>
                                        <td>{{ $blsinfo->TrnFrom4 }}</td>
                                        <td>{{ $blsinfo->TrnTo4 }}</td>
                                        <td>{{ $blsinfo->TrnFtOthers4 }}</td>
                                        <td>{{ $blsinfo->TrnFrom5 }}</td>
                                        <td>{{ $blsinfo->TrnTo5 }}</td>
                                        <td>{{ $blsinfo->TrnFtOthers5 }}</td>
                                        <td>{{ $blsinfo->TrnFrom6 }}</td>
                                        <td>{{ $blsinfo->TrnTo6 }}</td>
                                        <td>{{ $blsinfo->TrnFtOthers6 }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
                                            <!-- <button class="btn btn-sm btn-danger btn-delete" data-id="{{ $blsinfo->id }}"><i class="fa fa-trash"></i></button> -->
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
<!-- /page content -->

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Update BLS-CPR Trainer Information</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
               <div class="x_content">
                    <br />
                    <div class="col-md-12">
                      <form id="updateBlsInfoForm" method="POST" action="{{ route('trainer.updateBlsInfo') }}"  >
                        @csrf
                        <input type="hidden" name="id" id="blsInfoId">
                        <div class="row">
                              <div class="col-md-3 col-sm-3 mb-3 form-group">
                                <label for="Email">EMAIL ADDRESS:</label>
                                <input type="email" class="form-control" name="Email" id="Email" >
                              </div>
                              <div class="col-md-3 col-sm-3 mb-3 form-group">
                                <label for="areaofAssignment">AREA OF ASSIGNMENT:</label>
                                <select class="form-control" id="areaofAssignment" name="AreaOfAssignment">
                                  <option value="">Choose option</option>
                                  @foreach($areaofAssignments as $areaofAssignment)
                                  <option value="{{ $areaofAssignment->AreaAssignmentMain }}">{{ $areaofAssignment->AreaAssignmentMain }}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="col-md-3 mb-3 form-group">
                                <label for="areaAssignmentSub">Sub Assignment:</label>
                                <select class="form-control" id="areaAssignmentSub" name="AreaOfAssignmentSub">
                                  <option value="">Choose option</option>
                                  @foreach($areaofAssignmentSub as $assignment)
                                  <option value="{{ $assignment->AreaAssignmentSub }}">{{ $assignment->AreaAssignmentSub }}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="col-md-3 mb-3 form-group">
                                <label for="OtherAssignment">If Others (PLEASE SPECIFY)</label>
                                <input type="text" class="form-control" name="OtherAssignment" id="OtherAssignment">
                              </div>
                              <div class="col-md-3 mb-3 form-group">
                                <label for="Lastname">LAST NAME:</label>
                                <input type="text" class="form-control" name="Lastname" id="Lastname">
                              </div>
                              <div class="col-md-3 mb-3 form-group">
                                <label for="Firstname">FIRST NAME:</label>
                                <input type="text" class="form-control" name="Firstname" id="Firstname">
                              </div>
                              <div class="col-md-3 mb-3 form-group">
                                <label for="Middlename">MIDDLE NAME:</label>
                                <input type="text" class="form-control" name="Middlename" id="Middlename">
                              </div>
                              <div class="col-md-3 mb-3 form-group">
                                <label for="Suffix">SUFFIX:</label>
                                <select class="form-control" name="Suffix" id="Suffix">
                                  <option>Choose option</option>
                                  <option>JR.</option>
                                  <option>SR.</option>
                                  <option>II</option>
                                  <option>III</option>
                                  <option>N/A</option>
                                </select>
                              </div>
                              <div class="col-md-3 mb-3 form-group">
                                <label for="AgeBracketDesc">AGE BRACKET:</label>
                                <select class="form-control" name="AgeBracketDesc" id="AgeBracketDesc">
                                  <option value="">Choose option</option>
                                  @foreach($ageBrackets as $ageBracket)
                                  <option value="{{ $ageBracket->AgeBracketDesc }}">{{ $ageBracket->AgeBracketDesc }}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="col-md-3 mb-3 form-group">
                                <label for="Gender">GENDER:</label>
                                <select class="form-control" name="Gender" id="Gender">
                                  <option>Choose option</option>
                                  <option value="Male">MALE</option>
                                  <option value="Female">FEMALE</option>
                                </select>
                              </div>
                              <div class="col-md-3 mb-3 form-group">
                                <label for="ProfWorkDesc">PROFESSION/WORK/DESIGNATION:</label>
                                <select class="form-control" name="ProfWorkDesc" id="ProfWorkDesc">
                                  <option value="">Choose option</option>
                                  @foreach($profWorks as $profWork)
                                  <option value="{{ $profWork->ProfWorkDesc }}">{{ $profWork->ProfWorkDesc }}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="col-md-3 mb-3 form-group">
                                <label for="ContactNum">REGISTERED CONTACT NO.:</label>
                                <input type="text" class="form-control" name="ContactNum" id="ContactNum">
                              </div>
                              <div class="col-md-3 mb-3 form-group">
                                  <label for="TrainingDate">Date/Month/Year of Training</label>
                                  <input class="form-control" type="date" name="TrainingDate" id="TrainingDate">
                              </div>
                              <div class="col-md-3 mb-3 form-group">
                                <label for="TrainingPlace">PLACE OF TRAINING:</label>
                                <input type="text" class="form-control" name="TrainingPlace" id="TrainingPlace">
                              </div>
                              <div class="col-md-3 mb-3 form-group">
                                <label for="AgencyConducted">AGENCY WHICH CONDUCTED:</label>
                                <select class="form-control" name="AgencyConducted" id="AgencyConducted">
                                  <option>Choose option</option>
                                  <option>HEMB</option>
                                  <option>DOH CVCHD</option>
                                </select>
                              </div>
                              <div class="col-md-3 mb-3 form-group">
                                <label for="AgencyConductedOthers">IF OTHERS PLEASE SPECIFIY N/A:</label>
                                <input type="text" class="form-control" name="AgencyConductedOthers" id="AgencyConductedOthers">
                              </div>
                              <div class="col-md-3 mb-3 form-group">
                                <label for="BlsTotId">BLS TOT ID NUMBER <br> (FOR BLS FACILITATORS TRAINED PRIOR TO 2021):</label>
                                <input type="text" class="form-control" name="BlsTotId" id="BlsTotId">
                              </div>
                              <div class="col-md-3 mb-3 form-group mt-3" >
                                <label for="NotApplicable">ANSWER N/A <br> (IF NOT APPLICABLE):</label>
                                <input type="text" class="form-control" name="NotApplicable" id="NotApplicable">
                              </div>
                            </div>
                        </div>
                        <input type="text" name="ConductedSixTraining" value="YES" hidden/>     
                      <div class="col-md-12" style="margin-top: 5px;">
                          <div class="col-md-3" style="margin-top: 9px;">
                            <label for=""><b>(1)</b> &nbsp; FROM: </label>
                            <input type="date" class="form-control" name="TrnFrom1" id="TrnFrom1">
                          </div>
                          <div class="col-md-3" style="margin-top: 9px;">
                            <label for="">TO:</label>
                            <input type="date" class="form-control" name="TrnTo1" id="TrnTo1">
                          </div>
                          <div class="col-md-6 mb-3 mt-3 ">
                            <label for="" class="d-inline">Name and Place of AGENCY LGU / HOSPITAL / ORGANIZATION / GROUP TRAINED </label>
                            <input type="text" class="form-control" name="TrnFtOthers1" id="TrnFtOthers1" >
                          </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 5px;">
                          <div class="col-md-3" style="margin-top: 16px;">
                          <label for=""><b>(2)</b> &nbsp; FROM: </label>
                            <input type="date" class="form-control" name="TrnFrom2" id="TrnFrom2">
                          </div>
                          <div class="col-md-3" style="margin-top: 16px;">
                            <label for="">TO:</label>
                            <input type="date" class="form-control" name="TrnTo2" id="TrnTo2" >
                          </div>
                          <div class="col-md-6 mb-3 mt-3">
                            <label for="" class="d-inline">Name and Place of AGENCY LGU / HOSPITAL / ORGANIZATION / GROUP TRAINED</label>
                            <input type="text" class="form-control mt-2" name="TrnFtOthers2" id="TrnFtOthers2">
                          </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 5px;">
                          <div class="col-md-3" style="margin-top: 16px;">
                          <label for=""><b>(3)</b> &nbsp; FROM: </label>
                            <input type="date" class="form-control" name="TrnFrom3" id="TrnFrom3" >
                          </div>
                          <div class="col-md-3" style="margin-top: 16px;">
                            <label for="">TO:</label>
                            <input type="date" class="form-control" name="TrnTo3" id="TrnTo3">
                          </div>
                          <div class="col-md-6 mb-3 mt-3">
                            <label for="" class="d-inline">Name and Place of AGENCY LGU / HOSPITAL / ORGANIZATION / GROUP TRAINED</label>
                            <input type="text" class="form-control mt-2" name="TrnFtOthers3" id="TrnFtOthers3" >
                          </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 5px;">
                          <div class="col-md-3" style="margin-top: 16px;">
                          <label for=""><b>(4)</b> &nbsp; FROM: </label>
                            <input type="date" class="form-control" name="TrnFrom4" id="TrnFrom4">
                          </div>
                          <div class="col-md-3" style="margin-top: 16px;">
                            <label for="">TO:</label>
                            <input type="date" class="form-control" name="TrnTo4" id="TrnTo4" >
                          </div>
                          <div class="col-md-6 mb-3 mt-3">
                            <label for="" class="d-inline">Name and Place of AGENCY LGU / HOSPITAL / ORGANIZATION / GROUP TRAINED</label>
                            <input type="text" class="form-control mt-2" name="TrnFtOthers4" id="TrnFtOthers4" >
                          </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 5px;">
                          <div class="col-md-3" style="margin-top: 16px;">
                          <label for=""><b>(5)</b> &nbsp; FROM: </label>
                            <input type="date" class="form-control" name="TrnFrom5" id="TrnFrom5" >
                          </div>
                          <div class="col-md-3" style="margin-top: 16px;">
                            <label for="">TO:</label>
                            <input type="date" class="form-control" name="TrnTo5" id="TrnTo5" >
                          </div>
                          <div class="col-md-6 mb-3 mt-3">
                            <label for="" class="d-inline">Name and Place of AGENCY LGU / HOSPITAL / ORGANIZATION / GROUP TRAINED</label>
                            <input type="text" class="form-control mt-2" name="TrnFtOthers5" id="TrnFtOthers5">
                          </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 5px;">
                          <div class="col-md-3" style="margin-top: 16px;">
                          <label for=""><b>(6)</b> &nbsp; FROM: </label>
                            <input type="date" class="form-control" name="TrnFrom6" id="TrnFrom6">
                          </div>
                          <div class="col-md-3" style="margin-top: 16px;">
                            <label for="">TO:</label>
                            <input type="date" class="form-control" name="TrnTo6" id="TrnTo6">
                          </div>
                          <div class="col-md-6 mb-3 mt-3">
                            <label for="" class="d-inline">Name and Place of AGENCY LGU / HOSPITAL / ORGANIZATION / GROUP TRAINED</label>
                            <input type="text" class="form-control mt-2" name="TrnFtOthers6" id="TrnFtOthers6" >
                          </div>
                      </div>
                      
                </div>                     
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="updateBlsInfoBtn">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>

@include('includes/footer')

<!-- Add DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

<script>
  $(document).ready(function () {
    $('#blsTable').DataTable({
        "lengthMenu": [[15, 25, 50, -1], [15, 25, 50, "All"]],
        "pageLength": 15,
        "dom": 'lrtip'  // This 
    });

    $('#searchInput').on('keyup', function () {
        $('#blsTable').DataTable().search($(this).val()).draw();
    });

    $('.btn-info').on('click', function () {
        var blsId = $(this).closest('tr').find('td:eq(0)').text();

        $.ajax({
            url: '{{ route("trainer.getBlsInfo") }}',
            method: 'GET',
            data: { BlsId: blsId },
            success: function(response) {
                if (response.error) {
                    alert('Bls info not found');
                } else {
                    // Populate modal fields
                    $('#updateBlsInfoForm input, #updateBlsInfoForm select').each(function() {
                        var fieldName = $(this).attr('name');
                        if (fieldName && response[fieldName] !== undefined) {
                            $(this).val(response[fieldName]);
                        }
                    });

                    $('#AreaOfAssignment').val(response.AreaOfAssignment).trigger('change');
                    $('#AreaOfAssignmentSub').val(response.AreaOfAssignmentSub).trigger('change');

                    $('#TrnFrom1').val(response.TrnFrom1);
                    $('#TrnTo1').val(response.TrnTo1);
                    $('#TrnFtOthers1').val(response.TrnFtOthers1);

                    $('#TrnFrom2').val(response.TrnFrom2);
                    $('#TrnTo2').val(response.TrnTo2);
                    $('#TrnFtOthers2').val(response.TrnFtOthers2);

                    $('#TrnFrom3').val(response.TrnFrom3);
                    $('#TrnTo3').val(response.TrnTo3);
                    $('#TrnFtOthers3').val(response.TrnFtOthers3);

                    $('#TrnFrom4').val(response.TrnFrom4);
                    $('#TrnTo4').val(response.TrnTo4);
                    $('#TrnFtOthers4').val(response.TrnFtOthers4);

                    $('#TrnFrom5').val(response.TrnFrom5);
                    $('#TrnTo5').val(response.TrnTo5);
                    $('#TrnFtOthers5').val(response.TrnFtOthers5);

                    $('#TrnFrom6').val(response.TrnFrom6);
                    $('#TrnTo6').val(response.TrnTo6);
                    $('#TrnFtOthers6').val(response.TrnFtOthers6);

                    // Show the modal
                    $('#editModal').modal('show');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching Bls info:', error);
            }
        });
    });

    $('#updateBlsInfoForm').submit(function(event) {
        event.preventDefault();

        $.ajax({
            url: '{{ route("trainer.updateBlsInfo") }}',
            method: 'POST',
            data: $(this).serialize(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                console.log('Bls info updated successfully:', response.message);
                alert('Data updated successfully!');
                $('#editModal').modal('hide');
                location.reload();
            },
            error: function(xhr, status, error) {
                console.error('Error updating Bls info:', xhr.responseText);
                alert('Error updating Bls info: ' + xhr.responseText);
            }
        });
    });
});


    $('.btn-delete').on('click', function() {
            var blsinfoId = $(this).data('id');

            if (confirm('Are you sure you want to delete this bls information?')) {
                $.ajax({
                    type: "DELETE",
                    url: "{{ url('trainer/deleteblsInfo') }}/" + blsinfoId,
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


    $(document).ready(function() {


    $('#areaofAssignment').on('change', function() {
        const assignmentMain = $(this).val();
        const subAssignmentSelect = $('#areaAssignmentSub');

        subAssignmentSelect.empty();
        subAssignmentSelect.append('<option value="">Choose option</option>');

        if (assignmentMain) {
            $.ajax({
                url: '{{ route("trainer.getSubAssignments", ":main") }}'.replace(':main', assignmentMain),
                type: "GET",
                dataType: "json",
                success: function(data) {
                    if (data && data.length > 0) {
                        $.each(data, function(key, value) {
                            subAssignmentSelect.append('<option value="' + value.AreaAssignmentSub + '">' + value.AreaAssignmentSub + '</option>');
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching sub assignments: ', status, error);
                    console.log('Response:', xhr.responseText);
                }
            });
        }
    });
});

</script>


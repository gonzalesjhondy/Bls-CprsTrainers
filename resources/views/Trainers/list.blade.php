@include('includes/header')

@include('includes/sidebar')

@include('includes/topnavbar')

<!-- Add DataTables CSS -->
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                        <!-- <input type="text" class="form-control" id="searchInput" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span> -->
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
                                        <th class="column-title text-nowrap">Training 1 (Others)</th>
                                        <th class="column-title text-nowrap">Training From (2)</th>
                                        <th class="column-title text-nowrap">Training To (2)</th>
                                        <th class="column-title text-nowrap">Training 2 (Others)</th>
                                        <th class="column-title text-nowrap">Training From (3)</th>
                                        <th class="column-title text-nowrap">Training To (3)</th>
                                        <th class="column-title text-nowrap">Training 3 (Others)</th>
                                        <th class="column-title text-nowrap">Training From (4)</th>
                                        <th class="column-title text-nowrap">Training To (4)</th>
                                        <th class="column-title text-nowrap">Training 4 (Others)</th>
                                        <th class="column-title text-nowrap">Training From (5)</th>
                                        <th class="column-title text-nowrap">Training To (5)</th>
                                        <th class="column-title text-nowrap">Training 5 (Others)</th>
                                        <th class="column-title text-nowrap">Training From (6)</th>
                                        <th class="column-title text-nowrap">Training To (6)</th>
                                        <th class="column-title text-nowrap">Training 6 (Others)</th>
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
<!-- /page content -->



<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit BLS-CPR Trainer Information</h5>
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
                                <select class="form-control" id="AreaOfAssignment" name="AreaOfAssignment">
                                  <option value="">Choose option</option>
                                  @foreach($areaofAssignments as $areaofAssignment)
                                  <option value="{{ $areaofAssignment->AreaAssignmentMain }}">{{ $areaofAssignment->AreaAssignmentMain }}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="col-md-3 mb-3 form-group">
                                <label for="areaAssignmentSub">Sub Assignment:</label>
                                <select class="form-control" id="AreaOfAssignmentSub" name="AreaOfAssignmentSub">
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
        // Initialize DataTables without length menu
        $('#blsTable').DataTable({
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]], // Optional: Just to be explicit, but we won't use it
            "pageLength": 25 // Fixed page length
        });

        // Add search functionality to DataTables
        $('#searchInput').on('keyup', function () {
            $('#blsTable').DataTable().search($(this).val()).draw();
        });

        // Handle edit button click
        $('.btn-info').on('click', function () {
            var row = $(this).closest('tr');
            var blsinfo = {
                BlsId: row.find('td:eq(0)').text(),
                Email: row.find('td:eq(1)').text(),
                Lastname: row.find('td:eq(2)').text(),
                Firstname: row.find('td:eq(3)').text(),
                Middlename: row.find('td:eq(4)').text(),
                // Add other fields as needed
                AreaOfAssignment: row.find('td:eq(5)').text(),
                AreaOfAssignmentSub: row.find('td:eq(6)').text(),
                OtherAssignment: row.find('td:eq(7)').text(),
                Suffix: row.find('td:eq(8)').text(),
                AgeBracketDesc: row.find('td:eq(9)').text(),
                Gender: row.find('td:eq(10)').text(),
                ProfWorkDesc: row.find('td:eq(11)').text(),
                ContactNum: row.find('td:eq(12)').text(),
                TrainingDate: row.find('td:eq(13)').text(),
                TrainingPlace: row.find('td:eq(14)').text(),
                AgencyConducted: row.find('td:eq(15)').text(),
                AgencyConductedOthers: row.find('td:eq(16)').text(),
                BlsTotId: row.find('td:eq(17)').text(),
                NotApplicable: row.find('td:eq(18)').text(),
                TrnFrom1: row.find('td:eq(19)').text(),
                TrnTo1: row.find('td:eq(20)').text(),
                TrnFtOthers1: row.find('td:eq(21)').text(),
                TrnFrom2: row.find('td:eq(22)').text(),
                TrnTo2: row.find('td:eq(23)').text(),
                TrnFtOthers2: row.find('td:eq(24)').text(),
                TrnFrom3: row.find('td:eq(25)').text(),
                TrnTo3: row.find('td:eq(26)').text(),
                TrnFtOthers3: row.find('td:eq(27)').text(),
                TrnFrom4: row.find('td:eq(28)').text(),
                TrnTo4: row.find('td:eq(29)').text(),
                TrnFtOthers4: row.find('td:eq(30)').text(),
                TrnFrom5: row.find('td:eq(31)').text(),
                TrnTo5: row.find('td:eq(32)').text(),
                TrnFtOthers5: row.find('td:eq(33)').text(),
                TrnFrom6: row.find('td:eq(34)').text(),
                TrnTo6: row.find('td:eq(35)').text(),
                TrnFtOthers6: row.find('td:eq(36)').text()
            };

            // Fill the modal with data
            $('#blsInfoId').val(blsinfo.BlsId);
            $('#Email').val(blsinfo.Email);
            $('#Lastname').val(blsinfo.Lastname);
            $('#Firstname').val(blsinfo.Firstname);
            $('#Middlename').val(blsinfo.Middlename);

            $('#OtherAssignment').val(blsinfo.OtherAssignment);
            $('#Suffix').val(blsinfo.Suffix);
            $('#AgeBracketDesc').val(blsinfo.AgeBracketDesc);
            $('#Gender').val(blsinfo.Gender); 
            $('#ProfWorkDesc').val(blsinfo.ProfWorkDesc);
            $('#ContactNum').val(blsinfo.ContactNum);
            $('#TrainingDate').val(blsinfo.TrainingDate);
            $('#TrainingPlace').val(blsinfo.TrainingPlace);
            $('#AgencyConducted').val(blsinfo.AgencyConducted);
            $('#AgencyConductedOthers').val(blsinfo.AgencyConductedOthers);
            $('#BlsTotId').val(blsinfo.BlsTotId);
            $('#NotApplicable').val(blsinfo.NotApplicable);
            $('#TrnFrom1').val(blsinfo.TrnFrom1);
            $('#TrnTo1').val(blsinfo.TrnTo1);
            $('#TrnFtOthers1').val(blsinfo.TrnFtOthers1);
            $('#TrnFrom2').val(blsinfo.TrnFrom2);
            $('#TrnTo2').val(blsinfo.TrnTo2);
            $('#TrnFtOthers2').val(blsinfo.TrnFtOthers2);
            $('#TrnFrom3').val(blsinfo.TrnFrom3);
            $('#TrnTo3').val(blsinfo.TrnTo3);
            $('#TrnFtOthers3').val(blsinfo.TrnFtOthers3);
            $('#TrnFrom4').val(blsinfo.TrnFrom4);
            $('#TrnTo4').val(blsinfo.TrnTo4);
            $('#TrnFtOthers4').val(blsinfo.TrnFtOthers4);
            $('#TrnFrom5').val(blsinfo.TrnFrom5);
            $('#TrnTo5').val(blsinfo.TrnTo5);
            $('#TrnFtOthers5').val(blsinfo.TrnFtOthers5);
            $('#TrnFrom6').val(blsinfo.TrnFrom6);
            $('#TrnTo6').val(blsinfo.TrnTo6);
            $('#TrnFtOthers6').val(blsinfo.TrnFtOthers6);

            $('#AreaOfAssignment').val(blsinfo.AreaOfAssignment).trigger('change');
            $('#AreaOfAssignmentSub').val(blsinfo.AreaOfAssignmentSub).trigger('change');

            // Show the modal
            $('#editModal').modal('show');
        });

        // Handle form submission (AJAX or form submit)
        $('#updateBlsInfoForm').on('submit', function (e) {
            e.preventDefault();

            // Collect form data
            var formData = $(this).serialize();

            // Perform AJAX request to update data
            $.ajax({
                url: '{{ route("trainer.updateBlsInfo") }}',
                method: 'POST',
                data: formData,
                success: function (response) {
                    // Handle success response
                    alert('Data updated successfully!');
                    // Optionally, reload the table or update the row with new data
                    location.reload();
                },
                error: function (response) {
                    // Handle error response
                    alert('An error occurred while updating data.');
                }
            });
        });
    });
</script>

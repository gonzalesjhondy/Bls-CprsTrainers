@include('includes/header')

@include('includes/sidebar')

@include('includes/topnavbar')

<!-- Add this modal structure at the bottom of your page -->
    <!-- page content -->
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>BLS-CPR Trainer <small>(Department Of Health - CVCHD)</small></h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                  <label for="blsIdInput"> Please enter your BLS TOT ID # correctly and click "Search".</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="BlsId" id="blsIdInput">
                    <span class="input-group-btn">
                      <button class="btn btn-default edit-modal" type="button" id="scanButton">Search</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row" style="display: block;">
            <div class="clearfix"></div>
          <div class="col-md-12 ">
            <div class="col-md-6">
              <div class="x_panel">
                  <div class="x_title">
                    <h2>Create New </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                  <form method="POST" action="{{ route('trainer.save') }}" >
                        @csrf
                      <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label for="fullname">EMAIL ADDRESS:</label>
                        <input type="text" class="form-control grey" name="Email">
                      </div>
                      <div class="col-md-6 col-sm-6 form-group has-feedback">
                          <label for="areaofAssignment">AREA OF ASSIGNMENT:</label>
                          <select class="form-control" id="areaofAssignment" name="AreaOfAssignment" required>
                              <option value="">Choose option</option>
                              @foreach($areaofAssignments as $areaofAssignment)
                              <option value="{{ $areaofAssignment->AreaAssignmentMain }}">{{ $areaofAssignment->AreaAssignmentMain }}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="col-md-6 mt-2 mb-3">
                          <label for="areaAssignmentSub">Sub Assignment:</label>
                            <select class="form-control" id="areaAssignmentSub" name="AreaOfAssignmentSub" required>
                                <option value="">Choose option</option>
                                @foreach($areaofAssignmentSub as $assignment)
                                <option value="{{ $assignment->id }}">{{ $assignment->AreaAssignmentSub }}</option>
                                @endforeach
                            </select>
                      </div>
                      <div class="col-md-6 mt-2 mb-4">
                        <label for="">If Others (PLEASE SPECIFY)</label>
                        <input type="text" class="form-control" >
                      </div>
                      <h6 class="ml-2 mb-3"> <strong> COMPLETE NAME </strong></h5>
                      <div class="col-md-6 mb-3 ">
                        <label for="">LAST NAME:</label>
                        <input type="text" class="form-control" name="Lastname">
                      </div>
                      <div class="col-md-6 mb-3 ">
                        <label for="">FIRST NAME:</label>
                        <input type="text" class="form-control"  name="Firstname">
                      </div>
                      <div class="col-md-6">
                        <label for="">MIDDLE NAME:</label>
                        <input type="text" class="form-control" name="Middlename">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="">SUFFIX:</label>
                           <select class="form-control" name="Suffix">
                              <option>Choose option</option>
                              <option>JR.</option>
                              <option>SR.</option>
                              <option>II</option>
                              <option>III</option>
                              <option>N/A</option>
                            </select>
                      </div>
                      <h6 class="ml-2 mb-3"> <strong> OTHER DETAILS </strong></h5>
                      <div class="col-md-6">
                        <label for="">AGE BRACKET:</label>
                          <select class="form-control" name="AgeBracketDesc">
                              <option value="">Choose option</option>
                              @foreach($ageBrackets as $ageBracket)
                              <option value="{{ $ageBracket->AgeBracketDesc }}">{{ $ageBracket->AgeBracketDesc }}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="">GENDER:</label>
                          <select class="form-control" name="Gender">
                              <option>Choose option</option>
                              <option value="Male">MALE</option>
                              <option value="Female">FEMALE</option>
                          </select>
                      </div>
                      <div class="col-md-6">
                        <label for="">PROFESSION/NATURE OF WORK/DESIGNATION:</label>
                        <select class="form-control" name="ProfWorkDesc">
                            <option value="">Choose option</option>
                            @foreach($profWorks as $profWork)
                            <option value="{{ $profWork->ProfWorkDesc }}">{{ $profWork->ProfWorkDesc }}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="">REGISTERED CONTACT NO.:</label>
                        <input type="text" class="form-control" name="ContactNum">                     
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="x_panel">
                    <div class="x_content">
                      <br />
                      <h6 class="ml-2 mb-3"> <strong> HISTORY OF BLS OF TRAINERS </strong></h5>
                        <div class="col-md-6 mb-3">
                          <label class="label-align">Date/Month/Year of Training </span> </label>
                            <input id="" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" name="TrainingDate" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                            <script>
                              function timeFunctionLong(input) {
                                setTimeout(function() {
                                  input.type = 'text';
                                }, 60000);
                              }
                            </script>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="fullname">PLACE OF TRAINING:</label>
                          <input type="text" class="form-control grey"  name="TrainingPlace">
                        </div>
                        <div class="col-md-6">
                          <label for="">AGENCY WHICH CONDUCTED:</label>
                            <select class="form-control" name="AgencyConducted">
                                  <option>Choose option</option>
                                  <option>HEMB</option>
                                  <option>DOH CVCHD</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="">IF OTHERS PLEASE SPECIFIY N/A:</label>
                          <input type="text" class="form-control">
                        </div>
                       <div class="col-md-6 mb-3 ">
                          <label for="">BLS TOT ID NUMBER <br> (FOR BLS FACILITATORS TRAINED PRIOR TO 2021):</label>
                          <input type="text" class="form-control" id="" placeholder="">
                        </div>
                        <div class="col-md-6 mb-4 ">
                          <label for="">ANSWER N/A <br> (IF NOT APPLICABLE):</label>
                          <input type="text" class="form-control" id="" placeholder="">
                        </div>
                        <h6 class="ml-2 mb-3"> <strong> CONDUCT OF BLS TRAINING</strong></h5>
                        <div class="col-md-12 mb-3">
                            <label for="">HAVE YOU CONDUCTED AT LEAST SIX(6) BLS-CPR TRAINING STARTS 2021?</label>
                            <br>
                            &nbsp;  &nbsp;  &nbsp; 
                            <input type="radio" name="ConductedSixTraining" value="YES"/> YES                        
                            &nbsp;  &nbsp;  &nbsp;
                            <input type="radio" name="ConductedSixTraining"  value="NO"/> NO 
                            <!-- <br>
                            &nbsp;  &nbsp;  &nbsp;
                            <input type="radio" name="ConductedSixTraining" class="mt-2"  value="LESS-THAN-6"/> IF LESS THAN SIX(6)  -->
                        </div>
                    </div>
                    <div id="yesModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="yesModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="yesModalLabel">BLS-CPR TRAINING CODUCTED STARTING 2021</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <!-- Your modal content goes here -->
                            <div class="col-md-12" id="section1" style="margin-top: 5px;">
                            <div class="alert alert-primary alert-dismissible fade show " role="alert">
                               Please use the remove button or click the trash icon to remove if you conducted fewer than 6 trainings.
                            </div>
                            <div class="row" id="section1"> <!-- Add an ID to the section to show/hide -->
                              <div class="col-md-3" style="margin-top: 10px;">
                                  <label for=""> (1) &nbsp; FROM: </label>
                                  <input type="date" class="form-control" name="TrnFrom1">
                              </div>
                              <div class="col-md-3" style="margin-top: 10px;">
                                  <label for="">TO:</label>
                                  <input type="date" class="form-control" name="TrnTo1">
                              </div>
                              <div class="col-md-6 mb-3">
                                  <label for="" class="d-inline">Name and Place of AGENCY LGU / HOSPITAL / ORGANIZATION / GROUP TRAINED </label>
                                  <div class="input-group">
                                      <input type="text" class="form-control" name="TrnFtOthers1">
                                      <div class="input-group-append" style="margin-left:15px">
                                          <button type="button" class="btn btn-danger" onclick="confirmHideSection('section1')">
                                              <i class="fa fa-trash fa-sm"></i>
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>

                            </div>
                            <div class="col-md-12" id="section2" style="margin-top: 5px;">
                              <div class="row">
                                <div class="col-md-3" style="margin-top: 10px;">
                                  <label for=""> (2) &nbsp; FROM: </label>
                                  <input type="date" class="form-control" name="TrnFrom2">
                                </div>
                                <div class="col-md-3" style="margin-top: 10px;">
                                  <label for="">TO:</label>
                                  <input type="date" class="form-control" name="TrnTo2">
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="" class="d-inline">Name and Place of AGENCY LGU / HOSPITAL / ORGANIZATION / GROUP TRAINED </label>
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="TrnFtOthers2">
                                    <div class="input-group-append" style="margin-left:15px">
                                          <button type="button" class="btn btn-danger" onclick="confirmHideSection('section2')">
                                              <i class="fa fa-trash fa-sm"></i>
                                          </button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12" id="section3" style="margin-top: 5px;">
                              <div class="row">
                                <div class="col-md-3" style="margin-top: 10px;">
                                  <label for=""> (3) &nbsp; FROM: </label>
                                  <input type="date" class="form-control" name="TrnFrom3">
                                </div>
                                <div class="col-md-3" style="margin-top: 10px;">
                                  <label for="">TO:</label>
                                  <input type="date" class="form-control" name="TrnTo3">
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="" class="d-inline">Name and Place of AGENCY LGU / HOSPITAL / ORGANIZATION / GROUP TRAINED </label>
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="TrnFtOthers3">
                                    <div class="input-group-append" style="margin-left:15px">
                                          <button type="button" class="btn btn-danger" onclick="confirmHideSection('section3')">
                                              <i class="fa fa-trash fa-sm"></i>
                                          </button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12" id="section4" style="margin-top: 5px;">
                              <div class="row">
                                <div class="col-md-3" style="margin-top: 10px;">
                                  <label for=""> (4) &nbsp; FROM: </label>
                                  <input type="date" class="form-control" name="TrnFrom4">
                                </div>
                                <div class="col-md-3" style="margin-top: 10px;">
                                  <label for="">TO:</label>
                                  <input type="date" class="form-control" name="TrnTo4">
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="" class="d-inline">Name and Place of AGENCY LGU / HOSPITAL / ORGANIZATION / GROUP TRAINED </label>
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="TrnFtOthers4">
                                    <div class="input-group-append" style="margin-left:15px">
                                          <button type="button" class="btn btn-danger" onclick="confirmHideSection('section4')">
                                              <i class="fa fa-trash fa-sm"></i>
                                          </button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12" id="section5" style="margin-top: 5px;">
                              <div class="row">
                                <div class="col-md-3" style="margin-top: 10px;">
                                  <label for=""> (5) &nbsp; FROM: </label>
                                  <input type="date" class="form-control" name="TrnFrom5">
                                </div>
                                <div class="col-md-3" style="margin-top: 10px;">
                                  <label for="">TO:</label>
                                  <input type="date" class="form-control" name="TrnTo5">
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="" class="d-inline">Name and Place of AGENCY LGU / HOSPITAL / ORGANIZATION / GROUP TRAINED </label>
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="TrnFtOthers5">
                                    <div class="input-group-append" style="margin-left:15px">
                                          <button type="button" class="btn btn-danger" onclick="confirmHideSection('section5')">
                                              <i class="fa fa-trash fa-sm"></i>
                                          </button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12" id="section6" style="margin-top: 5px;">
                              <div class="row">
                                <div class="col-md-3" style="margin-top: 10px;">
                                  <label for=""> (6) &nbsp; FROM: </label>
                                  <input type="date" class="form-control" name="TrnFrom6">
                                </div>
                                <div class="col-md-3" style="margin-top: 10px;">
                                  <label for="">TO:</label>
                                  <input type="date" class="form-control" name="TrnTo6">
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="" class="d-inline">Name and Place of AGENCY LGU / HOSPITAL / ORGANIZATION / GROUP TRAINED </label>
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="TrnFtOthers6">
                                    <div class="input-group-append" style="margin-left:15px">
                                          <button type="button" class="btn btn-danger" onclick="confirmHideSection('section6')">
                                              <i class="fa fa-trash fa-sm"></i>
                                          </button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" id="yesSubmitButton" class="btn btn-success">Submit</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                    <div class="col-md-6 mb-2 " id="noContent" style="display:none">  
                      <div class="x_panel">
                        <div class="x_content">
                          <br />
                          <h6 class="ml-2 mb-3"> <strong> THANK YOU! </strong></h5>
                            <div class="col-md-12 mb-2">
                              <h6 for="">PLEASE COMPLY WITH THE REQUIRED SIX FACILATED TRAINING  REQUIREMENTS  <br>TO RENEW BLS TOT ID:</label>
                            </div>
                            <button type="submit" id="NoSubmitButton" class="btn btn-success ml-2 mb-2">Submit</button>
                        </div>
                      </div>
                  </div>
                </div> 
  
                <div id="lessthan6Modal" class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title"> BLS-CPR TRAINING CODUCTED STARTING 2021 - IF LESS THAN SIX(6) </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                              <!-- Your modal content goes here -->
                              <button type="button" class="btn btn-info ml-4 add-new-button" id="add-new-button"> + ADD NEW</button>
                              <div id="fields-container">
                                <div class="col-md-12" style="margin-top: 5px;">
                                  <div class="col-md-3" style="margin-top: 10px;">
                                    <label for="">FROM: </label>
                                    <input type="date" class="form-control"  id="TrnFrom1lessthan" name="TrnFrom1">
                                  </div>
                                  <div class="col-md-3" style="margin-top: 10px;">
                                    <label for="">TO:</label>
                                    <input type="date" class="form-control" id="TrnTo1lessthan" name="TrnTo1">
                                  </div>
                                  <div class="col-md-6 mb-3">
                                    <label for="" class="d-inline">Name and Place of AGENCY LGU / HOSPITAL / ORGANIZATION / GROUP TRAINED </label>
                                    <input type="text" class="form-control" id="TrnFTOthers1lessthan" name="TrnFtOthers1">
                                  </div>
                                </div>
                              </div>
                            </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" id="lessThan6SubmitButton" class="btn btn-success">Submit</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                </form>
                <div class="col-md-6">
                </div>
              </div>
						</div>
            </div>
          </div>
        </div>
        <!-- /page content -->

    <div class="modal fade" id="scanModal" tabindex="-1" role="dialog" aria-labelledby="scanModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="scanModalLabel">For existing data: Please check and review the details before clicking Submit!</h5>
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
                                <select class="form-control" id="areaofAssignmentMain" name="AreaOfAssignment">
                                  <option value="">Choose option</option>
                                  @foreach($areaofAssignments as $areaofAssignment)
                                  <option value="{{ $areaofAssignment->AreaAssignmentMain }}">{{ $areaofAssignment->AreaAssignmentMain }}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="col-md-3 mb-3 form-group">
                                <label for="areaAssignmentSub">Sub Assignment:</label>
                                <select class="form-control" id="areaAssignmentSUB" name="AreaOfAssignmentSub">
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

<script>

  

function confirmHideSection(sectionId) {
    if (confirm("Are you sure you want to remove?")) {
        hideSection(sectionId);
    }
}

function hideSection(sectionId) {
    document.getElementById(sectionId).style.display = 'none';
}


document.addEventListener('DOMContentLoaded', function() {
    // Select the radio buttons for gender
    const yesRadioButton = document.querySelector('input[name="ConductedSixTraining"][value="YES"]');
    const noRadioButton = document.querySelector('input[name="ConductedSixTraining"][value="NO"]');
    const lessThan6RadioButton = document.querySelector('input[name="ConductedSixTraining"][value="LESS-THAN-6"]');
    
    // Select modal and related elements
    const yesModal = $('#yesModal'); // Assuming jQuery is available for modal interaction
    const lessthan6Modal = $('#lessthan6Modal'); // Assuming jQuery is available for modal interaction
    const noContent = document.getElementById('noContent');
    const yesSubmitButton = document.getElementById('yesSubmitButton');
    const noSubmitButton = document.getElementById('NoSubmitButton'); // Corrected ID for the "No" submit button
    const lessThan6SubmitButton = document.getElementById('lessThan6SubmitButton'); // Corrected ID for the "No" submit button

    const trnFrom1Input = document.getElementById('TrnFrom1lessthan');
    const trnTo1Input = document.getElementById('TrnTo1lessthan');
    const trnFTOthers1Input = document.getElementById('TrnFTOthers1lessthan');

    // Event listener for yes radio button change
    yesRadioButton.addEventListener('change', function() {
        if (yesRadioButton.checked) {
            // Show the modal when yes is selected
            yesModal.modal('show');
            // Show the submit button and hide no content
            yesSubmitButton.style.display = 'block';
            lessThan6SubmitButton.style.display = 'none';
            noContent.style.display = 'none';
        } 
    });

    // Event listener for no radio button change
    noRadioButton.addEventListener('change', function() {
        if (noRadioButton.checked) {
            // Show the no content and hide submit buttons for yes and less than 6
            noContent.style.display = 'block';
            yesSubmitButton.style.display = 'none';
            lessThan6SubmitButton.style.display = 'none';
        }
    });

    // Event listener for submit button click inside the modal for "Yes"
    yesSubmitButton.addEventListener('click', function() {
        // Submit the form inside the yes modal
        trnFrom1Input.disabled = true;
        trnTo1Input.disabled = true;
        trnFTOthers1Input.disabled = true;
        const yesForm = yesModal.find('form');
        if (yesForm.length) {
            yesForm.submit();
        }
    });
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



$(document).ready(function() {
    $('#areaofAssignmentMain').on('change', function() {
        const assignmentMain = $(this).val();
        const subAssignmentSelect = $('#areaAssignmentSUB');

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


document.addEventListener('DOMContentLoaded', function () {
    let count = 1;
    const maxFields = 5;
    const button = document.getElementById('add-new-button');
    const container = document.getElementById('fields-container');

    button.addEventListener('click', function () {
        if (count < maxFields) {
            count++;
            const newFields = `
                <div class="col-md-12" style="margin-top: 5px;" >
                    <div class="col-md-3" style="margin-top: 10px;">
                        <label for="">FROM: </label>
                        <input type="date" class="form-control" name="TrnFrom${count}">
                    </div>
                    <div class="col-md-3" style="margin-top: 10px;">
                        <label for="">TO:</label>
                        <input type="date" class="form-control" name="TrnTo${count}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" class="d-inline">Name and Place of AGENCY LGU / HOSPITAL / ORGANIZATION / GROUP TRAINED </label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="TrnFtOthers${count}">
                            &nbsp;
                            <div class="input-group-append">
                                <button type="button" class="btn btn-danger btn-md remove-button ml-2"> X</button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            container.insertAdjacentHTML('beforeend', newFields);
        }
    });

    container.addEventListener('click', function (e) {
        if (e.target && e.target.classList.contains('remove-button')) {
            e.target.closest('.col-md-12').remove();
            count--;
        }
    });
});


$(document).ready(function() {
    // Function to check if BlsId exists in the database
    function checkBlsIdExists(BlsId) {
        $.ajax({
            url: '/check-blsid',
            method: 'GET',
            data: { BlsId: BlsId },
            success: function(response) {
                $('#scanButton').prop('disabled', !response.exists);
                $('#scanButton').toggleClass('text-muted', !response.exists)
                    .toggleClass('text-primary font-weight-bold', response.exists);
            },
            error: function(xhr, status, error) {
                console.error('Error checking BlsId:', error);
            }
        });
    }

    // Validate BlsId input on keyup event
    $('#blsIdInput').keyup(function() {
        var BlsId = $(this).val().trim();
        if (BlsId !== '') {
            checkBlsIdExists(BlsId);
        } else {
            $('#scanButton').prop('disabled', true)
                .removeClass('text-primary font-weight-bold').addClass('text-muted');
        }
    });

    // Click event handler for #scanButton
    $('#scanButton').click(function() {
        var blsId = $('#blsIdInput').val();

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

                    $('#scanModal').modal('show');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching Bls info:', error);
            }
        });
    });

    // Function to update Bls info on form submission
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
                $('#scanModal').modal('hide');
            },
            error: function(xhr, status, error) {
                console.error('Error updating Bls info:', xhr.responseText);
                alert('Error updating Bls info: ' + xhr.responseText);
            }
        });
    });
});

</script>          
                       
                        

                          
                 
						
       
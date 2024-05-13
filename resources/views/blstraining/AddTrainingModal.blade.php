<!-- Add Training View Modal -->
<!-- Modal -->
<div class="modal fade" role="dialog" id="AddTrainingModalHistory">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addTrainerModalLabel">History of BLS Training Of Trainers</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" id="addTrainerModalBody" style="max-height: 800px; overflow-y: auto;">
          <form action="{{ route('add.historyTraining') }}" method="post" class="form-horizontal form-label-left">        
                  <!-- First Column -->
                  @csrf
                  <input type="hidden" name="trainer_id" id="TrainerId" value="{{ $trainer_id }}">
                  <div class="form-group">
                    <label class="control-label">Date/Month/Year Of Training</label>
                    <input type="date" class="form-control" name="dateTraining">
                  </div>

                  <div class="form-group">
                    <label class="control-label">Place Of Training</label>
                    <input type="text" class="form-control" name="placeTraining">
                  </div>

                  <div class="form-group">
                      <label class="control-label">Agency Which Conducted The Training</label>
                        <select class="form-control" id="agencyConduct" name="agencyConduct">
                          <option selected >Select option</option>
                          <option value="HEMB">HEMB</option>
                          <option value="Dentist">DOH CVCHD</option>
                          <option value="others">others</option>
                        </select>
                    </div>
                    <div class="form-group" id="conductagency" style="display: none;">
                        <!-- <label class="control-label">Other Profession</label> -->
                        <input type="text" class="form-control" id="conductAgency" name="other_counduct_agency" placeholder="Other Agency Conducted">
                    </div>

                    <div class="form-group">
                      <label class="control-label">BLS TOT ID NUMBER</label>
                      <input type="text" class="form-control" name="Tot_Idnumber">
                    </div>
                    <hr>
                  <p class="bg-warning" style="color:black">Conduct of Bls Training</p>
                  
                  <div class="form-group">
                    <label class="control-label">Have you conducted at least six(6) BLS-CPR Training Starting 2021?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="conductedStatus" id="yesOption" value="yes" onchange="toggleTrainingFields()">
                        <label class="form-check-label" for="yesOption">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="conductedStatus" id="noOption" value="no" onchange="toggleTrainingFields()">
                        <label class="form-check-label" for="noOption">
                            No
                        </label>
                    </div>
                </div>
                <div id="trainingFields" style="display: none;">
                    <div class="form-group">
                        <label class="control-label">Date From</label>
                        <input type="date" class="form-control" name="dateFrom1">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Date To</label>
                        <input type="date" class="form-control" name="dateTo1">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Name and Place of Agency/LGU/Hospital/Organizational/Group Trained</label>
                        <input type="text" class="form-control" name="name_Trained1">
                    </div>
                    <!-- 2nd conducted --><hr>
                    <div class="form-group">
                        <label class="control-label">Date From</label>
                        <input type="date" class="form-control" name="dateFrom2">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Date To</label>
                        <input type="date" class="form-control" name="dateTo2">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Name and Place of Agency/LGU/Hospital/Organizational/Group Trained</label>
                        <input type="text" class="form-control" name="name_Trained2">
                    </div>
                    <!-- 3rd conducted --><hr>
                    <div class="form-group">
                        <label class="control-label">Date From</label>
                        <input type="date" class="form-control" name="dateFrom3">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Date To</label>
                        <input type="date" class="form-control" name="dateTo3">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Name and Place of Agency/LGU/Hospital/Organizational/Group Trained</label>
                        <input type="text" class="form-control" name="name_Trained3">
                    </div>
                    
                    <!-- 4th conducted --><hr>
                    <div class="form-group">
                        <label class="control-label">Date From</label>
                        <input type="date" class="form-control" name="dateFrom4">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Date To</label>
                        <input type="date" class="form-control" name="dateTo4">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Name and Place of Agency/LGU/Hospital/Organizational/Group Trained</label>
                        <input type="text" class="form-control" name="name_Trained4">
                    </div>

                    <!-- 5th conducted --><hr>
                    <div class="form-group">
                        <label class="control-label">Date From</label>
                        <input type="date" class="form-control" name="dateFrom5">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Date To</label>
                        <input type="date" class="form-control" name="dateTo5">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Name and Place of Agency/LGU/Hospital/Organizational/Group Trained</label>
                        <input type="text" class="form-control" name="name_Trained5">
                    </div>

                    <!-- 6th conducted --><hr>
                    <div class="form-group">
                            <label class="control-label">Date From</label>
                            <input type="date" class="form-control" name="dateFrom6">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Date To</label>
                            <input type="date" class="form-control" name="dateTo6">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Name and Place of Agency/LGU/Hospital/Organizational/Group Trained</label>
                            <input type="text" class="form-control" name="name_Trained6">
                        </div>
                    </div>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
              </div>
          </form>
        </div>

      </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

    var agencyConduct = document.getElementById("agencyConduct");
    var conductagency = document.getElementById("conductagency");
    
    agencyConduct.addEventListener("change", function() {
        console.log("Selected value:", agencyConduct.value);
        if(agencyConduct.value == "others"){
            conductagency.style.display = "block";
        }else{
            conductagency.style.display = "none";
        }
    });


    function toggleTrainingFields() {
        var yesOption = document.getElementById('yesOption');
        var trainingFields = document.getElementById('trainingFields');
        console.log('yesOption.checked', yesOption.checked);
        if(yesOption.checked){
            trainingFields.style.display = 'block';
        } else{
            trainingFields.style.display = 'none';
        }
    }
</script>
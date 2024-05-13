<!-- Add Trainer User Modal -->
<div class="modal fade" role="dialog" id="addTrainerModal">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addTrainerModalLabel">Add Trainer</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" id="addTrainerModalBody">
          <form action="{{ route('trainer.add') }}" method="post" class="form-horizontal form-label-left">
              @csrf
              <div class="row">
              <input type="hidden" name="municipalityId" id="selectedMunicipality">
              <input type="hidden" name="ProvinceId" id="SelectProvincedId">
              <input type="hidden" name="profession" id="selectedProfession">
              <input type="hidden" name="suffix" id="selected_suffix">
              <input type="hidden" name="AreaAssign" id="selected_area">
              <input type="hidden" name="gender" id="select_gender">
              <div class="col-md-6">
                  <!-- First Column -->
                  <div class="form-group">
                    <label class="control-label">Email</label>
                    <input type="email" class="form-control" name="email">
                  </div>

                  <div class="form-group">
                      <label class="control-label">Municipality</label>
                      <select class="form-control" id="municipalitySelect">
                          <option selected>Select Municipality</option>
                      </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">LGU</label>
                    <select class="form-control" id="provinceSelect">
                      <option value="">Select LGU</option>
                      @foreach($provinces as $province)
                        <option value="{{$province->id}}">{{ $province->description }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="control-label">Area of Assignment</label>
                    <select class="form-control" id="AreaSelect" name="AreaAssign">
                        <option selected >Select option</option>
                        <option value="LGU">LGU</option>
                        <option value="DOH CVCHD">DOH CVCHD</option>
                        <option value="Hospital">Hospital</option>
                        <option value="National Government Agency">National Government Agency</option>
                        <option value="others">others</option>
                      </select>
                  </div>
                  <div class="form-group" id="otherArea" style="display: none;">
                        <!-- <label class="control-label"><strong>Other Area Of Assignment</strong></label> -->
                        <input type="text" class="form-control" id="areaAssign" name="others_AreaAssign" placeholder="Other Area Assignment">
                    </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                      <label class="control-label">First name</label>
                      <input type="text" class="form-control" name="fname">
                    </div>
                    <div class="form-group">
                      <label class="control-label">Last name</label>
                      <input type="text" class="form-control" name="lname">
                    </div>
                  </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Middle name</label>
                    <input type="text" class="form-control" name="mname">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Suffix</label>
                      <select class="form-control" id="selectedsuffix">
                        <option selected>Select option</option>
                        <option value="Sr.">Sr.</option>
                        <option value="Jr.">Jr.</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                        <option value="VI">VI</option>
                      </select>
                  </div>
                </div>

                <div class="col-md-6">
                    <!-- Second Column -->
                    <div class="form-group">
                      <label class="control-label">Gender</label>
                        <select class="form-control" id="Selectgender">
                          <option selected >Select option</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Profession</label>
                        <select class="form-control" id="professionSelect" name="profession">
                          <option selected >Select option</option>
                          <option value="Physician">Physician</option>
                          <option value="Dentist">Dentist</option>
                          <option value="Nurse">Nurse</option>
                          <option value="Med tech">Med tech</option>
                          <option value="Mide wife">Mid wife</option>
                          <option value="LDRRMO">LDRRMO</option>
                          <option value="others">others</option>
                        </select>
                    </div>
                    <div class="form-group" id="otherProfession" style="display: none;">
                        <!-- <label class="control-label">Other Profession</label> -->
                        <input type="text" class="form-control" id="profession" name="others_profession" placeholder="Other Profession">
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <label class="control-label">Age Bracket</label>
                        <select class="form-control" name="ageBracket">
                          <option selected >Select option</option>
                          <option value="20 to 29 years old">20 to 29 years old</option>
                          <option value="30 to 39 years old">30 to 39 years old</option>
                          <option value="40 to 49 years old">40 to 49 years old</option>
                          <option value="50 to 59 years old">50 to 59 years old</option>
                        </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label">Contact Number</label>
                    <input type="number" class="form-control" name="mobilenumber">
                  </div>
                </div>
                <!-- <p class="bg-warning center" style="color:black">History of BLS Training</p> -->
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

<!-- Add Training View Modal -->
<!-- Modal -->
<div class="modal fade" role="dialog" id="ViewTrainingModal">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addTrainerModalLabel">History of BLS Training Of Trainers</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" id="addTrainerModalBody" style="max-height: 800px; overflow-y: auto;">
          <form action="" method="post" class="form-horizontal form-label-left">        
                  <!-- First Column -->
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
                        <select class="form-control" id="professionSelect" name="profession">
                          <option selected >Select option</option>
                          <option value="HEMB">HEMB</option>
                          <option value="Dentist">DOH CVCHD</option>
                          <option value="others">others</option>
                        </select>
                    </div>
                    <div class="form-group" id="otherProfession" style="display: none;">
                        <!-- <label class="control-label">Other Profession</label> -->
                        <input type="text" class="form-control" id="profession" name="others_profession" placeholder="Other Profession">
                    </div>

                    <div class="form-group">
                      <label class="control-label">BLS TOT ID NUMBER</label>
                      <input type="text" class="form-control" name="placeTraining">
                    </div>
                    <hr>
                  <p class="bg-warning" style="color:black">Conduct of Bls Training</p>
                  
                  <!-- <div class="form-group">
                    <label class="control-label">Have you conducted at least six(6) BLS-CPR Training Starting 2021?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="conductTraining" id="yesOption" value="yes">
                        <label class="form-check-label" for="yesOption">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="conductTraining" id="noOption" value="no">
                        <label class="form-check-label" for="noOption">
                            No
                        </label>
                    </div>
                </div> -->
                <div class="form-group">
                    <label class="control-label">Date From</label>
                    <input type="date" class="form-control" name="dateFrom">
                </div>
                <div class="form-group">
                    <label class="control-label">Date To</label>
                    <input type="date" class="form-control" name="dateTo">
                </div>
                <div class="form-group">
                    <label class="control-label">Name and Place of Agency/LGU/Hospital/Organizational/Group Trained</label>
                    <input type="text" class="form-control" name="name_Trained">
                  </div>
                  <!-- 2nd conducted --><hr>
                  <div class="form-group">
                    <label class="control-label">Date From</label>
                    <input type="date" class="form-control" name="dateFrom">
                </div>
                <div class="form-group">
                    <label class="control-label">Date To</label>
                    <input type="date" class="form-control" name="dateTo">
                </div>
                <div class="form-group">
                    <label class="control-label">Name and Place of Agency/LGU/Hospital/Organizational/Group Trained</label>
                    <input type="text" class="form-control" name="name_Trained">
                </div>
              <!-- 3rd conducted --><hr>
              <div class="form-group">
                    <label class="control-label">Date From</label>
                    <input type="date" class="form-control" name="dateFrom">
                </div>
                <div class="form-group">
                    <label class="control-label">Date To</label>
                    <input type="date" class="form-control" name="dateTo">
                </div>
                <div class="form-group">
                    <label class="control-label">Name and Place of Agency/LGU/Hospital/Organizational/Group Trained</label>
                    <input type="text" class="form-control" name="name_Trained">
                </div>
                
              <!-- 4th conducted --><hr>
              <div class="form-group">
                    <label class="control-label">Date From</label>
                    <input type="date" class="form-control" name="dateFrom">
                </div>
                <div class="form-group">
                    <label class="control-label">Date To</label>
                    <input type="date" class="form-control" name="dateTo">
                </div>
                <div class="form-group">
                    <label class="control-label">Name and Place of Agency/LGU/Hospital/Organizational/Group Trained</label>
                    <input type="text" class="form-control" name="name_Trained">
                </div>

                 <!-- 5th conducted --><hr>
              <div class="form-group">
                    <label class="control-label">Date From</label>
                    <input type="date" class="form-control" name="dateFrom">
                </div>
                <div class="form-group">
                    <label class="control-label">Date To</label>
                    <input type="date" class="form-control" name="dateTo">
                </div>
                <div class="form-group">
                    <label class="control-label">Name and Place of Agency/LGU/Hospital/Organizational/Group Trained</label>
                    <input type="text" class="form-control" name="name_Trained">
                </div>

                 <!-- 6th conducted --><hr>
              <div class="form-group">
                    <label class="control-label">Date From</label>
                    <input type="date" class="form-control" name="dateFrom">
                </div>
                <div class="form-group">
                    <label class="control-label">Date To</label>
                    <input type="date" class="form-control" name="dateTo">
                </div>
                <div class="form-group">
                    <label class="control-label">Name and Place of Agency/LGU/Hospital/Organizational/Group Trained</label>
                    <input type="text" class="form-control" name="name_Trained">
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

<style>
.modal-footer {
    padding: 10px 10px !important; /* Adjust the padding as per your requirement */
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  var profSelect = document.getElementById("professionSelect");
  var otherProfessionInput = document.getElementById("otherProfession");
  
  profSelect.addEventListener("change", function() {
    console.log("Selected value:", profSelect.value);
    if(profSelect.value === "others"){
      otherProfessionInput.style.display = "block";
    }else{
      otherProfessionInput.style.display = "none";
    }
  });

  var AreaSelect = document.getElementById("AreaSelect");
  var otherAreaAssign = document.getElementById("otherArea");

  AreaSelect.addEventListener("change", function() {
    if(AreaSelect.value == "others"){
      otherAreaAssign.style.display = "block";
    }else{
      otherAreaAssign.style.display = "none";
    }
  });

  $(document).ready(function() {
      
      $('#professionSelect').on('change', function() {
          $('#selectedProfession').val($(this).val());
      });

      $('#selectedsuffix').on('change', function() {
        $('#selected_suffix').val($(this).val());
      });

      $('#AreaSelect').on('change', function() {
        $('#selected_area').val($(this).val());
      });

      $('#Selectgender').on('change', function() {
        $('#select_gender').val($(this).val());
      });

      $('#provinceSelect').on('change', function() {
        var selectedProvinceId = $(this).val();
        var provinceId = $(this).val();
        $('#SelectProvincedId').val(provinceId);
        $.ajax({
          type: 'POST',
          headers: {
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
             },
          url: '{{ route("trainer.muncity") }}',
          data: {
            id: selectedProvinceId
          },
          success: function(response){
            console.log(response.muncities);
            var municipal = response.muncities;
            var municipalSelect = $('#municipalitySelect');
            municipalSelect.empty();
            municipalSelect.append('<option selected>Select Municipality</option>');
            $.each(municipal, function(key, value){
              console.log('value',value.description);
              municipalSelect.append('<option value="' + value.id +'">' + value.description + '<option>');
              
            });
            municipalSelect.find('option').filter(function() {
              return !this.value.trim();
            }).remove();

            $('#municipalitySelect').on('change', function() {
              $('#selectedMunicipality').val($(this).val());
            });
          }
        })
      });
  });
  
</script>
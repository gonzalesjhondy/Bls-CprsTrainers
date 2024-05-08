<!-- Modal -->
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
          <form action="" method="" class="form-horizontal form-label-left">
            <div class="row">
            <div class="col-md-6">
                <!-- First Column -->
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <input type="text" class="form-control" name="email">
                </div>

                <div class="form-group">
                  <label class="control-label">Municity</label>
                  <select class="form-control">
                      <option selected >Select Municipal</option>
                      @foreach($muncities as $muncity)
                      <option value="$muncity->id">
                      {{ $muncity->description }}
                      </option>
                      @endforeach
                      <option value="others">others</option>
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
                    <option value="others">others</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Area of Assignment</label>
                  <select class="form-control">
                      <option selected >Select option</option>
                      <option value="LGU">LGU</option>
                      <option value="DOH CVCHD">DOH CVCHD</option>
                      <option value="Hospital">Hospital</option>
                      <option value="National Government Agency">National Government Agency</option>
                      <option value="others">others</option>
                    </select>
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
                    <select class="form-control">
                      <option selected >Select option</option>
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
                      <select class="form-control">
                        <!-- <option selected >Select option</option> -->
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Profession</label>
                      <select class="form-control" id="professionSelect">
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
                      <label class="control-label">Other Profession</label>
                      <input type="text" class="form-control" id="profession" name="othersprofession">
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                <label class="control-label">Age Bracket</label>
                      <select class="form-control">
                        <option selected >Select option</option>
                        <option value="20 to 29 years old">20 to 29 years old</option>
                        <option value="30 to 39 years old">30 to 39 years old</option>
                        <option value="40 to 49 years old">40 to 49 years old</option>
                        <option value="50 to 59 years old">50 to 59 years old</option>
                      </select>
                </div>
                <div class="form-group">
                <label class="control-label">Contact Number</label>
                  <input type="text" class="form-control" name="number">
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

<style>
.modal-footer {
    padding: 10px 10px !important; /* Adjust the padding as per your requirement */
  }
</style>

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

//   document.getElementById('provinceSelect').addEventListener('change', function() {
//     var provinceId = this.value;
//   console.log('provinceId', provinceId);
//     if (provinceId) {
//         $.ajax({
//             url: "{{ route('trainer.index') }}",
//             type: "GET",
//             headers: {
//                 'X-CSRF-TOKEN': '{{ csrf_token() }}'
//             },
//             data: {
//                 id: provinceId
//             },
//             success: function(data) {
//                 // Handle the response data as needed
//                 console.log('data', data.id);
//             },
//             error: function(xhr, status, error) {
//                 console.error('Error:', error);
//             }
//         });
//     }
// });
document.getElementById('provinceSelect').addEventListener('change', function(event) {
        event.stopPropagation(); // Prevent the event from bubbling up to the modal
        event.preventDefault(); // Prevent the default action of the event (form submission)

        var selectedProvinceId = this.value;
        if(selectedProvinceId !== '') {
            fetch('{{ route("trainer.index") }}?id=' + selectedProvinceId)
                .then(response => {
                    if (response.ok) {
                        return response.text();
                    } else {
                        throw new Error('Network response was not ok.');
                    }
                })
                .then(html => {
                    document.body.innerHTML = html; // Replace the current HTML with the response
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });
        } else {
            // Handle the case where no province is selected
        }
    });
</script>
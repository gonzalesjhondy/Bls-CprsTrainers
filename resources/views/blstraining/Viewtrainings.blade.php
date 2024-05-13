@include('includes/header')

@include('includes/sidebar')

@include('includes/topnavbar')
 <!-- page content -->
 <div class="right_col" role="main">

    
    <div class="row justify-content-center ">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small>Add Trainings</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <!-- <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a> -->
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!-- Content -->
                    
                        <div class="row">
                            <div class="col-md-2">
                                <p><strong>First Name:</strong> {{$trainer->fname}}</p>
                            </div>
                            <div class="col-md-2">
                                <p><strong>Last Name:</strong> {{$trainer->lname}}</p>
                            </div>
                            <div class="col-md-2">
                                <p><strong>Contact number:</strong> {{$trainer->contact_number}}</p>
                            </div>
                            <div class="col-md-2">
                                <p><strong>Email:</strong> {{$trainer->email}}</p>
                            </div>
                            <div class="col-md-2">
                                <p><strong>Area Assign:</strong> {{$trainer->assignment}}</p>
                            </div>
                            <div class="col-md-2">
                                <span class="badge badge-success"  onclick="AddBlsTraining({{$trainer->id}})" >Add Trainings</span>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

</div>
@include('blstraining/AddTrainingModal', ['trainer_id' => $trainer->id]) 
@include('includes/footer')
<style>
.btn-group-xs > .btn, .btn-xs {
padding: 1px 5px;
font-size: 12px;
line-height: 1.5;
border-radius: 3px;
}
</style>

<script>

  function AddBlsTraining(trainer_id){
    console.log('triner', trainer_id);
    $('#AddTrainingModalHistory').modal('show');

  }
  
</script>


 <!-- <div class="table-responsive">
                            <div style="overflow-x: auto;">
                                <table class="table">
                                    <tr>
                                        <td><strong>First Name:</strong> {{$trainer->fname}}</td>
                                        <td><strong>Last Name:</strong> {{$trainer->lname}}</td>
                                        <td><strong>Contact number:</strong> {{$trainer->contact_number}}</td>
                                        <td><strong>Email:</strong> {{$trainer->email}}</td>
                                        <td><strong>Area Assign:</strong> {{$trainer->assignment}}</td>
                                        <td><span class="badge badge-success" onclick="AddBlsTraining()">Add Trainings</span></td>
                                    </tr>
                                </table>
                            </div>
                        </div> -->
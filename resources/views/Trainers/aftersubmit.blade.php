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
              <h2>THANK YOU FOR SUBMITTING!</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <a href="{{ route('trainer.index') }}" class="btn btn-success">SUBMIT ANOTHER ENTRY</a>
              <br />
              <br />
       
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->



@include('includes/footer')

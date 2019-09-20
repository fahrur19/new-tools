<!DOCTYPE html>
<html>
@include('templates.head')
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">

  @include('templates.header')

  @include('templates.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
        Dashboard
        <small>Control panel IMM</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <h1>Ini Halaman Dashboard IMM</h1>
      <div>
<!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Date picker</h3>
            </div>
            <div class="box-body">
              <!-- Date -->
              <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker10">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->     
              <!-- Date range -->
              <!-- <div class="form-group">
                <label>Date range:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservation">
                </div> -->
                <!-- /.input group -->
              </div>
              <!-- /.form group -->   

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->          
        </div>
        <!-- /.col (right) -->
        <div class="col-md-6">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Antrian Tools IMM</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Mode</th>
                      <th>Nama Topic</th>
                      <th>Status</th>
                      <th>Time Frame</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      <td> 4</td>
                      <td>X</td>
                      <td>X</td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.0
                      </td>
                      <td>Win 95+</td>
                      <td>5</td>
                      <td>C</td>
                      <td>X</td>
                    </tr>
                  </tbody>                 
                </table>
              </div>              
            </div>
          </div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @include('templates.footer')

</div>
<!-- ./wrapper -->

@include('templates.setting')
</body>
</html>

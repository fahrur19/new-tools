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
          Account
          <small></small>
        </h1>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-5">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tabFB" data-toggle="tab">Facebook</a></li>
                <li><a href="#tabTW" data-toggle="tab">Twitter</a></li>
                <li><a href="#tabIG" data-toggle="tab">Instagram</a></li>
                <li><a href="#tabYT" data-toggle="tab">Youtube</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tabFB">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Start Date</label>
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker1">
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>End Date</label>
                            <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" id="datepicker2">
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <form action="#" method="get">
                        <div class="input-group">
                          <input type="text" name="q" class="form-control" placeholder="Search Topic">
                              <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                              </span>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group" style="padding-top:10px">
                          <label>Pilih Topic</label>
                            <select multiple class="form-control">
                              <option>ID Topic - Nama Topic A</option>
                              <option>ID Topic - Nama Topic B</option>
                              <option>ID Topic - Nama Topic C</option>
                              <option>ID Topic - Nama Topic D</option>
                              <option>ID Topic - Nama Topic E</option>
                              <option>ID Topic - Nama Topic F</option>
                              <option>ID Topic - Nama Topic G</option>
                              <option>ID Topic - Nama Topic H</option>
                              <option>ID Topic - Nama Topic I</option>
                              <option>ID Topic - Nama Topic J</option>
                            </select>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <button type="submit" class="btn btn-block btn-default">Clear</button>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                      <button type="submit" class="btn btn-primary btn-block btn-default">Submit</button>
                    </div>
                  </div>                    
                  <div class="row"><div class="col-md-12"></div></div>
                </div>
                <div class="tab-pane" id="tabTW">
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Start Date</label>
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker3">
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>End Date</label>
                            <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" id="datepicker4">
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <form action="#" method="get">
                        <div class="input-group">
                          <input type="text" name="q" class="form-control" placeholder="Search Topic">
                              <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                              </span>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group" style="padding-top:10px">
                          <label>Pilih Topic</label>
                            <select multiple class="form-control">
                              <option>ID Topic - Nama Topic A</option>
                              <option>ID Topic - Nama Topic B</option>
                              <option>ID Topic - Nama Topic C</option>
                              <option>ID Topic - Nama Topic D</option>
                              <option>ID Topic - Nama Topic E</option>
                              <option>ID Topic - Nama Topic F</option>
                              <option>ID Topic - Nama Topic G</option>
                              <option>ID Topic - Nama Topic H</option>
                              <option>ID Topic - Nama Topic I</option>
                              <option>ID Topic - Nama Topic J</option>
                            </select>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <button type="submit" class="btn btn-block btn-default">Clear</button>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                      <button type="submit" class="btn btn-primary btn-block btn-default">Submit</button>
                    </div>
                  </div>                    
                  <div class="row"><div class="col-md-12"></div></div>
                </div>
                <div class="tab-pane" id="tabIG">
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Start Date</label>
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker3">
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>End Date</label>
                            <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" id="datepicker4">
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <form action="#" method="get">
                        <div class="input-group">
                          <input type="text" name="q" class="form-control" placeholder="Search Topic">
                              <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                              </span>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group" style="padding-top:10px">
                          <label>Pilih Topic</label>
                            <select multiple class="form-control">
                              <option>ID Topic - Nama Topic A</option>
                              <option>ID Topic - Nama Topic B</option>
                              <option>ID Topic - Nama Topic C</option>
                              <option>ID Topic - Nama Topic D</option>
                              <option>ID Topic - Nama Topic E</option>
                              <option>ID Topic - Nama Topic F</option>
                              <option>ID Topic - Nama Topic G</option>
                              <option>ID Topic - Nama Topic H</option>
                              <option>ID Topic - Nama Topic I</option>
                              <option>ID Topic - Nama Topic J</option>
                            </select>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <button type="submit" class="btn btn-block btn-default">Clear</button>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                      <button type="submit" class="btn btn-primary btn-block btn-default">Submit</button>
                    </div>
                  </div>                    
                  <div class="row"><div class="col-md-12"></div></div>
                </div>
                <div class="tab-pane" id="tabYT">
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Start Date</label>
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker5">
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>End Date</label>
                            <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" id="datepicker6">
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <form action="#" method="get">
                        <div class="input-group">
                          <input type="text" name="q" class="form-control" placeholder="Search Topic">
                              <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                              </span>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group" style="padding-top:10px">
                          <label>Pilih Account</label>
                            <select multiple class="form-control">
                              <option>ID Topic - Nama Topic A</option>
                              <option>ID Topic - Nama Topic B</option>
                              <option>ID Topic - Nama Topic C</option>
                              <option>ID Topic - Nama Topic D</option>
                              <option>ID Topic - Nama Topic E</option>
                              <option>ID Topic - Nama Topic F</option>
                              <option>ID Topic - Nama Topic G</option>
                              <option>ID Topic - Nama Topic H</option>
                              <option>ID Topic - Nama Topic I</option>
                              <option>ID Topic - Nama Topic J</option>
                            </select>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <button type="submit" class="btn btn-block btn-default">Clear</button>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                      <button type="submit" class="btn btn-primary btn-block btn-default">Submit</button>
                    </div>
                  </div>                    
                  <div class="row"><div class="col-md-12"></div></div>
                </div>
              </div>            
            </div>
          </div>
          <div class="col-md-7">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Antrian Tools IPA</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">              
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Platform</th>
                      <th>Category</th>
                      <th>Mode</th>
                      <th>Nama</th>
                      <th>Status</th>
                      <th>Time Frame</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($account['data'] as $accounts)
                  <tr>
                      <td>{{$accounts['criteria_id']}}</td>
                      <td>{{$accounts['platform']}}</td>
                      <td>{{$accounts['criteria']}}</td>
                      <td>{{$accounts['mode']}}</td>
                      <td>{{$accounts['criteria_name']}}</td>
                      <td>@if ($accounts['status'] == '1') <i>Done</i> @else <i>Proses</i> @endif</td>
                      <td>{{$accounts['timeframe']}}</td>
                      <td>{{ date("F d, Y", strtotime($accounts['pubminute'])) }}</td>
                    </tr>
                    @endforeach
                  </tbody>                 
                </table>
                
              </div>              
            </div>
          </div>
        </div>
      </section>
  </div>
  <!-- /.content-wrapper -->
  
  @include('templates.footer')

</div>
<!-- ./wrapper -->

@include('templates.setting')
</body>
</html>

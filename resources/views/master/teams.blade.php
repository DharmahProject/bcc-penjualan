@extends('layouts.template')

@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Data Teams</h3>
        </div>
  
        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>
  
      <div class="clearfix"></div>
  
      <div class="row">
        <div class="col-md-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Pencarian Data</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
              
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form class="form-label-left input_mask">
  
                <div class="col-md-6 col-sm-6  form-group">
                  <input type="text" class="form-control " id="inputSuccess2" placeholder="Nama">
                </div>
  
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                  <input type="text" class="form-control" id="inputSuccess3" placeholder="Sales Coordinator">
                </div>
                
                  <div class="col-md-6 text-left">
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus active"></i> Tambah Data</button>
                  </div>
                  <div class="col-md-6 text-right">
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-search active"></i>  Cari Data</button>
                    <button class="btn btn-secondary btn-sm" type="reset "><i class="fa fa-close active"></i>  Reset</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  
      <div class="row">
        <div class="col-md-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Teams</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
              
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="row">
              {{-- content here --}}
                    <div class="col-md-3  profile_details">
                      <div class="well profile_view">
                          <div class="col-sm-12">
                              <h4 class="brief"><i>Digital Strategist</i></h4>
                              <div class="left col-sm-7">
                                  <h2>Nicole Pearson</h2>
                                  <p><strong>About: </strong> Web Designer / UI. </p>
                                  <ul class="list-unstyled">
                                      <li><i class="fa fa-building"></i> Address: </li>
                                      <li><i class="fa fa-phone"></i> Phone #: </li>
                                  </ul>
                              </div>
                              <div class="right col-sm-5 text-center">
                                  <img src="{{ url('assets/images/img.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                          </div>
                          <div class=" bottom text-center">
                              <div class=" col-sm-6 emphasis">
                                  <p class="ratings">
                                      <a>4.0</a>
                                      <a href="#"><span class="fa fa-star"></span></a>
                                      <a href="#"><span class="fa fa-star"></span></a>
                                      <a href="#"><span class="fa fa-star"></span></a>
                                      <a href="#"><span class="fa fa-star"></span></a>
                                      <a href="#"><span class="fa fa-star-o"></span></a>
                                  </p>
                              </div>
                              <div class=" col-sm-6 emphasis">
                                  <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-user">
                                  </i> <i class="fa fa-comments-o"></i> </button>
                                  <button type="button" class="btn btn-primary btn-sm">
                                  <i class="fa fa-user"> </i> View Profile
                                </button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3  profile_details">
                    <div class="well profile_view">
                        <div class="col-sm-12">
                            <h4 class="brief"><i>Digital Strategist</i></h4>
                            <div class="left col-sm-7">
                                <h2>Nicole Pearson</h2>
                                <p><strong>About: </strong> Web Designer / UI. </p>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-building"></i> Address: </li>
                                    <li><i class="fa fa-phone"></i> Phone #: </li>
                                </ul>
                            </div>
                            <div class="right col-sm-5 text-center">
                                <img src="{{ url('assets/images/img.jpg') }}" alt="" class="img-circle img-fluid">
                            </div>
                        </div>
                        <div class=" bottom text-center">
                            <div class=" col-sm-6 emphasis">
                                <p class="ratings">
                                    <a>4.0</a>
                                    <a href="#"><span class="fa fa-star"></span></a>
                                    <a href="#"><span class="fa fa-star"></span></a>
                                    <a href="#"><span class="fa fa-star"></span></a>
                                    <a href="#"><span class="fa fa-star"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                            </div>
                            <div class=" col-sm-6 emphasis">
                                <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-user">
                                </i> <i class="fa fa-comments-o"></i> </button>
                                <button type="button" class="btn btn-primary btn-sm">
                                <i class="fa fa-user"> </i> View Profile
                              </button>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="col-md-3 profile_details">
                  <div class="well profile_view">
                      <div class="col-sm-12">
                          <h4 class="brief"><i>Digital Strategist</i></h4>
                          <div class="left col-sm-7">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UI. </p>
                              <ul class="list-unstyled">
                                  <li><i class="fa fa-building"></i> Address: </li>
                                  <li><i class="fa fa-phone"></i> Phone #: </li>
                              </ul>
                          </div>
                          <div class="right col-sm-5 text-center">
                              <img src="{{ url('assets/images/img.jpg') }}" alt="" class="img-circle img-fluid">
                          </div>
                      </div>
                      <div class=" bottom text-center">
                          <div class=" col-sm-6 emphasis">
                              <p class="ratings">
                                  <a>4.0</a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                          </div>
                          <div class=" col-sm-6 emphasis">
                              <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-user">
                              </i> <i class="fa fa-comments-o"></i> </button>
                              <button type="button" class="btn btn-primary btn-sm">
                              <i class="fa fa-user"> </i> View Profile
                            </button>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-3 profile_details">
                  <div class="well profile_view">
                      <div class="col-sm-12">
                          <h4 class="brief"><i>Digital Strategist</i></h4>
                          <div class="left col-sm-7">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UI. </p>
                              <ul class="list-unstyled">
                                  <li><i class="fa fa-building"></i> Address: </li>
                                  <li><i class="fa fa-phone"></i> Phone #: </li>
                              </ul>
                          </div>
                          <div class="right col-sm-5 text-center">
                              <img src="{{ url('assets/images/img.jpg') }}" alt="" class="img-circle img-fluid">
                          </div>
                      </div>
                      <div class=" bottom text-center">
                          <div class=" col-sm-6 emphasis">
                              <p class="ratings">
                                  <a>4.0</a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                          </div>
                          <div class=" col-sm-6 emphasis">
                              <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-user">
                              </i> <i class="fa fa-comments-o"></i> </button>
                              <button type="button" class="btn btn-primary btn-sm">
                              <i class="fa fa-user"> </i> View Profile
                            </button>
                          </div>
                      </div>
                  </div>
                </div>
                
                <div class="col-md-3 profile_details">
                  <div class="well profile_view">
                      <div class="col-sm-12">
                          <h4 class="brief"><i>Digital Strategist</i></h4>
                          <div class="left col-sm-7">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UI. </p>
                              <ul class="list-unstyled">
                                  <li><i class="fa fa-building"></i> Address: </li>
                                  <li><i class="fa fa-phone"></i> Phone #: </li>
                              </ul>
                          </div>
                          <div class="right col-sm-5 text-center">
                              <img src="{{ url('assets/images/img.jpg') }}" alt="" class="img-circle img-fluid">
                          </div>
                      </div>
                      <div class=" bottom text-center">
                          <div class=" col-sm-6 emphasis">
                              <p class="ratings">
                                  <a>4.0</a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                          </div>
                          <div class=" col-sm-6 emphasis">
                              <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-user">
                              </i> <i class="fa fa-comments-o"></i> </button>
                              <button type="button" class="btn btn-primary btn-sm">
                              <i class="fa fa-user"> </i> View Profile
                            </button>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-3 profile_details">
                  <div class="well profile_view">
                      <div class="col-sm-12">
                          <h4 class="brief"><i>Digital Strategist</i></h4>
                          <div class="left col-sm-7">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UI. </p>
                              <ul class="list-unstyled">
                                  <li><i class="fa fa-building"></i> Address: </li>
                                  <li><i class="fa fa-phone"></i> Phone #: </li>
                              </ul>
                          </div>
                          <div class="right col-sm-5 text-center">
                              <img src="{{ url('assets/images/img.jpg') }}" alt="" class="img-circle img-fluid">
                          </div>
                      </div>
                      <div class=" bottom text-center">
                          <div class=" col-sm-6 emphasis">
                              <p class="ratings">
                                  <a>4.0</a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                          </div>
                          <div class=" col-sm-6 emphasis">
                              <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-user">
                              </i> <i class="fa fa-comments-o"></i> </button>
                              <button type="button" class="btn btn-primary btn-sm">
                              <i class="fa fa-user"> </i> View Profile
                            </button>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-3 profile_details">
                  <div class="well profile_view">
                      <div class="col-sm-12">
                          <h4 class="brief"><i>Digital Strategist</i></h4>
                          <div class="left col-sm-7">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UI. </p>
                              <ul class="list-unstyled">
                                  <li><i class="fa fa-building"></i> Address: </li>
                                  <li><i class="fa fa-phone"></i> Phone #: </li>
                              </ul>
                          </div>
                          <div class="right col-sm-5 text-center">
                              <img src="{{ url('assets/images/img.jpg') }}" alt="" class="img-circle img-fluid">
                          </div>
                      </div>
                      <div class=" bottom text-center">
                          <div class=" col-sm-6 emphasis">
                              <p class="ratings">
                                  <a>4.0</a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                          </div>
                          <div class=" col-sm-6 emphasis">
                              <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-user">
                              </i> <i class="fa fa-comments-o"></i> </button>
                              <button type="button" class="btn btn-primary btn-sm">
                              <i class="fa fa-user"> </i> View Profile
                            </button>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-3 profile_details">
                  <div class="well profile_view">
                      <div class="col-sm-12">
                          <h4 class="brief"><i>Digital Strategist</i></h4>
                          <div class="left col-sm-7">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UI. </p>
                              <ul class="list-unstyled">
                                  <li><i class="fa fa-building"></i> Address: </li>
                                  <li><i class="fa fa-phone"></i> Phone #: </li>
                              </ul>
                          </div>
                          <div class="right col-sm-5 text-center">
                              <img src="{{ url('assets/images/img.jpg') }}" alt="" class="img-circle img-fluid">
                          </div>
                      </div>
                      <div class=" bottom text-center">
                          <div class=" col-sm-6 emphasis">
                              <p class="ratings">
                                  <a>4.0</a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                          </div>
                          <div class=" col-sm-6 emphasis">
                              <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-user">
                              </i> <i class="fa fa-comments-o"></i> </button>
                              <button type="button" class="btn btn-primary btn-sm">
                              <i class="fa fa-user"> </i> View Profile
                            </button>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-3 profile_details">
                  <div class="well profile_view">
                      <div class="col-sm-12">
                          <h4 class="brief"><i>Digital Strategist</i></h4>
                          <div class="left col-sm-7">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UI. </p>
                              <ul class="list-unstyled">
                                  <li><i class="fa fa-building"></i> Address: </li>
                                  <li><i class="fa fa-phone"></i> Phone #: </li>
                              </ul>
                          </div>
                          <div class="right col-sm-5 text-center">
                              <img src="{{ url('assets/images/img.jpg') }}" alt="" class="img-circle img-fluid">
                          </div>
                      </div>
                      <div class=" bottom text-center">
                          <div class=" col-sm-6 emphasis">
                              <p class="ratings">
                                  <a>4.0</a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                          </div>
                          <div class=" col-sm-6 emphasis">
                              <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-user">
                              </i> <i class="fa fa-comments-o"></i> </button>
                              <button type="button" class="btn btn-primary btn-sm">
                              <i class="fa fa-user"> </i> View Profile
                            </button>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-3 profile_details">
                  <div class="well profile_view">
                      <div class="col-sm-12">
                          <h4 class="brief"><i>Digital Strategist</i></h4>
                          <div class="left col-sm-7">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UI. </p>
                              <ul class="list-unstyled">
                                  <li><i class="fa fa-building"></i> Address: </li>
                                  <li><i class="fa fa-phone"></i> Phone #: </li>
                              </ul>
                          </div>
                          <div class="right col-sm-5 text-center">
                              <img src="{{ url('assets/images/img.jpg') }}" alt="" class="img-circle img-fluid">
                          </div>
                      </div>
                      <div class=" bottom text-center">
                          <div class=" col-sm-6 emphasis">
                              <p class="ratings">
                                  <a>4.0</a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                          </div>
                          <div class=" col-sm-6 emphasis">
                              <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-user">
                              </i> <i class="fa fa-comments-o"></i> </button>
                              <button type="button" class="btn btn-primary btn-sm">
                              <i class="fa fa-user"> </i> View Profile
                            </button>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-3 profile_details">
                  <div class="well profile_view">
                      <div class="col-sm-12">
                          <h4 class="brief"><i>Digital Strategist</i></h4>
                          <div class="left col-sm-7">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UI. </p>
                              <ul class="list-unstyled">
                                  <li><i class="fa fa-building"></i> Address: </li>
                                  <li><i class="fa fa-phone"></i> Phone #: </li>
                              </ul>
                          </div>
                          <div class="right col-sm-5 text-center">
                              <img src="{{ url('assets/images/img.jpg') }}" alt="" class="img-circle img-fluid">
                          </div>
                      </div>
                      <div class=" bottom text-center">
                          <div class=" col-sm-6 emphasis">
                              <p class="ratings">
                                  <a>4.0</a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                          </div>
                          <div class=" col-sm-6 emphasis">
                              <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-user">
                              </i> <i class="fa fa-comments-o"></i> </button>
                              <button type="button" class="btn btn-primary btn-sm">
                              <i class="fa fa-user"> </i> View Profile
                            </button>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-3 profile_details">
                  <div class="well profile_view">
                      <div class="col-sm-12">
                          <h4 class="brief"><i>Digital Strategist</i></h4>
                          <div class="left col-sm-7">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UI. </p>
                              <ul class="list-unstyled">
                                  <li><i class="fa fa-building"></i> Address: </li>
                                  <li><i class="fa fa-phone"></i> Phone #: </li>
                              </ul>
                          </div>
                          <div class="right col-sm-5 text-center">
                              <img src="{{ url('assets/images/img.jpg') }}" alt="" class="img-circle img-fluid">
                          </div>
                      </div>
                      <div class=" bottom text-center">
                          <div class=" col-sm-6 emphasis">
                              <p class="ratings">
                                  <a>4.0</a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                          </div>
                          <div class=" col-sm-6 emphasis">
                              <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-user">
                              </i> <i class="fa fa-comments-o"></i> </button>
                              <button type="button" class="btn btn-primary btn-sm">
                              <i class="fa fa-user"> </i> View Profile
                            </button>
                          </div>
                      </div>
                  </div>
                </div>



              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
@endsection
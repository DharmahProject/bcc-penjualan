@extends('layouts.template')

@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Data Teams</h3>
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
                <div class="form-group col-md-6 col-sm-6">
                    <label class="col-form-label col-md-3 col-sm-3">Sales Manager</label>
                    <div class="col-md-9 col-sm-9">
                        <select class="form-control" placeholder="Pilih Manager" id="txtSalesManager">
                            <option value="">-- Pilih Sales Manager --</option>
                            @foreach ($salesmanagerList as $sm)
                                <option value="{{ $sm->id_team }}">{{ $sm->nama }}</option>    
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group col-md-6 col-sm-6">
                    <label class="col-form-label col-md-3 col-sm-3">Sales Coordinator</label>
                    <div class="col-md-9 col-sm-9">
                        <select class="form-control" placeholder="Pilih Manager" id="txtSalesCoordinator">
                            <option value="">-- Pilih Sales Coordinator --</option>
                            @foreach ($saleskoordinatorList as $sk)
                                <option value="{{ $sk->id_team }}">{{ $sk->nama }}</option>    
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-6  form-group">
                    <label class="col-form-label col-md-3 col-sm-3">Nama</label>
                    <div class="col-md-9 col-sm-9">
                        <input type="text" class="form-control" placeholder="Nama" id="txtNama">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                  <div class="col-md-6 text-left">
                    <a href="{{ url('teams/addedit') }}" class="btn btn-success btn-sm"><i class="fa fa-plus active"></i> Tambah Data</a>
                  </div>
                  <div class="col-md-6 text-right">
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-search active"></i>  Cari Data</button>
                    <button class="btn btn-secondary btn-sm" onclick="resetSearchTeam()"><i class="fa fa-close active"></i>  Reset</button>
                  </div>
                </div>
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

              @foreach ($allTeam as $team)
              <div class="col-md-3  profile_details">
                <div class="well profile_view">
                    <div class="col-sm-12">
                        <h4 class="brief"><i>{{ $team->jabatan->nama_jabatan }}</i></h4>
                        <div class="left col-sm-7">
                            <h2>{{ $team->nama }}</h2>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i> Alamat : {{ $team->alamat }}</li>
                                <li><i class="fa fa-phone"></i> No Telepon #: {{ $team->telepon }}</li>
                            </ul>
                        </div>
                        <div class="right col-sm-5 text-center">
                            <img src="{{ url('assets/images/team/' . ($team->profile_picture != null && $team->profile_picture != '' ? $team->profile_picture : 'user.png')) }}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                    <div class=" bottom text-center border-top">
                        <div class=" col-sm-12 emphasis mt-1">
                            <h4 class="brief"><i>Sales Coordinator</i></h4>
                            <div class="left col-sm-7">
                                <h2>{{ $team->sales_coordinator }}</h2>
                            </div>
                        </div>
                        <div class=" col-sm-12 emphasis mt-1">
                            <h4 class="brief"><i>Sales Manager</i></h4>
                            <div class="left col-sm-7">
                                <h2>{{ $team->sales_manager }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class=" bottom text-center border-top">
                        <div class=" col-sm-12 emphasis mt-1">
                            <button type="button" class="btn btn-danger btn-sm"> <i class="fa fa-trash">
                            </i> Hapus data</button>
                            <a href="{{ route('teams.addedit', $team->id_team) }}"  class="btn btn-primary btn-sm">
                            <i class="fa fa-user"> </i> Lihat profil team</a>
                          </button>
                        </div>
                    </div>
                </div>
            </div>

              @endforeach

            <!--
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
                </div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
<script>
    function resetSearchTeam()
    {
        $("#txtSalesCoordinator").val("");
        $("#txtSalesManager").val("");
        $("#txtNama").val("");
    }
</script>

@endsection
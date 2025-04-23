@extends('layouts.backend')

@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Admin</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="row">
        <div class="col-xxl-8 d-flex align-items-stretch">
            <div class="card w-100 overflow-hidden rounded-4">
                <div class="card-body position-relative p-4">
                    <div class="row">
                        <div class="col-12 col-sm-7">
                            <div class="d-flex align-items-center gap-3 mb-5">
                                <img src="https://i.pinimg.com/474x/eb/ee/a9/ebeea9996d671395d68ce1d84081c453.jpg" class="rounded-circle bg-grd-info p-1"
                                    width="60" height="60" alt="user">
                                <div class="">
                                    <p class="mb-0 fw-semibold">Selamat datang</p>
                                    <h4 class="fw-semibold mb-0 fs-4 mb-0">{{ Auth::user()->name }}</h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-5">
                                <div class="">
                                    <h4 class="mb-1 fw-semibold d-flex align-content-center">Data Artikel<i
                                            class="ti ti-arrow-up-right fs-5 lh-base text-success"></i>
                                    </h4>
                                    <p class="mb-3">Today's Sales</p>
                                    <div class="progress mb-0" style="height:5px;">
                                        <div class="progress-bar bg-grd-success" role="progressbar" style="width: 60%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="vr"></div>
                                <div class="">
                                    <h4 class="mb-1 fw-semibold d-flex align-content-center">Data Produk<i
                                            class="ti ti-arrow-up-right fs-5 lh-base text-success"></i>
                                    </h4>
                                    <p class="mb-3">Growth Rate</p>
                                    <div class="progress mb-0" style="height:5px;">
                                        <div class="progress-bar bg-grd-danger" role="progressbar" style="width: 60%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-5">
                            <div class="welcome-back-img pt-4">
                                <img src="{{ asset('backend/assets/images/gallery/welcome-back-3.png') }}" height="180"
                                    alt="">
                            </div>
                        </div>
                    </div><!--end row-->
                </div>
            </div>
        </div>

        {{-- <div class="col-xl-6 col-xxl-4 d-flex align-items-stretch">
            <div class="card w-100 rounded-4">
                <div class="card-header border-0 p-3 border-bottom">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="">
                            <h5 class="mb-0">Data Artikel</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="user-list p-3">
                        <div class="d-flex flex-column gap-3">
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Judul Artikel</th>
                                        <th>Gambar</th>
                                    </tr>
                                </thead>
                            </table>
                            <tbody>
                                @foreach ($artikel as $item)
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $item->judul_artikel }}</td>
                                    <td>
                                        <img src="{{ asset('/images/artikel/' . $item->image) }}" width="45">
                                    </td>
                                @endforeach
                            </tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-12 col-xxl-6 d-flex">
          <div class="card rounded-4 w-100">
            <div class="card-body">
              <div class="d-flex align-items-start justify-content-between mb-3">
                <div class="">
                  <h5 class="mb-0">Data Artikel</h5>
                </div>
                <div class="dropdown">
                </div>
              </div>
              <div class="card-body p-0">
                    <div class="user-list p-3">
                        <div class="d-flex flex-column gap-3">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Judul Artikel</th>
                                        <th scope="col">Gambar</th>
                                    </tr>
                                </thead>

                            <tbody>
                                @foreach ($artikel as $item)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $item->judul_artikel }}</td>
                                    <td>
                                        <img src="{{ asset('/images/artikel/' . $item->image) }}" width="45">
                                    </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>

              {{-- <div class="table-responsive">
                <table class="table align-middle mb-0 table-striped">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Source Name</th>
                      <th>Status</th>
                      <th>Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="">
                          <h6 class="mb-0">10 Sep,2024</h6>
                          <p class="mb-0">8:20 PM</p>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center flex-row gap-3">
                          <div class="">
                            <img src="assets/images/apps/paypal.png" width="35" alt="">
                          </div>
                          <div class="">
                            <h6 class="mb-0">Paypal</h6>
                            <p class="mb-0">Business Plan</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card-lable bg-success text-success bg-opacity-10">
                          <p class="text-success mb-0">Paid</p>
                        </div>
                      </td>
                      <td>
                        <h5 class="mb-0">$5897</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="">
                          <h6 class="mb-0">10 Sep,2024</h6>
                          <p class="mb-0">8:20 PM</p>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center flex-row gap-3">
                          <div class="">
                            <img src="assets/images/apps/13.png" width="35" alt="">
                          </div>
                          <div class="">
                            <h6 class="mb-0">Visa</h6>
                            <p class="mb-0">Business Plan</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card-lable bg-danger text-danger bg-opacity-10">
                          <p class="text-danger mb-0">Unpaid</p>
                        </div>
                      </td>
                      <td>
                        <h5 class="mb-0">$9638</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="">
                          <h6 class="mb-0">10 Sep,2024</h6>
                          <p class="mb-0">8:20 PM</p>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center flex-row gap-3">
                          <div class="">
                            <img src="assets/images/apps/behance.png" width="35" alt="">
                          </div>
                          <div class="">
                            <h6 class="mb-0">Behance</h6>
                            <p class="mb-0">Business Plan</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card-lable bg-success text-success bg-opacity-10">
                          <p class="text-success mb-0">Paid</p>
                        </div>
                      </td>
                      <td>
                        <h5 class="mb-0">$9638</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="">
                          <h6 class="mb-0">10 Sep,2024</h6>
                          <p class="mb-0">8:20 PM</p>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center flex-row gap-3">
                          <div class="">
                            <img src="assets/images/apps/07.png" width="35" alt="">
                          </div>
                          <div class="">
                            <h6 class="mb-0">Spotify</h6>
                            <p class="mb-0">Business Plan</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card-lable bg-success text-success bg-opacity-10">
                          <p class="text-success mb-0">Paid</p>
                        </div>
                      </td>
                      <td>
                        <h5 class="mb-0">$9638</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="">
                          <h6 class="mb-0">10 Sep,2024</h6>
                          <p class="mb-0">8:20 PM</p>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center flex-row gap-3">
                          <div class="">
                            <img src="assets/images/apps/05.png" width="35" alt="">
                          </div>
                          <div class="">
                            <h6 class="mb-0">Google</h6>
                            <p class="mb-0">Business Plan</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card-lable bg-danger text-danger bg-opacity-10">
                          <p class="text-danger mb-0">Unpaid</p>
                        </div>
                      </td>
                      <td>
                        <h5 class="mb-0">$9638</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="">
                          <h6 class="mb-0">10 Sep,2024</h6>
                          <p class="mb-0">8:20 PM</p>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center flex-row gap-3">
                          <div class="">
                            <img src="assets/images/apps/apple.png" width="35" alt="">
                          </div>
                          <div class="">
                            <h6 class="mb-0">Apple</h6>
                            <p class="mb-0">Business Plan</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card-lable bg-success text-success bg-opacity-10">
                          <p class="text-success mb-0">Paid</p>
                        </div>
                      </td>
                      <td>
                        <h5 class="mb-0">$9638</h5>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div> --}}
            </div>
          </div>
        </div>
        <div class="col-12 col-xxl-6 d-flex">
            <div class="card rounded-4 w-100">
              <div class="card-body">
                <div class="d-flex align-items-start justify-content-between mb-3">
                  <div class="">
                    <h5 class="mb-0">Data Produk</h5>
                  </div>
                  <div class="dropdown">
                  </div>
                </div>
                <div class="card-body p-0">
                      <div class="user-list p-3">
                          <div class="d-flex flex-column gap-3">
                              <table class="table mb-0">
                                  <thead>
                                      <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">nama_produk</th>
                                          <th scope="col">harga</th>
                                          <th scope="col">Gambar</th>
                                      </tr>
                                  </thead>

                              <tbody>
                                  @foreach ($produk as $item)
                                  <tr>
                                      <th scope="row">{{ $loop->index + 1 }}</th>
                                      <td>{{ $item->nama_produk }}</td>
                                      <td>{{ $item->harga }}</td>
                                      <td>
                                          <img src="{{ asset('/images/produk/' . $item->image) }}" width="45">
                                      </td>
                                      </tr>
                                  @endforeach

                              </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
        {{-- <div class="col-12 col-xxl-6 d-flex">
          <div class="card rounded-4 w-100">
            <div class="card-body">
              <div class="d-flex align-items-start justify-content-between mb-3">
                <div class="">
                  <h5 class="mb-0">Data User</h5>
                </div>
                <div class="dropdown">
                </div>
              </div>
              <div class="card-body p-0">
                    <div class="user-list p-3">
                        <div class="d-flex flex-column gap-3">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">name</th>
                                        <th scope="col">email</th>
                                    </tr>
                                </thead> --}}

                            {{-- <tbody>
                                @foreach ($user as $item)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{$item->email}}</td>
                                    <td>

                                    </td>
                                    </tr>
                                @endforeach

                            </tbody> --}}
                            </table>
                        </div>
                    </div>
                </div>@endsection

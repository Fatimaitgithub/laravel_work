@extends('layouts.app_admin')
@section('title', 'Dashboard')
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Dashboard</h4>
                    <div class="page-title-right">
                        @php
                            date_default_timezone_set('Asia/Karachi');
                            $now = date('l j F Y');
                        @endphp
                        <h3 style="text-transform:capitalize">{{ $now }}</h3>
                        <h4 class="digital-clock" id="digital-clock"></h4>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <div class="h-100">
                    <div class="row mb-3 pb-1">
                        <div class="col-12">
                            <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                <div class="flex-grow-1">
                                    @php
                                        date_default_timezone_set('Asia/Karachi');
                                        $currentHour = date('G');
                                        $greeting;
                                    @endphp
                                    @if ($currentHour >= 5 && $currentHour < 12)
                                        @php
                                            $greeting = 'Good Morning';
                                        @endphp
                                    @elseif ($currentHour >= 12 && $currentHour < 17)
                                        @php
                                            $greeting = 'Good Afternoon';
                                        @endphp
                                    @elseif ($currentHour >= 17 && $currentHour < 19)
                                        @php
                                            $greeting = 'Good Evening';
                                        @endphp
                                    @else
                                        @php
                                            $greeting = 'Good Night';
                                        @endphp
                                    @endif
                                    <h4 class="fs-16 mb-1">{{ $greeting }}, {{ $user->name }}!</h4>
                                </div>
                            </div><!-- end card header -->
                        </div>
                        <!--end col-->
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="fw-medium text-muted mb-0">Users</p>
                                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                    data-target="28.05">28.05</span>k</h2>
                                            <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0"><i
                                                        class="ri-arrow-up-line align-middle"></i> 16.24 % </span> vs.
                                                previous month</p>
                                        </div>
                                        <div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-info-subtle rounded-circle fs-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-users text-info material-shadow">
                                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="9" cy="7" r="4"></circle>
                                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-3 col-md-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="fw-medium text-muted mb-0">Sessions</p>
                                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                    data-target="97.66">97.66</span>k</h2>
                                            <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0"><i
                                                        class="ri-arrow-down-line align-middle"></i> 3.96 % </span> vs.
                                                previous month</p>
                                        </div>
                                        <div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span
                                                    class="avatar-title bg-info-subtle rounded-circle fs-2 material-shadow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-activity text-info">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-3 col-md-6">
                            <div class="card card-animate bg-primary">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="fw-medium text-white-50 mb-0">Avg. Visit Duration</p>
                                            <h2 class="mt-4 ff-secondary fw-semibold text-white"><span class="counter-value"
                                                    data-target="3">3</span>m <span class="counter-value"
                                                    data-target="40">40</span>sec</h2>
                                            <p class="mb-0 text-white-50"><span
                                                    class="badge bg-white bg-opacity-25 text-white mb-0"><i
                                                        class="ri-arrow-down-line align-middle"></i> 0.24 % </span> vs.
                                                previous month</p>
                                        </div>
                                        <div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span
                                                    class="avatar-title bg-white bg-opacity-25 rounded-circle fs-2 material-shadow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-clock text-white">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <polyline points="12 6 12 12 16 14"></polyline>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-3 col-md-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="fw-medium text-muted mb-0">Bounce Rate</p>
                                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                    data-target="33.48">33.48</span>%</h2>
                                            <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0"><i
                                                        class="ri-arrow-up-line align-middle"></i> 7.05 % </span> vs.
                                                previous month</p>
                                        </div>
                                        <div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span
                                                    class="avatar-title bg-info-subtle rounded-circle fs-2 material-shadow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-external-link text-info">
                                                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                        </path>
                                                        <polyline points="15 3 21 3 21 9"></polyline>
                                                        <line x1="10" y1="14" x2="21"
                                                            y2="3"></line>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-height-100">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="{{ url('#') }}"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-18"><i class="mdi mdi-dots-vertical"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{ url('#!') }}">Favorite</a>
                                            <a class="dropdown-item" href="{{ url('#!') }}">Apply Now</a>
                                        </div>
                                    </div>
                                    <div class="mb-4 pb-2">
                                        <img src="{{ asset('assets/images/companies/img-3.png') }}" alt=""
                                            class="avatar-sm">
                                    </div>
                                    <a href="{{ url('#!') }}">
                                        <h6 class="fs-15 fw-semibold">Marketing Director <span
                                                class="text-muted fs-13">(2-4 Yrs Exp.)</span></h6>
                                    </a>
                                    <p class="text-muted mb-0"><i class="ri-building-line align-bottom"></i> Themesbrand
                                        <span class="ms-2"><i class="ri-map-pin-2-line align-bottom"></i>
                                            California</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-height-100">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="{{ url('#') }}"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-18"><i class="mdi mdi-dots-vertical"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{ url('#!') }}">Favorite</a>
                                            <a class="dropdown-item" href="{{ url('#!') }}">Apply Now</a>
                                        </div>
                                    </div>
                                    <div class="mb-4 pb-2">
                                        <img src="{{ asset('assets/images/companies/img-4.png') }}" alt=""
                                            class="avatar-sm">
                                    </div>
                                    <a href="{{ url('#!') }}">
                                        <h6 class="fs-15 fw-semibold">Sr. Web Designer <span class="text-muted fs-13">(2+
                                                Yrs Exp.)</span></h6>
                                    </a>
                                    <p class="text-muted mb-0"><i class="ri-building-line align-bottom"></i> Themesbrand
                                        <span class="ms-2"><i class="ri-map-pin-2-line align-bottom"></i>
                                            California</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-height-100 bg-primary-subtle shadow-none bg-opacity-10">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="{{ url('#') }}"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-18"><i class="mdi mdi-dots-vertical"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{ url('#!') }}">Favorite</a>
                                            <a class="dropdown-item" href="{{ url('#!') }}">Apply Now</a>
                                        </div>
                                    </div>
                                    <div class="mb-4 pb-2">
                                        <img src="{{ asset('assets/images/companies/img-6.png') }}" alt=""
                                            class="avatar-sm">
                                    </div>
                                    <a href="{{ url('#!') }}">
                                        <h6 class="fs-15 fw-semibold">Sr. Web Designer <span class="text-muted fs-13">(2+
                                                Yrs Exp.)</span></h6>
                                    </a>
                                    <p class="text-muted mb-0"><i class="ri-building-line align-bottom"></i> Themesbrand
                                        <span class="ms-2"><i class="ri-map-pin-2-line align-bottom"></i>
                                            California</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-height-100 bg-info-subtle shadow-none bg-opacity-10">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="{{ url('#') }}"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-18"><i class="mdi mdi-dots-vertical"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{ url('#!') }}">Favorite</a>
                                            <a class="dropdown-item" href="{{ url('#!') }}">Apply Now</a>
                                        </div>
                                    </div>
                                    <div class="mb-4 pb-2">
                                        <img src="{{ asset('assets/images/companies/img-8.png') }}" alt=""
                                            class="avatar-sm">
                                    </div>
                                    <a href="{{ url('#!') }}">
                                        <h6 class="fs-15 fw-semibold">Sr. Web Designer <span class="text-muted fs-13">(2+
                                                Yrs Exp.)</span></h6>
                                    </a>
                                    <p class="text-muted mb-0"><i class="ri-building-line align-bottom"></i> Themesbrand
                                        <span class="ms-2"><i class="ri-map-pin-2-line align-bottom"></i>
                                            California</span>
                                    </p>
                                </div>
                            </div>
                        </div> <!-- end col-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="fs-15 fw-semibold">Brand Logo Design - MD</h5>
                            <p class="text-muted">Graphics Work</p>
                            <div class="d-flex flex-wrap justify-content-evenly">
                                <p class="text-muted mb-0">
                                    <i class="mdi mdi-numeric-1-circle text-success fs-18 align-middle me-2"></i>Completed
                                </p>
                                <p class="text-muted mb-0">
                                    <i class="mdi mdi-numeric-3-circle text-info fs-18 align-middle me-2"></i>In Progress
                                </p>
                                <p class="text-muted mb-0"><i
                                        class="mdi mdi-numeric-2-circle text-primary fs-18 align-middle me-2"></i>To Do</p>
                            </div>
                        </div>
                        <div class="progress animated-progress rounded-bottom rounded-0" style="height: 6px;">
                            <div class="progress-bar bg-success rounded-0" role="progressbar" style="width: 30%"
                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-info rounded-0" role="progressbar" style="width: 50%"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar rounded-0" role="progressbar" style="width: 20%" aria-valuenow="20"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="fs-15 fw-semibold">Redesign - Landing Page</h5>
                            <p class="text-muted">UI/UX Design</p>
                            <div class="d-flex flex-wrap justify-content-evenly">
                                <p class="text-muted mb-0">
                                    <i class="mdi mdi-numeric-3-circle text-success fs-18 align-middle me-2"></i>Completed
                                </p>
                                <p class="text-muted mb-0"><i
                                        class="mdi mdi-numeric-0-circle text-info fs-18 align-middle me-2"></i>In Progress
                                </p>
                                <p class="text-muted mb-0"><i
                                        class="mdi mdi-numeric-8-circle text-primary fs-18 align-middle me-2"></i>To Do</p>
                            </div>
                        </div>
                        <div class="progress animated-progress rounded-bottom rounded-0" style="height: 6px;">
                            <div class="progress-bar bg-success rounded-0" role="progressbar" style="width: 30%"
                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-info rounded-0" role="progressbar" style="width: 0%"
                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar rounded-0" role="progressbar" style="width: 70%" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="fs-15 fw-semibold">Ecommerce App for Web</h5>
                            <p class="text-muted">CRM Project</p>
                            <div class="d-flex flex-wrap justify-content-evenly">
                                <p class="text-muted mb-0">
                                    <i class="mdi mdi-numeric-10-circle text-success fs-18 align-middle me-2"></i>Completed
                                </p>
                                <p class="text-muted mb-0"><i
                                        class="mdi mdi-numeric-3-circle text-info fs-18 align-middle me-2"></i>In Progress
                                </p>
                                <p class="text-muted mb-0"><i
                                        class="mdi mdi-numeric-2-circle text-primary fs-18 align-middle me-2"></i>To Do</p>
                            </div>
                        </div>
                        <div class="progress animated-progress rounded-bottom rounded-0" style="height: 6px;">
                            <div class="progress-bar bg-success rounded-0" role="progressbar" style="width: 60%"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-info rounded-0" role="progressbar" style="width: 25%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar rounded-0" role="progressbar" style="width: 15%" aria-valuenow="15"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
        </div>
    </div>
    </div>
@endsection
@if (session('success') == 200)
    @section('script')
        <script>
            Swal.fire({
                toast: true,
                icon: "success",
                title: "Welcome to Dashboard...!",
                animation: false,
                position: "top-right",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });
        </script>
    @endsection
@endif
@section('script')
    <script>
        function updateDigitalClock() {
            const now = new Date();

            const hours = now.getHours();
            const minutes = now.getMinutes();
            const seconds = now.getSeconds();

            const ampm = (hours >= 12) ? 'PM' : 'AM';
            const formattedHours = (hours % 12 === 0) ? 12 : hours % 12;

            const digitalClock = document.getElementById('digital-clock');
            digitalClock.textContent =
                `${formatTwoDigits(formattedHours)}:${formatTwoDigits(minutes)}:${formatTwoDigits(seconds)} ${ampm}`;
        }

        function formatTwoDigits(number) {
            return (number < 10) ? `0${number}` : number;
        }
        setInterval(updateDigitalClock, 1000);
        updateDigitalClock();
    </script>
@endsection

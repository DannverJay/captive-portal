@extends('admin.index')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- Welcome User Card -->
                    <div class="col-xxl-4 col-xl-12">
                        <div class="card info-card customers-card">
                            <div class="card-body mt-3">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="Profile"
                                        class="rounded-circle">
                                    <div class="ps-3">
                                        <h4 class="card-title">Welcome, {{ Auth::user()->name }}! - {{ Auth::user()->role }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">

                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Connected Users: {{ count($connected_users) }}</h5>
                
                              <!-- Default Table -->
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                  </tr>
                                </thead>
                                <tbody>

                                @foreach($connected_users as $user)
                                  <tr>
                                    <th scope="row">
                                        {{ $user->id }}
                                    </th>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    <td>
                                        {{ $user->role }}
                                    </td>
                                  </tr>
                                @endforeach
                                </tbody>
                              </table>
                              <!-- End Default Table Example -->
                            </div>
                          </div>


                        <div class="card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Announcements <span>/Today</span></h5>
                            </div>

                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">Yesterday</a></li>
                                    <li><a class="dropdown-item" href="#">This Week</a></li>
                                </ul>
                            </div>

                            <div class="card-body pb-0">
                                <h5 class="card-title">School Events <span>| This Week</span></h5>

                                <div class="news">

                                    <div class="post-item clearfix">
                                        <img src="{{ asset('assets/img/recent/Day-5.jpg') }}" alt="">
                                        <h4><a href="#">Day 5 ICT Week Program</a></h4>
                                        <p>Did you enjoy today's event, ICT Majors? 🥳
                                            This will be our schedule for the Fifth Day of our ICT Week event. See you
                                            again at the LVCC Auditorium Lobby!..</p>
                                    </div>

                                    <div class="post-item clearfix">
                                        <img src="{{ asset('assets/img/recent/340982060_750810736755435_2739523548116616566_n.jpg') }}"
                                            alt="">
                                        <h4><a href="#">Live Seminar: “Capstone Research Project” Resource Speaker Mr.
                                                John Paul Miranda </a></h4>
                                        <p>Keep moving! Keep adapting! Don't miss out, ICT Majors!..</p>
                                    </div>

                                    <div class="post-item clearfix">
                                        <img src="{{ asset('assets/img/recent/4thday.png') }}" alt="">
                                        <h4><a href="#">Welcome to our 4th Day of ICT week</a></h4>
                                        <p>It's already our 4th Day in celebrating our 6th Annual ICT Week! so don't
                                            miss out, ICT Majors!..</p>
                                    </div>

                                    <div class="post-item clearfix">
                                        <img src="{{ asset('assets/img/recent/day4.jpg') }}" alt="">
                                        <h4><a href="#">Day 4 ICT Week Program</a></h4>
                                        <p>This will be our schedule for the Fourth day of our ICT Week event. See you
                                            at the LVCC Auditorium Lobby, God-willing!...</p>
                                    </div>

                                    <div class="post-item clearfix">
                                        <img src="{{ asset('assets/img/news-5.jpg') }}" alt="">
                                        <h4><a href="#">Live Seminar: "Acquiring the Wise Habits of a 21st Century
                                                Professional." Resource Speaker: Dr. Leah Corpuz</a></h4>
                                        <p>Keep moving! Keep adapting! See you there, ICT Majors!...</p>
                                    </div>

                                </div><!-- End sidebar recent posts-->

                            </div>
                        </div>
                    </div><!-- End Recent Sales -->


                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- Recent Activity -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                        <div class="activity">

                            <div class="activity-item d-flex">
                                <div class="activite-label">32 min</div>
                                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                <div class="activity-content">
                                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">56 min</div>
                                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                <div class="activity-content">
                                    Voluptatem blanditiis blanditiis eveniet
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">2 hrs</div>
                                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                <div class="activity-content">
                                    Voluptates corrupti molestias voluptatem
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">1 day</div>
                                <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                <div class="activity-content">
                                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a>
                                    tempore
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">2 days</div>
                                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                <div class="activity-content">
                                    Est sit eum reiciendis exercitationem
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">4 weeks</div>
                                <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                <div class="activity-content">
                                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                </div>
                            </div><!-- End activity item-->

                        </div>

                    </div>
                </div><!-- End Recent Activity -->

                <!-- News & Updates Traffic -->
                <!-- End News & Updates -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Online Users: </h5>
                        <div class="d-flex">
                            <img src="assets/img/profile-img.jpg" class="rounded-circle me-3" alt="Profile Picture"
                                style="width: 40px; height: 40px;">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                                    <i class='bi bi-circle-fill text-success'></i>
                                </div>
                                <p class="mb-0 text-muted">Online</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- End Right side columns -->

        </div>
    </section>

</main>
@endsection

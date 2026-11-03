<!--

=========================================================
* Volt Free - Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Volt - Free Bootstrap 5 Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets-admin/assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets-admin/assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets-admin/assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets-admin/assets/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets-admin/assets/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('assets-admin/css/volt.css') }}" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand me-lg-5" href="/dashboard">
            <img class="navbar-brand-dark" src="{{ asset('assets-admin/assets/img/brand/light.svg') }}" alt="Volt logo" />
            <img class="navbar-brand-light" src="{{ asset('assets-admin/assets/img/brand/dark.svg') }}" alt="Volt logo" />
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
      <div class="sidebar-inner px-4 pt-3">
        <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4 mb-3 border-bottom border-gray-700">
          <div class="d-flex align-items-center">
            <div class="avatar-lg me-4">
              <img src="{{ asset('assets-admin/assets/img/team/profile-picture-3.jpg') }}" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
            </div>
            <div class="d-block">
              <h2 class="h5 mb-3">Hi, Jane</h2>
              <a href="#" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                Sign Out
              </a>
            </div>
          </div>
        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
          <li class="nav-item">
            <a href="/dashboard" class="nav-link d-flex align-items-center">
              <span class="sidebar-icon">
                <img src="{{ asset('assets-admin/assets/img/brand/light.svg') }}" height="20" width="20" alt="Volt Logo">
              </span>
              <span class="mt-1 ms-1 sidebar-text">Volt Overview</span>
            </a>
          </li>
          <li class="nav-item active">
            <a href="/dashboard" class="nav-link">
              <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
              </span>
              <span class="sidebar-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link d-flex justify-content-between">
              <span>
                <span class="sidebar-icon">
                  <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 002-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                </span>
                <span class="sidebar-text">Tables</span>
              </span>
              <span class="link-arrow">
                <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link d-flex justify-content-between">
              <span>
                <span class="sidebar-icon">
                  <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3 3 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                </span>
                <span class="sidebar-text">Documentation</span>
              </span>
              <span>
                <span class="badge badge-sm bg-secondary ms-1 text-gray-800">v1.4</span>
              </span>
            </a>
          </li>
          <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
          <li class="nav-item">
            <a href="#" class="btn btn-secondary d-flex align-items-center justify-content-center btn-upgrade-pro">
              <span>Upgrade to Pro</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="content">
        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            <div class="container-fluid px-0">
              <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                <div class="d-flex align-items-center"></div>
                <ul class="navbar-nav align-items-center">
                  <li class="nav-item dropdown ms-lg-3">
                    <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <img class="avatar rounded-circle" alt="Image placeholder" src="{{ asset('assets-admin/assets/img/team/profile-picture-1.jpg') }}">
                        <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                          <span class="mb-0 font-small fw-bold text-gray-900">Bonnie Green</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>

        <div class="py-4">
            <h1>Hi, Jane</h1>
        </div>

        <div class="row">
            <div class="col-12 col-xl-8">
                <div class="card border-0 shadow mb-4">
                    <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                        <h2 class="fs-5 fw-bold mb-0">Team members</h2>
                        <a href="#" class="btn btn-sm btn-primary">See all</a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush list-custom">
                            <li class="list-group-item px-0 border-bottom d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img class="avatar rounded-circle me-3" alt="Image placeholder" src="{{ asset('assets-admin/assets/img/team/profile-picture-1.jpg') }}">
                                    <div><h3 class="h6 mb-0">Chris Wood</h3></div>
                                </div>
                            </li>
                            <li class="list-group-item px-0 border-bottom d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img class="avatar rounded-circle me-3" alt="Image placeholder" src="{{ asset('assets-admin/assets/img/team/profile-picture-2.jpg') }}">
                                    <div><h3 class="h6 mb-0">Jose Leos</h3></div>
                                </div>
                            </li>
                            <li class="list-group-item px-0 border-bottom d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img class="avatar rounded-circle me-3" alt="Image placeholder" src="{{ asset('assets-admin/assets/img/team/profile-picture-3.jpg') }}">
                                    <div><h3 class="h6 mb-0">Bonnie Green</h3></div>
                                </div>
                            </li>
                            <li class="list-group-item px-0 border-bottom d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img class="avatar rounded-circle me-3" alt="Image placeholder" src="{{ asset('assets-admin/assets/img/team/profile-picture-4.jpg') }}">
                                    <div><h3 class="h6 mb-0">Neil Sims</h3></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-4">
                <div class="card border-0 shadow text-center p-0">
                    <div class="card-body pb-5">
                        <img class="avatar-lg rounded-circle mx-auto mb-4" src="{{ asset('assets-admin/assets/img/team/profile-picture-1.jpg') }}" alt="Neil Portrait">
                        <h4 class="h3">Neil Sims</h4>
                        <p class="text-gray mb-4">Senior Software Engineer</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Core JS -->
    <script src="{{ asset('assets-admin/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-admin/assets/js/volt.js') }}"></script>
</body>
</html>
```[cite: 4]

---

Setelah ditempel, tekan **`Ctrl` + `S`** lalu tekan **`F5`** di browser[cite: 3]. Error ParseError hilang dan dasbor langsung tampil bersih sempurna!
<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>Register</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />
  <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />
  <script src="assets/vendor/js/helpers.js"></script>
  <script src="assets/js/config.js"></script>
</head>

<body>
  <div class="container-xxl">
    <?php if(isset($_SESSION['success'])): ?>
      <div class="alert alert-primary" role="alert" style="position: absolute;left: 50%;top: 10%;transform: translate(-50%,-50%);"><?= $_SESSION['success'];?></div>
    <?php unset($_SESSION['success']);endif ?>
    <?php if(isset($_SESSION['errors'])): ?>
      <div class="alert alert-danger" role="alert" style="position: absolute;left: 50%;top: 10%;transform: translate(-50%,-50%);"><?= $_SESSION['errors'];?></div>
    <?php unset($_SESSION['errors']);endif ?>
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <div class="card">
          <div class="card-body">
            <div class="app-brand justify-content-center" style="margin-bottom: 1rem !important;">
              <a href="#" class="app-brand-link">
                <span class="app-logo">
                  <svg width="800px" height="50px" viewBox="0 -56 1136 1136" class="icon" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" fill="#000000">

                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                    <g id="SVGRepo_iconCarrier">

                      <path
                        d="M354.461538 599.630769l481.87077-350.523077v316.849231s-8.664615 46.08-56.32 46.08c-47.852308 0-396.406154 9.255385-425.55077-12.406154z"
                        fill="#E3D9EA" />

                      <path
                        d="M878.867692 93.932308H303.458462c-26.387692 0-47.852308 24.221538-47.852308 53.956923v729.993846c0 29.538462 21.464615 53.956923 47.852308 53.956923h575.40923c26.387692 0 47.852308-24.221538 47.852308-53.956923V147.889231c0.196923-29.538462-21.464615-53.956923-47.852308-53.956923z m-42.535384 464.147692c0 29.538462-21.464615 53.956923-47.852308 53.956923h-403.692308c-26.387692 0-47.852308-24.221538-47.852307-53.956923v-309.169231c0-29.538462 21.464615-53.956923 47.852307-53.956923h403.495385c26.387692 0 47.852308 24.221538 47.852308 53.956923v309.169231z"
                        fill="#696cff" />

                      <path
                        d="M879.064615 945.230769H303.458462c-33.870769 0-61.243077-30.129231-61.243077-67.347692V147.889231c0-37.218462 27.569231-67.347692 61.243077-67.347693h575.40923c33.870769 0 61.243077 30.129231 61.243077 67.347693v729.993846c0.196923 37.218462-27.372308 67.347692-61.046154 67.347692zM303.458462 107.52c-18.904615 0-34.461538 18.116923-34.461539 40.369231v729.993846c0 22.252308 15.36 40.369231 34.461539 40.369231h575.40923c18.904615 0 34.461538-18.116923 34.461539-40.369231V147.889231c0-22.252308-15.36-40.369231-34.461539-40.369231H303.458462z m484.824615 517.907692H384.787692c-33.870769 0-61.243077-30.129231-61.243077-67.347692v-309.169231c0-37.218462 27.569231-67.347692 61.243077-67.347692h403.495385c33.870769 0 61.243077 30.129231 61.243077 67.347692v309.169231c0.196923 37.218462-27.372308 67.347692-61.243077 67.347692zM384.787692 208.738462c-18.904615 0-34.461538 18.116923-34.461538 40.36923v309.169231c0 22.252308 15.36 40.369231 34.461538 40.369231h403.495385c18.904615 0 34.461538-18.116923 34.461538-40.369231v-309.169231c0-22.252308-15.36-40.369231-34.461538-40.36923H384.787692z"
                        fill="#493B4E" />

                      <path
                        d="M694.153846 798.326154H490.338462c-7.286154 0-13.390769-5.907692-13.39077-13.390769v-34.067693c0-7.286154 5.907692-13.390769 13.39077-13.390769h203.815384c7.286154 0 13.390769 5.907692 13.390769 13.390769v34.067693c0 7.483077-6.104615 13.390769-13.390769 13.390769z"
                        fill="#493B4E" />

                      <path
                        d="M677.021538 807.384615h-169.550769c-21.661538 0-39.384615-17.723077-39.384615-39.384615s17.723077-39.384615 39.384615-39.384615h169.550769c21.661538 0 39.384615 17.723077 39.384616 39.384615s-17.723077 39.384615-39.384616 39.384615z m-169.550769-60.84923c-11.815385 0-21.464615 9.649231-21.464615 21.464615s9.649231 21.464615 21.464615 21.464615h169.550769c11.815385 0 21.464615-9.649231 21.464616-21.464615s-9.649231-21.464615-21.464616-21.464615h-169.550769z"
                        fill="#493B4E" />
                    </g>
                  </svg> </span>
              </a>
            </div>
            <h4 class="mb-2">Contact App Manager</h4>
            <form id="formAuthentication" class="mb-3" action="/contact-app-manager/register" method="POST">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username"
                  autofocus />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email" />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                </div>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password"
                  />
                </div>
              </div>
              <button type="submit" class="btn btn-primary d-grid w-100">Register</button>
            </form>
            <p class="text-center">
              <span>Sudah punya akun?</span>
              <a href="/contact-app-manager/login">
                <span>Login</span>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/vendor/js/menu.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>
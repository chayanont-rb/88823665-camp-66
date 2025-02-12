@extends('Layouts.default')
@section('content')
<body class="register-page bg-body-secondary">
    <div class="register-box">
      <!-- /.register-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header">
          <a
            href="../index2.html"
            class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover"
          >
            <h1 class="mb-0"><b>Admin</b>LTE</h1>
          </a>
        </div>
        <div class="card-body register-card-body">
          <p class="register-box-msg">Register a new membership</p>
          <form action="{{ url('/register') }}" onsubmit="return myfunction()" method="post">
            @csrf

            <!-- Full Name -->
            <div class="input-group mb-1">
              <div class="form-floating">
                <input id="registerFullName" name="name" type="text" class="form-control" placeholder="" />
                <label for="registerFullName">Full Name</label>
              </div>
              <div class="input-group-text"><span class="bi bi-person"></span></div>
            </div>
            <div id="error-name" class="invalid-feedback"></div> <!-- ข้อความแจ้งเตือน -->

            <!-- Email -->
            <div class="input-group mb-1">
              <div class="form-floating">
                <input id="registerEmail" name="email" type="email" class="form-control" placeholder="" />
                <label for="registerEmail">Email</label>
              </div>
              <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            </div>
            <div id="error-email" class="invalid-feedback"></div> <!-- ข้อความแจ้งเตือน -->

            <!-- Password -->
            <div class="input-group mb-1">
              <div class="form-floating">
                <input id="registerPassword" name="password" type="password" class="form-control" placeholder="" />
                <label for="registerPassword">Password</label>
              </div>
              <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            </div>
            <div id="error-password" class="invalid-feedback"></div> <!-- ข้อความแจ้งเตือน -->

            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
              <label class="form-check-label" for="flexCheckDefault">
                I agree to the <a href="#">terms</a>
              </label>
            </div>
            <div id="error-checkbox" class="invalid-feedback"></div> <!-- ข้อความแจ้งเตือน -->

            <!-- Submit Button -->
            <div class="row">
              <div class="col-4 offset-8">
                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
              </div>
            </div>
        </form>
          <button onclick="myfunction()">Click me</button>
          <div class="social-auth-links text-center mb-3 d-grid gap-2">
            <p>- OR -</p>
            <a href="#" class="btn btn-primary">
              <i class="bi bi-facebook me-2"></i> Sign in using Facebook
            </a>
            <a href="#" class="btn btn-danger">
              <i class="bi bi-google me-2"></i> Sign in using Google+
            </a>
          </div>
          <!-- /.social-auth-links -->
          <p class="mb-0">
            <a href="login.html" class="link-primary text-center"> I already have a membership </a>
          </p>
        </div>
        <!-- /.register-card-body -->
      </div>
    </div>
    <!-- /.register-box -->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
      integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{ url('public/js/adminlte.js') }}"></script>

    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!--end::Script-->
  </body>
@endsection


@section('scripts')
<script>
    let $myval
    var myval2 = "value of myval2"
    const myval3 = ""

    console.log("Hello World!")

 //   alert("Hello World !!")

/**/
//
// error
// ALERT("Hello World !!")
function myfunction(){
   let name = document.getElementById('registerFullName')
   name = $('#name')
   let email = document.getElementById('registerEmail')
   let pass = document.getElementById('registerPassword')
   let mycheckbox = document.getElementById('flexCheckDefault')
//    document.getElementsByClass()
//    name.value = "My Name Value"
// name.val("My Name Value")
   console.log(name.val(), email.value,
   pass.value, mycheckbox.checked)
   if(name.val() == "My Name Value"){
        name.addClass('is-invalid')
        $('#invalid-name').html("<b><u>ใส่ name เป็นค่านี้ไม่ได้</u></b>")
   }else{
    name.removeClass('is-invalid');
   }

}
</script>
<script>
    function myfunction() {
        let name = $('#registerFullName');
        let email = $('#registerEmail');
        let pass = $('#registerPassword');
        let mycheckbox = $('#flexCheckDefault');

        let isValid = true;

        // ล้างข้อความแจ้งเตือนก่อน
        $('.invalid-feedback').text("").hide();

        // ตรวจสอบ Name (ต้องไม่เป็นค่าว่าง)
        if (name.val().trim() === "") {
            name.addClass('is-invalid');
            $('#error-name').text("Please enter your name.").show();
            isValid = false;
        } else {
            name.removeClass('is-invalid');
        }

        // ตรวจสอบ Email (ต้องมี @ และ .)
        let emailPattern = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
        if (!emailPattern.test(email.val())) {
            email.addClass('is-invalid');
            $('#error-email').text("Please enter a valid email (must contain @ and .).").show();
            isValid = false;
        } else {
            email.removeClass('is-invalid');
        }

        // ตรวจสอบ Password (ต้องมีตัวเลข, ตัวอักษรพิมพ์เล็ก, ตัวอักษรพิมพ์ใหญ่)
        let passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/;
        if (!passwordPattern.test(pass.val())) {
            pass.addClass('is-invalid');
            $('#error-password').text("Password must contain a-z, A-Z, 0-9.").show();
            isValid = false;
        } else {
            pass.removeClass('is-invalid');
        }

        // ตรวจสอบ Checkbox (ต้องถูกติ๊ก)
        if (!mycheckbox.prop('checked')) {
            mycheckbox.addClass('is-invalid');
            $('#error-checkbox').text("Please accept the terms and conditions before signing up.").show();
            isValid = false;
        } else {
            mycheckbox.removeClass('is-invalid');
        }

        return isValid; // ส่งคืน true ถ้าผ่านการตรวจสอบทั้งหมด
    }
    </script>


<script>
    console.log(myval2)
    </script>

@endsection

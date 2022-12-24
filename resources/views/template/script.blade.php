    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('/template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('/template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('/template/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('/template/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('/template/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('/template/js/demo/chart-pie-demo.js') }}"></script>

<!-- Dropdown-->
<script>
  /* When the user clicks on the button,
  toggle between hiding and showing the dropdown content */
  function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
  }
  
  function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
      txtValue = a[i].textContent || a[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
      } else {
      a[i].style.display = "none";
      }
  }
  }
  </script>
<!DOCTYPE html>
<html>

<body>
  <script>
    'use strict';
 var txt;
  var r = confirm("ต้องการออกจากระบบใช่หรือไม่");
  if (r == true) {
    window.location='index.php';
  } else {
    window.location='http://localhost/clinic/index.html';
  }
  document.getElementById("demo").innerHTML = txt;
  </script>
</body>

</html>
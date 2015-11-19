<!DOCTYPE html>
<html>
  <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/carousel.css" rel="stylesheet">
  </head>
  <style>
  #fd1 {
    position: fixed;
    top: 0.1em;
}
  </style>
 <body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="content/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>
    <div class="navbar-wrapper" id="fd1">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Registration,Attendance,Marks Management</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="admin_management.php">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registration <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="amonitor.php">View Student Registration</a></li>
                    <li><a href="asretrieve.php">View and edit student details</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="add_syllabus.php">Add Subject Details</a></li>
                    <li><a href="asretrive_syllabus.php">View core subject list</a></li>
                    <li><a href="asretrieve_elective.php">View elective subject list</a></li>       
                    <li role="separator" class="divider"></li>
                    <li><a href="aform_teach.php">Add Staff Member</a></li>                               
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Attendance <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="subject_students_attendance.php">View attendance</a></li>
                    <li><a href="excel uploader/attendance_uploader.php">Upload attendance</a></li>                             
                  </ul>
                </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Marks <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="subject_students_marks.php">View marks</a></li>
                    <li><a href="excel uploader/marks_uploader.php">Upload marks</a></li>                             
                  </ul>
                </li>

                <li><a href="logout.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </nav>


      </div>

    </div>
  </body>
</html>
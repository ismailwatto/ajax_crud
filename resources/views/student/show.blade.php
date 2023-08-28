<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<span id="output"></span>
<!DOCTYPE html>
<html>
<head>
  <title>Ajax update Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row mt-4">
      <div class="col-md-2"></div>
      <div class="col-md-10">
        <h1 class="mb-4" style="text-align: center">Student data</h1>
        <table border="2" id="students_table">
          <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course</th>
            <th>Action</th>
          </tr>
        </table>
      </div>
    </div>
  </div>
</body>
<script>
  $(document).ready(function() {
    $.ajax({
      type: 'GET',
      url: "{{route('show')}}",
      success: function(data) {
        console.log(data);
        if (data.students.length > 0) {
          for (let i = 0; i < data.students.length; i++) {
            $("#students_table").append(`
              <tr>
                <td>` + (i + 1) + `</td>
                <td>` + data.students[i]['name'] + `</td>
                <td>` + data.students[i]['email'] + `</td>
                <td>` + data.students[i]['phone'] + `</td>
                <td>` + data.students[i]['course'] + `</td>
                <td>
                  <a href="edituser/` + data.students[i]['id'] + `">Edit</a>
                  <a href="#" class="deletedata" data-id="/` + data.students[i]['id'] + `">Delete</a>
                </td>
              </tr>`);
          }
        } else {
          $("#students_table").append("<tr><td> Data not found </td></tr>");
        }
      },
      error: function(e) {
        console.log(err.responseText);
      }
    });

    $('#students_table').on("click", ".deletedata", function() {
      var id = $(this).attr("data-id");
      var obj = $(this);
      $.ajax({
        type: 'GET',
        url: "/ajax_crud/student/deleteuser" + id,
        success: function(data) {
            $(obj).parent().parent().remove();
            $("#output").text(data.res);
        },
        error: function(err) {
          console.log(err.responseText);
        }
      });
    });
  });
</script>
</html>

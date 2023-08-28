<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!DOCTYPE html>
<html>
<head>
  <title>Ajax update Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<div class="container">
  <div class="row justify-content-center mt-4">
    <div class="col-md-6">   
      <form id="update-form">
        @csrf
          <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" value="{{$students[0]->name}}" name="name" required>
            </div>

            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" value="{{$students[0]->email}}" name="email" required>
            </div>

            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="phone" class="form-control" id="phone" value="{{$students[0]->phone}}" name="phone" required>
            </div>

            <div class="form-group">
              <label for="course">Course:</label>
              <input type="course" class="form-control" id="course" value="{{$students[0]->course}}" name="course" required>
            </div>

            <input type="hidden" name="id" value="{{$students[0]->id}}">

            <div class="text-center">
              <button type="submit" class="btn btn-primary" id="button">Update</button>
            </div>
      </form>
    </div>
  </div>
</div>
<span id="output"></span>
<script>
  $(document).ready(function() {
    $("#update-form").submit(function(event) {
      event.preventDefault();
      var form = $("#update-form")[0];
      var data = new FormData(form);
      $.ajax({
        type: 'POST',
        url: "{{route('update')}}",
        data: data, // Corrected variable name from Data to data
        processData: false,
        contentType: false,
        success: function(data) {
          $("#output").text(data.result);
          window.open("/ajax_crud/student/data","_self");
        },
        error: function(err) {
          $("#output").text(err.responseText);
        }
      });
    });
  });
</script>
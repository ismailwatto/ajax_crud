<!DOCTYPE html>
<html>

<head>
    <title>Ajax Register Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <h2 class="text-center">Ajax Form</h2>
                <form id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="phone" class="form-control" id="phone" name="phone" required>
                    </div>

                    <div class="form-group">
                        <label for="course">Course:</label>
                        <input type="course" class="form-control" id="course" name="course" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" id="button">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <span id="output"></span>
    <script>
        $(document).ready(function() {
            $('#myForm').submit(function(event) {
                event.preventDefault();

                var form = $('#myForm')[0];
                var formData = new FormData(form);

                $.ajax({
                    type: 'POST',
                    url: "{{ route('store') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        $("#output").text(data.res);
                        $("input[type='text']").val('');
                        $("input[type='email']").val('');
                        $("input[type='phone']").val('');
                        $("input[type='course']").val('');
                    },
                    error: function(e) {
                        $("#output").text(e.responseText);
                    }
                });
            });
        });
        $('#button').click(function() {
            $(this).css('background-color', 'red');
        }).mouseleave(function() {
            $(this).css('background-color', '');
        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- This script got from frontendfreecode.com -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.bundle.js'></script>
    <style>
        body {
            background-color: #333;
        }

        #btnStart {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #message {
            width: 200px;
            height: 100px;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            color: #fff;
            margin: auto;
            text-align: center;
            display: none;
        }
    </style>

</head>

<body>
    <button id="btnStart" type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">Let's fill
        in a form!</button>

    <div id="message">
        Thank you for filling in the awesome form and sending all data on your computer to US. >:)
    </div>

    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="formModalLabel">Awesome Form</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formAwesome" action="ajax_data.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="firstName" class="col-sm-6 col-form-label">
                                First name
                            </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="John"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastName" class="col-sm-6 col-form-label">
                                Last name
                            </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Doe"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-6 col-form-label">
                                E-mail address
                            </label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="john.doe@email.com" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="awesomeness" class="col-sm-6 col-form-label">
                                Is this an awesome form?
                            </label>
                            <div class="col-sm-6">
                                <select class="form-control" id="awesomeness" name="awesomeness">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" type="checkbox" value="" id="awesomeCheck" required>
                            <label class="form-check-label" for="awesomeCheck">
                                I confirm that I am an awesome person.
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" id="submitbtn" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="bcl"><a style="font-size:8pt;text-decoration:none;" href="http://www.devanswer.com">Free Frontend</a></div>
    <script>
        var form = document.getElementById("formAwesome");
        form.addEventListener("submit", onSubmitForm);

        function onSubmitForm(e) {
            e.preventDefault();
            $('#formModal').modal('hide');
            $('#btnStart').hide();
            $('#message').show();
        }
    </script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#submitbtn').click(function (e) {
                e.preventDefault();
                var formData = $('#formAwesome').serialize();
                console.log(formData)// Prevent form submission


                // Collect form data


                // Send AJAX request
                $.ajax({
                    type: 'POST',
                    url: 'ajax_data.php',
                    data: formData,
                    cache: false,

                    success: function (formData) {
                        console.log(formData)


                    }
                })
            });
        });

    </script>
</body>

</html>
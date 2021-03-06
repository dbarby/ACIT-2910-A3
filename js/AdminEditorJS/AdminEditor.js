        $(document).ready(function() {

            function loadUsers() {
                $.ajax({
                    url: "./users.php",
                    type: "GET",
                    dataType: 'html',
                    success: function(returnedData) {
                        //console.log("cart checkout response: ", returnedData);
                        $("#userrows").html(returnedData);
                        //window.location.href = "user-editor.html";
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.statusText, textStatus);
                    }
                });
            }

            loadUsers();


            $("#addNewUser").submit(function(e) {
                e.preventDefault();

                // get values from form
                var firstName = $("#addFirstName").val();
                var lastName = $("#addLastName").val();
                var userName = $("#addUserName").val();
                var shippingAddress = $("#addShippingAddress").val();
                var emailAddress = $("#addEmailAddress").val();

                //console.log(firstName, lastName, userName);

                $.ajax({
                    url: "users.php",
                    type: "POST",
                    dataType: "JSON",
                    data: {action: "add", newFirstName: firstName,
                        newLastName: lastName, newUserName: userName, newShippingAddress: shippingAddress, newEmailAddress: emailAddress},
                    success: function(returnedData) {
                        loadUsers();
                        console.log(returnedData);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $("#p1").text(jqXHR.statusText);
                    }

                });

            });

            $('#users').on('click', '.delete', function() {
                var loginValue = this.getAttribute("id");
                loginValue = loginValue.replace("d-", "");

                $.ajax({
                    url: "./users.php",
                    type: "POST",
                    dataType: 'json',
                    data: {action: "delete", username: loginValue},
                    success: function(returnedData) {
                        loadUsers();

                        //window.location.href = "user-editor.html";
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.statusText, textStatus);
                    }
                });

            });

            $('#users').on('click', '.update', function() {
                var loginValue = this.getAttribute("id");
                //var firstName = $(this).val(
                loginValue = loginValue.replace("u-", "");
                var editedFirstName = $(this).parent().parent().find(".first_name span").text();
                //console.log(loginValue, editedFirstName);

                $.ajax({
                    url: "./users.php",
                    type: "POST",
                    dataType: 'json',
                    data: {action: "update", username: loginValue, newFirstName: editedFirstName},
                    success: function(returnedData) {
                        loadUsers();

                        //window.location.href = "user-editor.html";
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.statusText, textStatus);
                    }
                });

            });


            // http://stackoverflow.com/questions/11882693/change-table-cell-from-span-to-input-on-click
            $('#users').on('click', 'span', function() {

                var $td = $(this).parent();
                var $input = null;

                var val = $(this).html();

                if($td.attr('class') === 'first_name') {
                    //var val = $(this).html();
                    $td.html('<input type="text" value="' + val + '"/>');
                    var $input = $td.find('input');
                    $input.focus();
                    $input.select();
                }
                
                //york added code 
                if($td.attr('class') === 'last_name') {
                    //var val = $(this).html();
                    $td.html('<input type="text" value="' + val + '"/>');
                    var $input = $td.find('input');
                    $input.focus();
                    $input.select();
                }
                if($td.attr('class') === 'user_name') {
                    //var val = $(this).html();
                    $td.html('<input type="text" value="' + val + '"/>');
                    var $input = $td.find('input');
                    $input.focus();
                    $input.select();
                }
                if($td.attr('class') === 'shipping_address') {
                    //var val = $(this).html();
                    $td.html('<input type="text" value="' + val + '"/>');
                    var $input = $td.find('input');
                    $input.focus();
                    $input.select();
                }
                if($td.attr('class') === 'email_address') {
                    //var val = $(this).html();
                    $td.html('<input type="text" value="' + val + '"/>');
                    var $input = $td.find('input');
                    $input.focus();
                    $input.select();
                }
                
                  if($td.attr('class') === 'password') {
                    //var val = $(this).html();
                    $td.html('<input type="text" value="' + val + '"/>');
                    var $input = $td.find('input');
                    $input.focus();
                    $input.select();
                }
                
                
                
                
      

                if($input != null) {

                    $input.on('blur', function() {
                        $(this).parent().html('<span>' + $(this).val() + '</span>');
                    });

                    $input.keyup(function(e) {
                        if(e.which == 13) {
                            $(this).parent().html('<span>' + $(this).val() + '</span>');
                        } else if(e.which == 27) {
                            // escape key, means user canceled operation
                            $(this).parent().html('<span>' + val + '</span>');
                        }
                    });
                }
            });



        });

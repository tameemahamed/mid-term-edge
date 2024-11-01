$().ready(function() {
    // validate signup form on keyup and submit
    $("#registrationform").validate({
        rules: {
            name: {
                required: true,
                minlength: 0
            },
            
        },
        messages: {
            name: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 2 characters"
            },
            
        }
    });
});
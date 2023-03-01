var username = $("#username").val();
var password = $("#password").val();
var age = $("#age").val();
var dob = $("#dob").val();
var contact = $("#contact").val();
var requestBody = {
    "username": username,
    "password": password,
    "age": age,
    "dob": dob,
    "contact": contact
};
$.ajax({
    type: "POST",
    url: "process-user-data.php",
    data: JSON.stringify(requestBody),
    contentType: "application/json",
    success: function(response) {
        console.log(response);
    },
    error: function(xhr, status, error) {
        console.error(error);
    }
});

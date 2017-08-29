function bookingFunction() {
var pet_id = document.getElementById("pet_id").value;
var clinic_id = document.getElementById("clinic_id").value;
var bookingType = document.getElementById("bookingType").value;
var time = document.getElementById("time").value;
var date = document.getElementById("date").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'pet_id1=' + pet_id + '&clinic_id1=' + clinic_id + '&bookingType1=' + bookingType + '&time1=' + time + '&date1=' + date;
if (pet_id == '' || clinic_id == '' || bookingType == '' || time == '' || date == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "create/createbooking.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}

function customerCreateFunction() {
var firstname = document.getElementById("firstname").value;
var lastname = document.getElementById("lastname").value;
var emergencyContact = document.getElementById("emergencyContact").value;
var address = document.getElementById("address").value;
var email = document.getElementById("email").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'emergencyContact1=' + emergencyContact + '&firstname1=' + firstname + '&lastname1=' + lastname + '&address1=' + address + '&email1=' + email;
if (emergencyContact == '' || firstname == '' || lastname == '' || address == '' || email == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "create/customerscript.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}

function createStaffFunction() {
var clinic_id = document.getElementById("clinic_id").value;
var firstname = document.getElementById("firstname").value;
var lastname = document.getElementById("lastname").value;
var dob = document.getElementById("dob").value;
var password = document.getElementById("password").value;
var phoneNumber = document.getElementById("phoneNumber").value;
var address = document.getElementById("address").value;
var city = document.getElementById("city").value;
var postCode = document.getElementById("postCode").value;
var email = document.getElementById("email").value;

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'clinic_id1=' + emergencyContact + '&firstname1=' + firstname + '&lastname1=' + lastname + '&password1=' + address + '&phoneNumber1=' + email + '&address1=' + firstname + '&city1=' + lastname + '&postCode1=' + address + '&email1=' + email;
if (clinic_id == '' || firstname == '' || lastname == '' || dob == '' || password == '' || phoneNumber == '' || address == '' || city == '' || postCode == '' || email == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "create/staffscript.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}

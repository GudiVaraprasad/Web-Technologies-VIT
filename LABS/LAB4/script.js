function reset() {
  document.getElementById("empid").value = "";
  document.getElementById("empname").value = "";
  document.getElementByName("gender").value = "";
  document.getElementByName("dob").value = "";
  document.getElementByName("doj").value = "";
  document.getElementById("email").value = "";
  document.getElementById("mobile").value = "";
}

function validate() {
  // alert("hii");

  var empid = document.forms["myform"]["empid"].value;
  var empname = document.forms["myform"]["empname"].value;
  var gender = document.forms["myform"]["gender"].value;
  var dob = document.forms["myform"]["dob"].value;
  var doj = document.forms["myform"]["doj"].value;
  var email = document.forms["myform"]["email"].value;
  var mobile = document.forms["myform"]["mobile"].value;

  if (
    empid.length == 0 ||
    empname.length == 0 ||
    gender.length == 0 ||
    dob.length == 0 ||
    doj.length == 0 ||
    email.length == 0 ||
    mobile == 0
  ) {
    alert("All fields are required.");
  }
  var numbers = /^[0-9]+$/;
  var characters = /^[A-Za-z]+$/;
  var emailAddress =
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@(vitap.ac.in|gmail.com|yahoo.com|microsoft.com|outlook.com|linuxconfig.org)$/;

  if (empid.length == 6 && empid.charAt(0) == "5") {
    if (!empid.match(numbers)) {
      alert("Please enter a valid Employee ID");
    }
  }

  if (empname.length > 10 && empname.length < 40) {
    if (!empname.match(characters)) {
      alert("Please enter a valid Employee Name");
    }
  } else {
    alert("Please enter a valid Employee Name");
  }

  if (!email.trim().match(emailAddress)) {
    alert("Please enter a valid Email Address");
  }

  var myDate = new Date(doj);
  var month = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
  ][myDate.getMonth()];
  var str = myDate.getDate() + " " + month + " " + myDate.getFullYear();
  doj.value = str;
  alert(myDate);

  if (mobile.length == 10) {
    if (!mobile.match(numbers)) {
      alert("Please enter a valid Mobile Number");
    }
  } else {
    alert("Please enter a valid Mobile Number");
  }
}

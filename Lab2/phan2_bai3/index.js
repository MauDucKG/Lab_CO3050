function submit_form() {
  let fmane = document.getElementById("fname").value;
  console.log(fmane.length);
  if (fmane.length < 2 || fmane.length > 30) {
    alert("Sai trường fname");
    return 0;
  }

  let lname = document.getElementById("lname").value;
  console.log(lname.length);
  if (lname.length < 2 || lname.length > 30) {
    alert("Sai trường lname");
    return 0;
  }

  let email = document.getElementById("email").value;
  console.log(email);
  if (
    !email
      .toLowerCase()
      .match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      )
  ) {
    alert("Sai trường email");
    return 0;
  }

  let password = document.getElementById("password").value;
  console.log(password.length);
  if (password.length < 2 || password.length > 30) {
    alert("Sai trường password");
    return 0;
  }

  let about = document.getElementById("about").value;
  console.log(about.length);
  if (about.length > 10000) {
    alert("Sai trường About");
    return 0;
  }

  alert("Complete!");
}

function reset_form () {
    document.getElementById("fname").value = "";
    document.getElementById("lname").value = "";
    document.getElementById("email").value = "";
    document.getElementById("password").value = "";
    document.getElementById("about").value = "";
}


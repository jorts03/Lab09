const formChecker = () => {
  let errors = [];
  let email = document.getElementById("email").value;
  let password = document.getElementById("Password").value;
  let one = document.getElementById("1").value;
  let two = document.getElementById("2").value;
  let three = document.getElementById("3").value;
  let ship = document.getElementsByName("shipping");
  let oneBool = false;
  let twoBool = false;
  let threeBool = false;
  let shipBool = false;
  let y = false;
  let x = false;

  if (Number.isInteger(+one) && +one >= 0 && one !== "") {
    oneBool = true;
  } else {
    errors.push("Item 1 Quantity cannot be blank or negative\n");
  }
  if (Number.isInteger(+two) && +two >= 0 && two !== "") {
    twoBool = true;
  } else {
    errors.push("Item 2 Quantity cannot be blank or negative\n");
  }
  if (Number.isInteger(+three) && +three >= 0 && three !== "") {
    threeBool = true;
  } else {
    errors.push("Item 3 Quantity cannot be blank or negative\n");
  }

  let emailCheck =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (!emailCheck.test(email)) {
    errors.push("Invalid email address\n");
  } else y = true;
  if (password == "" || password == null) {
    errors.push("Password field cannot be left blank\n");
  } else x = true;

  if (!(ship[0].checked || ship[1].checked || ship[2].checked)) {
    errors.push("A shipping option must be selected\n");
  } else shipBool = true;

  if (
    oneBool == true &&
    twoBool == true &&
    threeBool == true &&
    y == true &&
    x == true &&
    shipBool == true
  ) {
    return true;
  } else {
    alert(errors.join(""));
    return false;
  }
};

const formChecker = () => {
  let email = document.getElementById("email").value;
  //bools for each check
  //if all bools are true submit

  if (email === "" || email === null) {
    return false;
  } else return true;
};

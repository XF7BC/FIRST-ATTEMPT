function validateForm() {
let x = document.forms["form"]["newsletter_subscription"].value;
    if (x == "") {
      alert("E-mail must be filled out");
      return false;
    }
    
}


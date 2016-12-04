function notifyUser(){
  var choice = confirm("Would you like to submit this form?"); 
  if(choice == true){
    return checkComplete();
  }
}

function checkComplete(){
  document.getElementById("formId").innerHTML="Congratulations!\nYour message was submitted successfully.</br></br>";
  return false;
}


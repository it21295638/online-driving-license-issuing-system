function passwords(){

  if (document.getElementById("password1").value != document.getElementById("password2").value){
      document.getElementById("pawEr").innerHTML = "*Password does not match*";
      return false;
  }
}
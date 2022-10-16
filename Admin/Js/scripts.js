
var countries = ['Addis Ababa','Gondar','Mekelle', 'Adama','Awassa',
'Bahir Dar',
'Dire Dawa',
'Dessie',
'Jimma',
'Jijiga',
'Shashamane',
'Bishoftu',
'Sodo',
'Arba Minch',
'Hosaena',
'Harar',
'Dilla',
'Nekemte',
'Debre Birhan',
'Asella',
'Debre Mark',
'Kombolcha',
'Debre Tabor',
'Adigrat',
'Areka',
'Weldiya',
'Sebeta',
'Burayu',
'Shire',
'Ambo',
'Arsi Negele',
'Aksum',
'Gambela',
'Bale Robe',
'Butajira',
'Batu',
'Boditi',
'Adwa',
'Yirgalem',
'Waliso',
'Welkite',
'Gode',
'Meki',
'Negele Borana',
'Alaba Kulito',
'Alamata',
'Chiro',
'Tepi',
'Durame',
'Goba',
'Assosa',
'Gimbi',
'Wukro',
'Haramaya',
'Mizan Teferi',
'Sawla',
'Mojo',
'Dembi Dolo',
'Aleta Wendo',
'Metu',
'Mota',
'Fiche',
'Finote Selam',
'Bule Hora Town',
'Bonga',
'Kobo',
'Jinka',
'Dangila',
'Degehabur',
'Dimtu',
'Agaro'
];


function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
              b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
      x[i].parentNode.removeChild(x[i]);
    }
  }
}
/*execute a function when someone clicks in the document:*/
document.addEventListener("click", function (e) {
    closeAllLists(e.target);
});
}



 function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
    }



    // Form Validation for SignUP //
function Checkform(){
        let FirstName = document.form.name.value;
        let FatherName = document.form.fname.value;
      let phone = document.form.phone.value;
      let email = document.form.uemail.value;
      let password = document.form.upassword.value;
      let password1 = document.form.upassword1.value; 
        if (FirstName == false) {
          document.getElementById("namecheck").innerHTML = "This field can't be blank";
          document.getElementById('name').style.borderColor = '#ff3860';
          return false;
        } else if (FatherName == false) {
          document.getElementById("fnamecheck").innerHTML = "This field can't be blank";
           document.getElementById('fname').style.borderColor = '#ff3860';
                return false;
        } else if (phone == false) {
          document.getElementById("telcheck").innerHTML = "This field can't be blank";
          document.getElementById('phone').style.borderColor = '#ff3860';
                return false; 
        }
         else if (email == false) {
          document.getElementById("eamilcheck").innerHTML = "This field can't be blank";
               document.getElementById('uemail').style.borderColor = '#ff3860';
                return false;
         }
           else if (password == false) {
          document.getElementById("passwordcheck").innerHTML = "This field can't be blank";
           document.getElementById('upassword').style.borderColor = '#ff3860';
                return false; 
        }
           else if (password1 == false) {
          document.getElementById("password1check").innerHTML = "This field can't be blank";
            document.getElementById('upassword1').style.borderColor = '#ff3860';
                return false;
            }else if(password != password1){
                document.getElementById("password1check").innerHTML = "Invalid Password";
                document.getElementById('upassword1').style.borderColor = '#ff3860';
                document.getElementById('upassword').style.borderColor = '#ff3860';
                return false;
            }
}


//Form Validation for Login
function Checklogin(){
    let email = document.login.email.value;
    let password = document.login.password.value;

     if (email == false) {
          document.getElementById("emailcheck").innerHTML = "This field can't be blank";
          document.getElementById('email').style.borderColor = '#ff3860';
          return false;
        }else if (password == false){
          document.getElementById("passwordcheck").innerHTML = "This field can't be blank";
          document.getElementById('password').style.borderColor = '#ff3860';
          return false;
        }
}



//Form Validation for  Print Booking
function Checkbooking(){
  let bookid = document.bookprint.bookid.value;
  let phone = document.bookprint.bookphone.value;

  if(bookid == false){
    document.getElementById('bookidcheck').innerHTML = "This field can't be blank";
    document.getElementById('bookid').style.borderColor = '#ff3860';
    return false;
  }else if (phone == false){
    document.getElementById('bookpbonecheck').innerHTML = "This field can't be blank";
    document.getElementById('bookphone').style.borderColor = '#ff3860';
    return false;
  }
}


//Form Validation for Cancel Booking
function cancelbooking(){
  let bookid = document.bookcancel.bookidcancel.value;
  let phone = document.bookcancel.bookphonecancel.value;

  if(bookid == false){
    document.getElementById('bookidcheck1').innerHTML = "This field can't be blank";
    document.getElementById('bookidcancel').style.borderColor = '#ff3860';
    return false;
  }else if (phone == false){
    document.getElementById('bookpbonecheck1').innerHTML = "This field can't be blank";
    document.getElementById('bookphonecancel').style.borderColor = '#ff3860';
    return false;
  }
}


// Form Validation for Contact Us
function Checkcontact(){
  let name = document.contact.name.value;
  let email = document.contact.email.value;
  let phone = document.contact.phone.value;
  let message = document.contact.message.value;

  if(name == false ){
    document.getElementById('checkname').innerHTML = "This field can't be blank";
     document.getElementById('name').style.borderColor = '#ff3860';
    return false;
  }else if (email == false ){
    document.getElementById('checkemail').innerHTML = "This field can't be blank";
     document.getElementById('email').style.borderColor = '#ff3860';
    return false;
  }else if (phone == false ){
    document.getElementById('checkphone').innerHTML = "This field can't be blank";
     document.getElementById('phone').style.borderColor = '#ff3860';
    return false;
  }else if (message == false ){
    document.getElementById('checkmessage').innerHTML = "This field can't be blank";
     document.getElementById('message').style.borderColor = '#ff3860';
    return false;
  }
}

function Checkroute(){
  let start= document.searchroute.Start.value;
  let destination = document.searchroute.Destination.value;
  let passenger = document.searchroute.num.value;
  let date = document.searchroute.date.value;

  if(start == false){
     document.getElementById('checkstart').innerHTML = "This field can't be blank";
     document.getElementById('Start').style.borderColor = '#ff3860';
    return false;
  }else if (destination == false){
     document.getElementById('checkdestination').innerHTML = "This field can't be blank";
     document.getElementById('Destination').style.borderColor = '#ff3860';
    return false;
  }else if (passenger == false){
     document.getElementById('checkpass').innerHTML = "This field can't be blank";
     document.getElementById('num').style.borderColor = '#ff3860';
    return false;
    }else if (date == false){
     document.getElementById('checkdate').innerHTML = "This field can't be blank";
     document.getElementById('date').style.borderColor = '#ff3860';
    return false;
    }
}



//Form Validation For Admin Login

function CheckloginAdmin(){
    let Email = document.Adminform.AdminEmail.value;
    let Password = document.Adminform.Adminpassword.value;

    if(Email == false){
      document.getElementById('checkEmail').innerHTML = "This field can't be blank";
      document.getElementById('AdminEmail').style.borderColor = '#ff3860';
      return false;
    }else if (Password == false){
       document.getElementById('checkPassword').innerHTML = "This field can't be blank";
      document.getElementById('Adminpassword').style.borderColor = '#ff3860';
      return false;
    }

}
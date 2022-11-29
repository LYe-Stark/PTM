$(function(){
// ========== Form-select-option ========== //
$(".step_1").on('click', function(){
  $(".step_1").removeClass("active");
  $(this).addClass("active");
});
$(".step_2").on('click', function(){
  $(".step_2").removeClass("active");
  $(this).addClass("active");
});
$(".step_3").on('click', function(){
  $(".step_3").removeClass("active");
  $(this).addClass("active");
});
$(".step_4").on('click', function(){
  $(".step_4").removeClass("active");
  $(this).addClass("active");
});
$(".step_5").on('click', function(){
  $(".step_5").removeClass("active");
  $(this).addClass("active");
});
$(".step_6").on('click', function(){
  $(".step_6").removeClass("active");
  $(this).addClass("active");
});
$(".step_7").on('click', function(){
  $(".step_7").removeClass("active");
  $(this).addClass("active");
});
$(".step_8").on('click', function(){
  $(".step_8").removeClass("active");
  $(this).addClass("active");
});
$(".step_9").on('click', function(){
  $(".step_9").removeClass("active");
  $(this).addClass("active");
});
$(".step_10").on('click', function(){
  $(".step_10").removeClass("active");
  $(this).addClass("active");
});

});
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function RandArray(array){
    var rand = Math.random()*array.length | 0;
    var rValue = array[rand];
    return rValue;
}

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("multisteps_form_panel");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Valider";

  } else {
    document.getElementById("nextBtn").innerHTML = "Suivant";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

/**************************************************************************************************************************************************************************************************** */

   /*$(document).on("click", "#nextBtn", function(){
    if(document.getElementById("nextBtn").innerHTML == "Valider"){
      var MyArray = ["chat.php","cherdegay.php", "kaeloo.php","moignon.php","eugli.php","kouin.php","mouton.php","olaf.php","olga.php","pretty.php","ursulla.php"];
      var rando = RandArray(MyArray);
      
      $.ajax({//http://api.jquery.com/jQuery.ajax/
               url: "yourServer.php",
               type: "POST",
               data: rando,
               dataType: "json"
            });
    }
   });*/

/*******************************************************************************/

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("multisteps_form_panel");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("wizard").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("multisteps_form_panel");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}

function move() {
  var elem = document.getElementById("myBar"); 
  var width = parseInt(elem.innerHTML);
  var aim = width + 25;
  var id = setInterval(frame, 25);
  
  function frame() {
      if (width >= aim) {
          clearInterval(id);
      } else if(width >= 100) {
          width=0; 
          aim = 25;
          elem.style.width = width + '%'; 
          elem.innerHTML = width * 1 + '%';
      } else {
          width++;
          elem.style.width = width + '%'; 
          elem.innerHTML = width * 1 + '%';
      }
  }
}


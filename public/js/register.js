$(".radio-group .radio").on("click", function () {
  $(".selected .fa").removeClass("fa-check");
  $(".radio").removeClass("selected");
  $(this).addClass("selected");
  if ($("#suser").hasClass("selected") == true) {
    $(".next").prop("disabled", true);
    $(".searchfield").show();
  } else {
    setFormFields(false);
    $(".next").prop("disabled", false);
    $("#filter-records").html("");
    $(".searchfield").hide();
  }
});
var step = 1;
$(document).ready(function () { stepProgress(step); });

$(".next").on("click", function () {
  var nextstep = false;
  if (step == 2) {
    nextstep = checkForm("userinfo");
  } else {
    nextstep = true;
  }
  if (nextstep == true) {
    if (step < $(".step").length) {
      $(".step").show();
      $(".step")
        .not(":eq(" + step++ + ")")
        .hide();
      stepProgress(step);
    }
    hideButtons(step);
  }
});

// ON CLICK BACK BUTTON
$(".back").on("click", function () {
  if (step > 1) {
    step = step - 2;
    $(".next").trigger("click");
  }
  hideButtons(step);
});

// CALCULATE PROGRESS BAR
stepProgress = function (currstep) {
  var percent = parseFloat(80 / $(".step").length) * currstep;
  percent = percent.toFixed();
  $(".progress-bar")
    .css("width", percent + "%")
    .html(percent + "%");
};

// DISPLAY AND HIDE "NEXT", "BACK" AND "SUMBIT" BUTTONS
hideButtons = function (step) {
  var limit = parseInt($(".step").length);
  $(".action").hide();
  if (step < limit) {
    $(".next").show();
    $(".volver").show();
  }
  if (step > 1) {
    $(".back").show();
    $(".volver").hide();
  }
  if (step == limit) {
    $(".next").hide();
    $(".submit").show();
  }
};

function setFormFields(id) {
  if (id != false) {
    // FILL STEP 2 FORM FIELDS
    d = data.find(x => x.id === id);
    $('#business_name').val(d.business_name);
    $('#business_identification').val(d.business_identification);
    $('#business_phone').val(d.business_phone);
    $('#business_email').val(d.business_email);
    $('#business_department').val(d.business_department);
    $('#business_municipality').val(d.business_municipality);
    $('#business_address').val(d.business_address);
    $('#name').val(d.name);   
    $('#lastname').val(d.lastname);   
    $('#identification').val(d.identification); 
    $('#phone').val(d.phone);    
    $('#email').val(d.email);
    $('#password').val(d.password);                                     
  } else {
    // EMPTY USER SEARCH INPUT
    $("#txt-search").val('');
    // EMPTY STEP 2 FORM FIELDS
    $('#business_name').val('');
    $('#business_identification').val('');
    $('#business_phone').val('');
    $('#business_email').val('');
    $('#business_department').val('');
    $('#business_municipality').val('');
    $('#business_address').val('');
    $('#name').val(''); 
    $('#lastname').val('');   
    $('#identification').val('');
    $('#phone').val('');
    $('#email').val('');            
    $('#password').val('');                       
  }
}

function checkForm(val) {
  // CHECK IF ALL "REQUIRED" FIELD ALL FILLED IN
  var valid = true;
  $("#" + val + " input:required").each(function () {
    if ($(this).val() === "") {
      $(this).addClass("is-invalid");
      valid = false;
    } else {
      $(this).removeClass("is-invalid");
    }
  });
  return valid;
}

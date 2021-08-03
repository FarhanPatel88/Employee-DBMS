$("#first-div-button-2").mouseenter(function() { hideMe_1(); });
$("#first-div-button-2").mouseenter(function() { showsub_1();} );
$("#first").mouseleave(function() { showMe_1(); });
$("#first").mouseleave(function() { hidesub_1(); });
$("#first-div-button-1").mouseenter(function () {
  $(this).css("transform", "scale(1.05)");
  // $(this).css("background-color", "#A4A3A4");
});
$("#first-div-button-1").mouseleave(function () {
  $(this).css("transform", "scale(1)");
  // $(this).css("background-color", "white");
});
$("#first-div-button-3").mouseenter(function () {
  $(this).css("transform", "scale(1.05)");
});
$("#first-div-button-3").mouseleave(function () {
  $(this).css("transform", "scale(1)");
});
$("#first-div-button-4").mouseenter(function () {
  $(this).css("transform", "scale(1.05)");
});
$("#first-div-button-4").mouseleave(function () {
  $(this).css("transform", "scale(1)");
});

function hideMe_1() {
  $("#first-div-button-2").css("transform", "scale(0)");
  $("#first-div-button-2").css("z-index", "-1");
  $("#first-div-button-2").css("visibility", "hidden");
}

function showMe_1() {
  $("#first-div-button-2").css("transform", "scale(1)");
  $("#first-div-button-2").css("z-index", "10");
  $("#first-div-button-2").css("visibility", "visible");
}

function showsub_1() {
  $("#first-div-button-1").css("transform", "scale(1)");
  $("#first-div-button-1").css("z-index", "10");
  $("#first-div-button-1").css("visibility", "visible");
  $("#first-div-button-3").css("transform", "scale(1)");
  $("#first-div-button-3").css("z-index", "10");
  $("#first-div-button-3").css("visibility", "visible");
  $("#first-div-button-4").css("transform", "scale(1)");
  $("#first-div-button-4").css("z-index", "10");
  $("#first-div-button-4").css("visibility", "visible");
}
function hidesub_1() {
  $("#first-div-button-1").css("transform", "scale(0)");
  $("#first-div-button-1").css("z-index", "-1");
  $("#first-div-button-1").css("visibility", "hidden");
  $("#first-div-button-3").css("transform", "scale(0)");
  $("#first-div-button-3").css("z-index", "-1");
  $("#first-div-button-3").css("visibility", "hidden");
  $("#first-div-button-4").css("transform", "scale(0)");
  $("#first-div-button-4").css("z-index", "-1");
  $("#first-div-button-4").css("visibility", "hidden");
}



$("#second-div-button-2").mouseenter(function() { hideMe_2(); });
$("#second-div-button-2").mouseenter(function() { showsub_2();} );
$("#second").mouseleave(function() { showMe_2(); });
$("#second").mouseleave(function() { hidesub_2(); });
$("#second-div-button-1").mouseenter(function () {
  $(this).css("transform", "scale(1.05)");
});
$("#second-div-button-1").mouseleave(function () {
  $(this).css("transform", "scale(1)");
});
$("#second-div-button-3").mouseenter(function () {
  $(this).css("transform", "scale(1.05)");
});
$("#second-div-button-3").mouseleave(function () {
  $(this).css("transform", "scale(1)");
});

function hideMe_2() {
  $("#second-div-button-2").css("transform", "scale(0)");
  $("#second-div-button-2").css("z-index", "-1");
  $("#second-div-button-2").css("visibility", "hidden");
}

function showMe_2() {
  $("#second-div-button-2").css("transform", "scale(1)");
  $("#second-div-button-2").css("z-index", "10");
  $("#second-div-button-2").css("visibility", "visible");
}

function showsub_2() {
  $("#second-div-button-1").css("transform", "scale(1)");
  $("#second-div-button-1").css("z-index", "10");
  $("#second-div-button-1").css("visibility", "visible");
  $("#second-div-button-3").css("transform", "scale(1)");
  $("#second-div-button-3").css("z-index", "10");
  $("#second-div-button-3").css("visibility", "visible");
}
function hidesub_2() {
  $("#second-div-button-1").css("transform", "scale(0)");
  $("#second-div-button-1").css("z-index", "-1");
  $("#second-div-button-1").css("visibility", "hidden");
  $("#second-div-button-3").css("transform", "scale(0)");
  $("#second-div-button-3").css("z-index", "-1");
  $("#second-div-button-3").css("visibility", "hidden");
}


// $("#fourth-div-button-2").mouseenter(function() { hideMe_3(); });
// $("#fourth-div-button-2").mouseenter(function() { showsub_3();} );
// $("#fourth").mouseleave(function() { showMe_3(); });
// $("#fourth").mouseleave(function() { hidesub_3(); });
// $("#fourth-div-button-1").mouseenter(function () {
//   $(this).css("transform", "scale(1.05)");
// });
// $("#fourth-div-button-1").mouseleave(function () {
//   $(this).css("transform", "scale(1)");
// });
// $("#fourth-div-button-3").mouseenter(function () {
//   $(this).css("transform", "scale(1.05)");
// });
// $("#fourth-div-button-3").mouseleave(function () {
//   $(this).css("transform", "scale(1)");
// });
//
// function hideMe_3() {
//   $("#fourth-div-button-2").css("transform", "scale(0)");
//   $("#fourth-div-button-2").css("z-index", "-1");
//   $("#fourth-div-button-2").css("visibility", "hidden");
// }
//
// function showMe_3() {
//   $("#fourth-div-button-2").css("transform", "scale(1)");
//   $("#fourth-div-button-2").css("z-index", "10");
//   $("#fourth-div-button-2").css("visibility", "visible");
// }
//
// function showsub_3() {
//   $("#fourth-div-button-1").css("transform", "scale(1)");
//   $("#fourth-div-button-1").css("z-index", "10");
//   $("#fourth-div-button-1").css("visibility", "visible");
//   $("#fourth-div-button-3").css("transform", "scale(1)");
//   $("#fourth-div-button-3").css("z-index", "10");
//   $("#fourth-div-button-3").css("visibility", "visible");
// }
// function hidesub_3() {
//   $("#fourth-div-button-1").css("transform", "scale(0)");
//   $("#fourth-div-button-1").css("z-index", "-1");
//   $("#fourth-div-button-1").css("visibility", "hidden");
//   $("#fourth-div-button-3").css("transform", "scale(0)");
//   $("#fourth-div-button-3").css("z-index", "-1");
//   $("#fourth-div-button-3").css("visibility", "hidden");
// }



$("#fifth-div-button-4").mouseenter(function() { hideMe_4(); });
$("#fifth-div-button-4").mouseenter(function() { showsub_4();} );
$("#fifth-div-button-2").mouseenter(function() { hideMe_5();} );
$("#fifth-div-button-2").mouseenter(function() { showsub_5();} );
$("#fifth-div-button-6").mouseenter(function() { hideMe_6();} );
$("#fifth-div-button-6").mouseenter(function() { showsub_6();} );
$("#fifth").mouseleave(function() { showMe_4(); });
$("#fifth").mouseleave(function() { hidesub_4(); });
$("#fifth").mouseleave(function() { hidesub_6(); });
$("#fifth").mouseleave(function() { hideMe_6(); });
$("#fifth").mouseleave(function() { hideMe_5(); });
$("#fifth-div-button-1").mouseleave(function() { showsub_4(); });
$("#fifth-div-button-1").mouseleave(function() { hidesub_4(); });
$("#fifth-div-button-3").mouseleave(function() { showsub_4(); });
$("#fifth-div-button-3").mouseleave(function() { hidesub_4(); });
$("#fifth-div-button-5").mouseleave(function() { showMe_6(); });
$("#fifth-div-button-5").mouseleave(function() { hidesub_6(); });
$("#fifth-div-button-7").mouseleave(function() { showMe_6(); });
$("#fifth-div-button-7").mouseleave(function() { hidesub_6(); });

$("#fifth-div-button-1").mouseenter(function () {
  $(this).css("transform", "scale(1.05)");
});
// $("#fifth-div-button-1").mouseleave(function () {
//   $(this).css("transform", "scale()");
// });
$("#fifth-div-button-3").mouseenter(function () {
  $(this).css("transform", "scale(1.05)");
});
// $("#fifth-div-button-3").mouseleave(function () {
//   $(this).css("transform", "scale(1)");
// });
$("#fifth-div-button-5").mouseenter(function () {
  $(this).css("transform", "scale(1.05)");
});
// $("#fifth-div-button-5").mouseleave(function () {
//   $(this).css("transform", "scale(1)");
// });
$("#fifth-div-button-7").mouseenter(function () {
  $(this).css("transform", "scale(1.05)");
});
// $("#fifth-div-button-7").mouseleave(function () {
//   $(this).css("transform", "scale(1)");
// });

function hideMe_4() {
  $("#fifth-div-button-4").css("transform", "scale(0)");
  $("#fifth-div-button-4").css("z-index", "-1");
  $("#fifth-div-button-4").css("visibility", "hidden");
}

function showMe_4() {
  $("#fifth-div-button-4").css("transform", "scale(1)");
  $("#fifth-div-button-4").css("z-index", "10");
  $("#fifth-div-button-4").css("visibility", "visible");
}

function showsub_4() {
  $("#fifth-div-button-2").css("transform", "scale(1)");
  $("#fifth-div-button-2").css("z-index", "10");
  $("#fifth-div-button-2").css("visibility", "visible");
  $("#fifth-div-button-6").css("transform", "scale(1)");
  $("#fifth-div-button-6").css("z-index", "10");
  $("#fifth-div-button-6").css("visibility", "visible");
}
function hidesub_4() {
  $("#fifth-div-button-1").css("transform", "scale(0)");
  $("#fifth-div-button-1").css("z-index", "-1");
  $("#fifth-div-button-1").css("visibility", "hidden");
  $("#fifth-div-button-3").css("transform", "scale(0)");
  $("#fifth-div-button-3").css("z-index", "-1");
  $("#fifth-div-button-3").css("visibility", "hidden");
}

function showsub_5() {
  $("#fifth-div-button-1").css("transform", "scale(1)");
  $("#fifth-div-button-1").css("z-index", "10");
  $("#fifth-div-button-1").css("visibility", "visible");
  $("#fifth-div-button-3").css("transform", "scale(1)");
  $("#fifth-div-button-3").css("z-index", "10");
  $("#fifth-div-button-3").css("visibility", "visible");
}

function hideMe_5() {
  $("#fifth-div-button-2").css("transform", "scale(0)");
  $("#fifth-div-button-2").css("z-index", "-1");
  $("#fifth-div-button-2").css("visibility", "hidden");
}

function hideMe_6() {
  $("#fifth-div-button-6").css("transform", "scale(0)");
  $("#fifth-div-button-6").css("z-index", "-1");
  $("#fifth-div-button-6").css("visibility", "hidden");
}

function showMe_6() {
  $("#fifth-div-button-6").css("transform", "scale(1)");
  $("#fifth-div-button-6").css("z-index", "10");
  $("#fifth-div-button-6").css("visibility", "visible");
}
function showsub_6() {
  $("#fifth-div-button-5").css("transform", "scale(1)");
  $("#fifth-div-button-5").css("z-index", "10");
  $("#fifth-div-button-5").css("visibility", "visible");
  $("#fifth-div-button-7").css("transform", "scale(1)");
  $("#fifth-div-button-7").css("z-index", "10");
  $("#fifth-div-button-7").css("visibility", "visible");
}

function hidesub_6() {
  $("#fifth-div-button-5").css("transform", "scale(0)");
  $("#fifth-div-button-5").css("z-index", "-1");
  $("#fifth-div-button-5").css("visibility", "hidden");
  $("#fifth-div-button-7").css("transform", "scale(0)");
  $("#fifth-div-button-7").css("z-index", "-1");
  $("#fifth-div-button-7").css("visibility", "hidden");
}

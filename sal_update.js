
let today = new Date();
document.getElementById("today").value = today.getFullYear() + "-"
        + String(today.getMonth() + 101).slice(-2) + "-"
        + String(today.getDate() + 100).slice(-2);

  $("#reset").click(function() {
      $("#emp_id").val(this.defaultValue);
      $("#sal_id").val(this.defaultValue);
      $("#sal_amt").val(this.defaultValue);
});

    // let form = document.forms.sal_form;
    // // let num = 1;
    //
    // // function validateForm (t, evnt) {
    // //     form.sal_id.setCustomValidity("");
    // //     let num = isValid(t, evnt);
    // //     let str = $("#emp_id").val("" + )
    // //
    // //     if(num) {
    // //         if($("#emp_id").val != )
    // //     }
    // // }
    //
    //     function isValid(el, evnt) {
    //         var charC = (evnt.which) ? evnt.which : evnt.keyCode;
    //         if (charC == 46) {
    //             if (el.value.indexOf('.') === -1) {
    //                 return true;
    //             }
    //             else {
    //                 return false;
    //             }
    //         }
    //         else {
    //             if (charC > 31 && (charC < 48 || charC > 57))
    //                 return false;
    //             }
    //             return true;
    //     }
    //
    //     let char = 43.3;
    //
    //     if(isInteger(char)) {
    //         console.log(char);
    //     }

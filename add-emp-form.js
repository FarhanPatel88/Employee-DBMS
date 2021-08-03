

// let today = new Date();
// document.getElementById("join-date").value = today.getFullYear() + "-"
//         + String(today.getMonth() + 101).slice(-2) + "-"
//         + String(today.getDate() + 100).slice(-2);

$("#reset").on("click", function () {
    $("#fname").val(this.defaultValue);
    $("#lname").val(this.defaultValue);
    $("#dob").val(this.defaultValue);
    $("#join-date").val(this.defaultValue);
    $("#email-id").val(this.defaultValue);
    $("#loc").val(this.defaultValue);
    $("#pin").val(this.defaultValue);
    $("#ap-name").val(this.defaultValue);
    $("#res-floor").val(this.defaultValue);
    $("#dept-id").val(this.defaultValue);
    $("#pro-id").val(this.defaultValue);
    $("#pos").val(this.defaultValue);
})


let today = new Date();
document.getElementById("today").value = today.getFullYear() + "-"
        + String(today.getMonth() + 101).slice(-2) + "-"
        + String(today.getDate() + 100).slice(-2);

  $("#reset").click(function() {
      $("#pro_id").val(this.defaultValue);
      $("#dept_id").val(this.defaultValue);
      $("#pro_desc").val(this.defaultValue);
      $("#pro_end").val(this.defaultValue);
});

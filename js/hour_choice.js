window.addEventListener("load", function () {
  // var selectedDate = 
  var today = new Date();
  var currentYear = today.getFullYear();
  var currentMonth = today.getMonth();
  var currentDay = today.getDate();

  var hours = ["00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00", "24:00"];

  var hourHeader = "";
  for (hour in hours) {
    hourHeader += "<tr><th class='table-hour-th'>" + hours[hour] + "<td><a href='plan_add.php?selected_hour=" + hour +"'>予定を入力</a></td></tr>";
  }
  hourHeader += "";

  document.getElementById("thead-hour").innerHTML = hourHeader;
})

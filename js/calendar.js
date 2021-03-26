window.addEventListener("load", function () {
  var today = new Date();
  var currentYear = today.getFullYear();
  var currentMonth = today.getMonth();
  
  var createYear = generate_year_range(1980, 2080);

  document.getElementById("year").innerHTML = createYear;

  var days = ["Sun", "Mon", "Tue", "Wed", "Thr", "Fri", "Sat"];

  var dayHeader = "<tr>";
  for (day in days) {
    dayHeader += "<th data-days='" + days[day] + "'>" + days[day] + "</th>";
  }
  dayHeader += "</tr>";

  document.getElementById("thead-month").innerHTML = dayHeader;

  monthAndYear = document.getElementById("monthAndYear");
  showCalendar(currentMonth, currentYear);
})

function generate_year_range(start, end) {
  var years = "";
  for (var year = start; year <= end; year++) {
    years += "<option value='" + year + "'>" + year + "</option>";
  }
  return years;
}

function today() {
  var today = new Date();
  var currentYear = today.getFullYear();
  var currentMonth = today.getMonth();
  showCalendar(currentMonth, currentYear);
}

function next() {
  var selectYear = document.getElementById("year");
  var selectMonth = document.getElementById("month");
  selectYear = parseInt(selectYear.value);
  selectMonth = parseInt(selectMonth.value);
  var currentYear = (selectMonth === 11) ? selectYear + 1 : selectYear;
  var currentMonth = (selectMonth + 1) % 12;
  showCalendar(currentMonth, currentYear);
}

function previous() {
  var selectYear = document.getElementById("year");
  var selectMonth = document.getElementById("month");
  selectYear = parseInt(selectYear.value);
  selectMonth = parseInt(selectMonth.value);
  var currentYear = (selectMonth === 0) ? selectYear - 1 : selectYear;
  var currentMonth = (selectMonth === 0) ? 11 : selectMonth - 1;
  showCalendar(currentMonth, currentYear);
}

function jump() {
  var selectYear = document.getElementById("year");
  var selectMonth = document.getElementById("month");
  currentYear = parseInt(selectYear.value);
  currentMonth = parseInt(selectMonth.value);
  showCalendar(currentMonth, currentYear);
}

function showCalendar(month, year) {
  var today = new Date();
  var selectYear = document.getElementById("year");
  var selectMonth = document.getElementById("month");
  var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
  var firstDay = (new Date(year, month)).getDay();

  tbl = document.getElementById("calendar-body");

  tbl.innerHTML = "";

  monthAndYear.innerHTML = months[month] + " " + year;
  selectYear.value = year;
  selectMonth.value = month;

  // creating all cells
  var date = 1;
  for (var i = 0; i < 6; i++) {
    var row = document.createElement("tr");

    for (var j = 0; j < 7; j++) {
      if (i === 0 && j < firstDay) {
        cell = document.createElement("td");
        cellText = document.createTextNode("");
        cell.appendChild(cellText);
        row.appendChild(cell);
      } else if (date > daysInMonth(month, year)) {
        break;
      } else {
        cell = document.createElement("td");
        cell.setAttribute("data-date", date);
        cell.setAttribute("data-month", month + 1);
        cell.setAttribute("data-year", year);
        cell.setAttribute("data-month_name", months[month]);
        cell.className = "date-picker";
        cell.innerHTML = "<span><a href='add_plan.php'>"+ date + "</a></span>";
        // cell.innerHTML = "<span>" + date + "</span>";
        if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
          cell.className = "today";
        }
        row.appendChild(cell);
        date++;
      }
    }

    tbl.appendChild(row);
  }

}

//月の日数
function daysInMonth(iMonth, iYear) {
  return  new Date(iYear, iMonth+1, 0).getDate();
}

function showDay()
{
  console.log(day);
}

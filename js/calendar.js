window.addEventListener("load", function () {
  var today = new Date();
  var currentYear = today.getFullYear();
  var currentMonth = today.getMonth();
  var createYear = generate_year_range(1980, 2080);

  document.getElementsByClassName("js-year")[0].innerHTML = createYear;

  var days = ["Sun", "Mon", "Tue", "Wed", "Thr", "Fri", "Sat"];

  var dayHeader = "<tr>";
  for (day in days) {
    dayHeader += `<th data-days= ${days[day]}  > ${days[day]}  </th>`;
  }
  dayHeader += "</tr>";

  document.getElementById("thead-month").innerHTML = dayHeader;

  monthAndYear = document.getElementById("monthAndYear");
  showCalendar(currentMonth, currentYear);
})

function generate_year_range(start, end) {
  var years = "";
  for (var year = start; year <= end; year++) {
    years += `<option value= ${year}  > ${year}  </option>`;
  }
  return years;
}

function today() {
  var today = new Date();
  var currentYear = today.getFullYear();
  var currentMonth = today.getMonth();
  return showCalendar(currentMonth, currentYear);
}

function next() {
  var selectYear = document.getElementsByClassName("js-year")[0];
  var selectMonth = document.getElementsByClassName("js-month")[0];
  selectYear = parseInt(selectYear.value);
  selectMonth = parseInt(selectMonth.value);
  var currentYear = (selectMonth === 11) ? selectYear + 1 : selectYear;
  var currentMonth = (selectMonth + 1) % 12;
  return showCalendar(currentMonth, currentYear);
}

function previous() {
  var selectYear = document.getElementsByClassName("js-year")[0];
  var selectMonth = document.getElementsByClassName("js-month")[0];
  selectYear = parseInt(selectYear.value);
  selectMonth = parseInt(selectMonth.value);
  var currentYear = (selectMonth === 0) ? selectYear - 1 : selectYear;
  var currentMonth = (selectMonth === 0) ? 11 : selectMonth - 1;
  return showCalendar(currentMonth, currentYear);
}

function jump() {
  var selectYear = document.getElementsByClassName("js-year")[0];
  var selectMonth = document.getElementsByClassName("js-month")[0];
  currentYear = parseInt(selectYear.value);
  currentMonth = parseInt(selectMonth.value);
  showCalendar(currentMonth, currentYear);
}

function showCalendar(month, year) {
  var selectYear = document.getElementsByClassName("js-year")[0];
  var selectMonth = document.getElementsByClassName("js-month")[0];
  var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
  calendar = new Calendar(month, year, months, selectYear, selectMonth);

  tbl = document.getElementById("calendar-body");
  tbl.innerHTML = "";

  monthAndYear.innerHTML = calendar.createMonthAndYearHTML();

  var table = calendar.createTable();
}

function daysInMonth(iMonth, iYear) {
  return new Date(iYear, iMonth + 1, 0).getDate();
}

class Calendar {
  constructor(month, year, months, selectYear, selectMonth) {
    this.month = month;
    this.year = year;
    this.months = months;
    this.selectYear = selectYear;
    this.selectMonth = selectMonth;
  }

  createMonthAndYearHTML() {
    return `${this.months[this.month]}  ${this.year}`;
  }

  createTable() {
    var today = new Date();
    var startDay = (new Date(this.year, this.month)).getDay();;
    this.selectYear.value = this.year;
    this.selectMonth.value = this.month;
    // creating all cells
    var date = 1;
    for (var i = 0; i < 6; i++) {
      var row = document.createElement("tr");
      for (var j = 0; j < 7; j++) {
        if (i === 0 && j < startDay) {
          cell = document.createElement("td");
          cellText = document.createTextNode("");
          cell.appendChild(cellText);
          row.appendChild(cell);
        } else if (date > daysInMonth(this.month, this.year)) {
          break;
        } else {
          cell = document.createElement("td");
          cell.setAttribute("data-date", date);
          cell.setAttribute("data-month", this.month + 1);
          cell.setAttribute("data-year", this.year);
          cell.setAttribute("data-month_name", this.months[this.month]);
          cell.className = "date-picker";
          this.selectedMonth = this.month + 1;
          cell.innerHTML = `<span><a href='/controllers/hour_choice.php?selected_date=${this.year}/${this.selectedMonth}/${date}'>${date}</a></span>`;
          if (date === today.getDate() && this.year === today.getFullYear() && this.month === today.getMonth()) {
            cell.className = "today";
          }
          row.appendChild(cell);
          date++;
        }
      }
      tbl.appendChild(row);
    }
    return tbl;
  }
}



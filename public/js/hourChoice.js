window.addEventListener("load", function () {

  var hours = ["00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00", "24:00"];


  hourChoice = new HourChoice(hours);
  hourHeader = hourChoice.htmlHourHeader();

  document.getElementById("thead-hour").innerHTML = hourHeader;
})

class HourChoice {
  constructor(hours) {
    this.hours = hours;
  }

  htmlHourHeader() {
    var hourHeader = "";
    for (this.hour in this.hours) {
      hourHeader += `<tr><th class='table-hour-th'> ${this.hours[this.hour]} <td><a href='/planAdd/?selectedHour=${this.hour}'>予定を入力</a></td></tr>`;
    }
    hourHeader += "";
    return hourHeader;
  }
}

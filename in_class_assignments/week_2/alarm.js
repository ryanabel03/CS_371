var alerts = ["Please Wake up", "Wake up now!", "Get your ASS OUT OF BED!"];
var i = 0;

function wakeMeUp() {
  alertResponse = confirm(alerts[i]);

  if(i == 2) {
    return true;
  }

  i++;

  if(alertResponse == false) {
    console.log("false result");
    setTimeout(wakeMeUp, 3000);

  }
}


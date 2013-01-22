questions = ["What is 3 * 5?", "How many legs does a spider have?", "What year is it?", "How many inches are in a foot?", "How many feet are in a yard?", "What number does Derek Jeter wear?"];
answers = [15, 8, 2013, 12, 3, 2];
results = [];

function startQuiz() {
  askQuestion();
}

function askQuestion() {
  getStoredResults();

  question = getCookie("question");

  if(!question) {
    question = 0;
  }

  if(!results) {
    results = [];
  }

  while(question < questions.length) {
    answer = prompt(questions[question]);
    if(answer) {
      results.push(answer);
      storeCookie("answers", results, 10);

      question++;
      storeCookie("question", question, 10);
    } else {
      question = 6;
    }
  }
  if(results.length == answers.length) {
    console.log("display results");
    displayResults();
  }
}

function getStoredResults() {
  recorded = getCookie("answers");

  if(recorded) {
    if(typeof(recorded) == "number") {
      results.push(recorded);
    } else {
      arr = recorded.split(",");
      i = 0;
      while(i < arr.length) {
        results[i] = arr[i];
        i++;
      }
    }
  }
}

function displayResults() {

  i = 0;
  correct = 0;
  while(i < answers.length) {
    if(answers[i] == results[i]) {
      correct++;
    }
  i++;
  }
  percentage = (correct / questions.length) * 100;
  alert("Congratulations, you finished the quiz.\nYou got " + correct + " questions correct out of " + answers.length);
}

function storeCookie(name, value, days) {
  if (days) {
      var date = new Date();
      date.setTime(date.getTime()+(days*24*60*60*1000));
      var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}

function getCookie(name) {
  var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function deleteAllCookies() {
    console.log("resetting cookies");
    var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
    	var cookie = cookies[i];
    	var eqPos = cookie.indexOf("=");
    	var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
    	document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
}

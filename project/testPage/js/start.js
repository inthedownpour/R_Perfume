const testStart = document.querySelector("#testStart");
const qFirst = document.querySelector("#qFirst");
const qFromFloral = document.querySelector("#qFromFloral");
const qFromFruit = document.querySelector("#qFromFruit");
const qFromAroma = document.querySelector("#qFromAroma");

const soap = document.querySelector("#soap");
const spicy = document.querySelector("#spicy");
const rose = document.querySelector("#rose");
const citrus = document.querySelector("#citrus");
const woody = document.querySelector("#woody");
const vanilla = document.querySelector("#vanilla");
const qSex = document.querySelector("#qSex");


//성별 1이면 남자, 2면 여자
var woman = 0;
var man = 0;




//사라졌다가 나타나는 시간 다시 조절하기!
function start() {

  testStart.style.WebkitAnimation = "fadeOut 1s";
  testStart.style.animation = "fadeOut 1s";

  setTimeout(() => {
    qSex.style.WebkitAnimation = "fadeIn 1s";
    qSex.style.animation = "fadeIn 1s";
    setTimeout(() => {
      testStart.style.display = "none";
      qSex.style.display = "block";
    }, 450)
  }, 450);
}

function begin(w, m) {
  woman = w;
  man = m;
  qSex.style.WebkitAnimation = "fadeOut 1s";
  qSex.style.animation = "fadeOut 1s";

  setTimeout(() => {
    qFirst.style.WebkitAnimation = "fadeIn 1s";
    qFirst.style.animation = "fadeIn 1s";
    setTimeout(() => {
      qSex.style.display = "none";
      qFirst.style.display = "block";
    }, 450)
  }, 450);
}


google.charts.load("current", {
  packages: ['corechart']
});




function drawChartSoap(woman,man) {
  var data = google.visualization.arrayToDataTable([
    ["Element", "Density", {
      role: "style"
    }],
    ["여성적", woman, "#FF9ACD"],
    ["남성적", man, "#0063DC"],
    ["플로럴", 2, "#D7B5EB"],
    ["프루티", 0, "#A85DFF"],
    ["아로마", 0, "#98DFD8"],
    ["비누", 1, "skyblue"],
    ["스파이시", 0, "#FF775C"],
    ["로즈", 0, "#FF4848"],
    ["시트러스", 0, "#FFF136"],
    ["우디", 0, "brown"],
    ["바닐라", 0, "#FFFFB1"]
  ]);

  var view = new google.visualization.DataView(data);
  view.setColumns([0, 1,
    {
      calc: "stringify",
      sourceColumn: 1,
      type: "string",
      role: "annotation"
    },
    2
  ]);

  var options = {
    title: "향수 취향 테스트 결과",
    width: 800,
    height: 500,
    bar: {
      groupWidth: "80%"
    },
    legend: {
      position: "none"
    },
  };
  var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_soap"));
  chart.draw(view, options);
}

function drawChartSpicy(woman,man) {
  var data = google.visualization.arrayToDataTable([
    ["Element", "Density", {
      role: "style"
    }],
    ["여성적", woman, "#FF9ACD"],
    ["남성적", man, "#0063DC"],
    ["플로럴", 2, "#D7B5EB"],
    ["프루티", 0,"#A85DFF"],
    ["아로마", 0, "#98DFD8"],
    ["비누", 0, "skyblue"],
    ["스파이시", 1, "#FF775C"],
    ["로즈", 0, "#FF4848"],
    ["시트러스", 0, "#FFF136"],
    ["우디", 0, "brown"],
    ["바닐라", 0, "#FFFFB1"]
  ]);

  var view = new google.visualization.DataView(data);
  view.setColumns([0, 1,
    {
      calc: "stringify",
      sourceColumn: 1,
      type: "string",
      role: "annotation"
    },
    2
  ]);

  var options = {
    title: "향수 취향 테스트 결과",
    width: 800,
    height: 500,
    bar: {
      groupWidth: "80%"
    },
    legend: {
      position: "none"
    },
  };
  var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_spicy"));
  chart.draw(view, options);
}

function drawChartRose(woman,man) {
  var data = google.visualization.arrayToDataTable([
    ["Element", "Density", {
      role: "style"
    }],
    ["여성적", woman, "#FF9ACD"],
    ["남성적", man, "#0063DC"],
    ["플로럴", 0, "#D7B5EB"],
    ["프루티", 2,"#A85DFF"],
    ["아로마", 0, "#98DFD8"],
    ["비누", 0, "skyblue"],
    ["스파이시", 0, "#FF775C"],
    ["로즈", 1, "#FF4848"],
    ["시트러스", 0, "#FFF136"],
    ["우디", 0, "brown"],
    ["바닐라", 0, "#FFFFB1"]
  ]);

  var view = new google.visualization.DataView(data);
  view.setColumns([0, 1,
    {
      calc: "stringify",
      sourceColumn: 1,
      type: "string",
      role: "annotation"
    },
    2
  ]);

  var options = {
    title: "향수 취향 테스트 결과",
    width: 800,
    height: 500,
    bar: {
      groupWidth: "80%"
    },
    legend: {
      position: "none"
    },
  };
  var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_rose"));
  chart.draw(view, options);
}

function drawChartCitrus(woman,man) {
  var data = google.visualization.arrayToDataTable([
    ["Element", "Density", {
      role: "style"
    }],
    ["여성적", woman, "#FF9ACD"],
    ["남성적", man, "#0063DC"],
    ["플로럴", 0, "#D7B5EB"],
    ["프루티", 2,"#A85DFF"],
    ["아로마", 0, "#98DFD8"],
    ["비누", 0, "skyblue"],
    ["스파이시", 0, "#FF775C"],
    ["로즈", 0, "#FF4848"],
    ["시트러스", 1, "#FFF136"],
    ["우디", 0, "brown"],
    ["바닐라", 0, "#FFFFB1"]
  ]);

  var view = new google.visualization.DataView(data);
  view.setColumns([0, 1,
    {
      calc: "stringify",
      sourceColumn: 1,
      type: "string",
      role: "annotation"
    },
    2
  ]);

  var options = {
    title: "향수 취향 테스트 결과",
    width: 800,
    height: 500,
    bar: {
      groupWidth: "80%"
    },
    legend: {
      position: "none"
    },
  };
  var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_citrus"));
  chart.draw(view, options);
}

function drawChartWoody(woman,man) {
  var data = google.visualization.arrayToDataTable([
    ["Element", "Density", {
      role: "style"
    }],
    ["여성적", woman, "#FF9ACD"],
    ["남성적", man, "#0063DC"],
    ["플로럴", 0, "#D7B5EB"],
    ["프루티", 0,"#A85DFF"],
    ["아로마", 2, "#98DFD8"],
    ["비누", 0, "skyblue"],
    ["스파이시", 0, "#FF775C"],
    ["로즈", 0, "#FF4848"],
    ["시트러스", 0, "#FFF136"],
    ["우디", 1, "brown"],
    ["바닐라", 0, "#FFFFB1"]
  ]);

  var view = new google.visualization.DataView(data);
  view.setColumns([0, 1,
    {
      calc: "stringify",
      sourceColumn: 1,
      type: "string",
      role: "annotation"
    },
    2
  ]);

  var options = {
    title: "향수 취향 테스트 결과",
    width: 800,
    height: 500,
    bar: {
      groupWidth: "80%"
    },
    legend: {
      position: "none"
    },
  };
  var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_woody"));
  chart.draw(view, options);
}

function drawChartVanilla(woman,man) {
  var data = google.visualization.arrayToDataTable([
    ["Element", "Density", {
      role: "style"
    }],
    ["여성적", woman, "#FF9ACD"],
    ["남성적", man, "#0063DC"],
    ["플로럴", 0, "#D7B5EB"],
    ["프루티", 0,"#A85DFF"],
    ["아로마", 2, "#98DFD8"],
    ["비누", 0, "skyblue"],
    ["스파이시", 0, "#FF775C"],
    ["로즈", 0, "#FF4848"],
    ["시트러스", 0, "#FFF136"],
    ["우디", 1, "brown"],
    ["바닐라", 0, "#FFFFB1"]
  ]);

  var view = new google.visualization.DataView(data);
  view.setColumns([0, 1,
    {
      calc: "stringify",
      sourceColumn: 1,
      type: "string",
      role: "annotation"
    },
    2
  ]);

  var options = {
    title: "향수 취향 테스트 결과",
    width: 800,
    height: 500,
    bar: {
      groupWidth: "80%"
    },
    legend: {
      position: "none"
    },
  };
  var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_vanilla"));
  chart.draw(view, options);
}

function selectFloral() {

  qFirst.style.WebkitAnimation = "fadeOut 1s";
  qFirst.style.animation = "fadeOut 1s";

  setTimeout(() => {
    qFromFloral.style.WebkitAnimation = "fadeIn 1s";
    qFromFloral.style.animation = "fadeIn 1s";
    setTimeout(() => {
      qFirst.style.display = "none";
      qFromFloral.style.display = "block";
    }, 450)
  }, 450);
}

function selectFruit() {

  qFirst.style.WebkitAnimation = "fadeOut 1s";
  qFirst.style.animation = "fadeOut 1s";

  setTimeout(() => {
    qFromFruit.style.WebkitAnimation = "fadeIn 1s";
    qFromFruit.style.animation = "fadeIn 1s";
    setTimeout(() => {
      qFirst.style.display = "none";
      qFromFruit.style.display = "block";
    }, 450)
  }, 450);
}

function selectAroma() {

  qFirst.style.WebkitAnimation = "fadeOut 1s";
  qFirst.style.animation = "fadeOut 1s";

  setTimeout(() => {
    qFromAroma.style.WebkitAnimation = "fadeIn 1s";
    qFromAroma.style.animation = "fadeIn 1s";
    setTimeout(() => {
      qFirst.style.display = "none";
      qFromAroma.style.display = "block";
    }, 450)
  }, 450);
}

function selectSoap() {

  qFromFloral.style.WebkitAnimation = "fadeOut 1s";
  qFromFloral.style.animation = "fadeOut 1s";

  setTimeout(() => {
    soap.style.WebkitAnimation = "fadeIn 1s";
    soap.style.animation = "fadeIn 1s";
    setTimeout(() => {
      qFromFloral.style.display = "none";
      soap.style.display = "block";
    }, 450)
  }, 450);
  if (woman == 1) {
    google.charts.setOnLoadCallback(function() {
      drawChartSoap(1,0);
    });
  }
  else if (man == 1) {
    google.charts.setOnLoadCallback(function() {
      drawChartSoap(0,1);
    });
  }
}


function selectSpicy() {

  qFromFloral.style.WebkitAnimation = "fadeOut 1s";
  qFromFloral.style.animation = "fadeOut 1s";

  setTimeout(() => {
    spicy.style.WebkitAnimation = "fadeIn 1s";
    spicy.style.animation = "fadeIn 1s";
    setTimeout(() => {
      qFromFloral.style.display = "none";
      spicy.style.display = "block";
    }, 450)
  }, 450);

  if (woman == 1) {
    google.charts.setOnLoadCallback(function() {
      drawChartSpicy(1,0);
    });
  }
  else if (man == 1) {
    google.charts.setOnLoadCallback(function() {
      drawChartSpicy(0,1);
    });
  }
}

function selectRose() {

  qFromFruit.style.WebkitAnimation = "fadeOut 1s";
  qFromFruit.style.animation = "fadeOut 1s";

  setTimeout(() => {
    rose.style.WebkitAnimation = "fadeIn 1s";
    rose.style.animation = "fadeIn 1s";
    setTimeout(() => {
      qFromFruit.style.display = "none";
      rose.style.display = "block";
    }, 450)
  }, 450);
  if (woman == 1) {
    google.charts.setOnLoadCallback(function() {
      drawChartRose(1,0);
    });
  }
  else if (man == 1) {
    google.charts.setOnLoadCallback(function() {
      drawChartRose(0,1);
    });
  }
}

function selectCitrus() {

  qFromFruit.style.WebkitAnimation = "fadeOut 1s";
  qFromFruit.style.animation = "fadeOut 1s";

  setTimeout(() => {
    citrus.style.WebkitAnimation = "fadeIn 1s";
    citrus.style.animation = "fadeIn 1s";
    setTimeout(() => {
      qFromFruit.style.display = "none";
      citrus.style.display = "block";
    }, 450)
  }, 450);
  if (woman == 1) {
    google.charts.setOnLoadCallback(function() {
      drawChartCitrus(1,0);
    });
  }
  else if (man == 1) {
    google.charts.setOnLoadCallback(function() {
      drawChartCitrus(0,1);
    });
  }
}

function selectWoody() {

  qFromAroma.style.WebkitAnimation = "fadeOut 1s";
  qFromAroma.style.animation = "fadeOut 1s";

  setTimeout(() => {
    woody.style.WebkitAnimation = "fadeIn 1s";
    woody.style.animation = "fadeIn 1s";
    setTimeout(() => {
      qFromAroma.style.display = "none";
      woody.style.display = "block";
    }, 450)
  }, 450);
  if (woman == 1) {
    google.charts.setOnLoadCallback(function() {
      drawChartWoody(1,0);
    });
  }
  else if (man == 1) {
    google.charts.setOnLoadCallback(function() {
      drawChartWoody(0,1);
    });
  }
}

function selectVanilla() {

  qFromAroma.style.WebkitAnimation = "fadeOut 1s";
  qFromAroma.style.animation = "fadeOut 1s";

  setTimeout(() => {
    vanilla.style.WebkitAnimation = "fadeIn 1s";
    vanilla.style.animation = "fadeIn 1s";
    setTimeout(() => {
      qFromAroma.style.display = "none";
      vanilla.style.display = "block";
    }, 450)
  }, 450);
  if (woman == 1) {
    google.charts.setOnLoadCallback(function() {
      drawChartVanilla(1,0);
    });
  }
  else if (man == 1) {
    google.charts.setOnLoadCallback(function() {
      drawChartVanilla(0,1);
    });
  }
}

function OnMouseIn(elem) {
  elem.style.border = "solid 3px pink";
}

function OnMouseIn2(elem) {
  elem.style.border = "solid 3px skyblue";
}

function OnMouseOut(elem) {
  elem.style.border = "";
}

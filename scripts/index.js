(function (selector) {
    /*Инициализация календаря*/
    initCalendar(document.querySelector(selector));
  
    function initCalendar(calendar) {
      let date = new Date();
      let showedYear = date.getFullYear();
      let showedMonth = date.getMonth();
 
  
      let currentMoment = {
        year: showedYear,
        month: showedMonth,
        date: date.getDate(),
      };
  
      let dates = calendar.querySelector(".dates");
      //let info = calendar.querySelector(".info");
      let selectedMonth = calendar.querySelector(".select_month");
      let selectedYear = calendar.querySelector(".select_year");
      let optionsMonth = selectedMonth.querySelectorAll("option")
      let optionsYear = selectedYear.querySelectorAll("option")
      console.log(optionsMonth )
      console.log(optionsYear)
      let targetMonth;
      let targetYear;
      let submitBtn = document.querySelector('.submit_button')
      let userTargetData = {}
      
  
      changeSelectedMonth(selectedMonth);
      changeSelectedYear(selectedYear);
  
      drawCalendar(showedYear, showedMonth, currentMoment,optionsMonth,optionsYear, calendar);
  
      //let prev = calendar.querySelector(".prev");
      //let next = calendar.querySelector(".next");
      let tds = dates.querySelectorAll("td");
      let list_hours = document.querySelectorAll('p')
      eventListenerTargetDate(tds);
      targetHour(list_hours)
      /* prev.addEventListener("click", function () {
        showedYear = getPrevYear(showedYear, showedMonth);
        showedMonth = getPrevMonth(showedMonth);
  
        drawCalendar(showedYear, showedMonth, currentMoment, calendar);
        let newTds = dates.querySelectorAll('td')
        eventListenerTargetDate(newTds)
      });
  
      next.addEventListener("click", function () {
        showedYear = getNextYear(showedYear, showedMonth);
        showedMonth = getNextMonth(showedMonth);
  
        drawCalendar(showedYear, showedMonth, currentMoment, calendar);
        let newTds = dates.querySelectorAll('td')
        eventListenerTargetDate(newTds)
      });*/
      /*Функция для обозначения выбранной даты*/
  
      function eventListenerTargetDate(tds) {
        for (let i = 0; i < tds.length; i++) {
          tds[i].addEventListener("click", (event) => {
            if (tds[i].innerHTML != "") {
              let target = event.target;
              for (let j = 0; j < tds.length; j++) {
                tds[j].classList.remove("target");
              }
              target.classList.add("target");
            }
          });
        }
      }
      showCurrentMonth(showedMonth, optionsMonth);
        showCurrentYear(showedYear, optionsYear);
      /*Отрисовка чисел календаря */
      function drawCalendar(showedYear, showedMonth, currentMoment,optionsMonth,optionsYear, calendar) {
        drawDates(showedYear, showedMonth, dates);
        showCurrentDate(showedYear, showedMonth, currentMoment, dates);
      }
  
      /*Функции для смены месяцы и перерисовки таблицы */
      function changeSelectedMonth(options) {
        options.addEventListener("change", function () {
          targetMonth = +this.options[this.selectedIndex].id;
          drawCalendar(showedYear, targetMonth, currentMoment, calendar);
          let newTds = dates.querySelectorAll("td");
          eventListenerTargetDate(newTds);
          console.log(newTds)
        });
      }
  
      function changeSelectedYear(options) {
        options.addEventListener("change", function () {
          targetYear = +this.options[this.selectedIndex].value;
          drawCalendar(targetYear, showedMonth, currentMoment, calendar);
          let newTds = dates.querySelectorAll("td");
          eventListenerTargetDate(newTds);
        });
      }
  
      sendData(submitBtn,userTargetData,selectedYear, selectedMonth) 
    }
  
    function targetHour(list) {
      for (let i = 0; i < list.length; i++) {
        list[i].addEventListener("click", (event) => {
          let target = event.target
            for (let j = 0; j < list.length; j++) {
              list[j].classList.remove("target_hour");
          }
          target.classList.add("target_hour");
        });
      }
    }
  
    function sendData(button,object,year, month) {
      button.addEventListener('click', function() {
        let targetDay = document.querySelector('.target')
        let targetHour = document.querySelector('.target_hour')
        if(targetDay == null) {
          targetDay = document.querySelector('.current')
        }
        if(targetHour == null) {
            alert("Выберите время!")
        }
        object.year = year.value
        object.month = month.value
        object.day = targetDay.innerHTML
        object.hour = targetHour.innerHTML
        console.log(object)
        console.log(targetDay)
      })
    }
    /*Обозначение нынешней даты */
    function showCurrentDate(showedYear, showedMonth, currentMoment, dates) {
      if (
        showedYear == currentMoment["year"] &&
        showedMonth == currentMoment["month"]
      ) {
        let tds = dates.querySelectorAll("td");
        for (let i = 0; i < tds.length; i++) {
          if (tds[i].innerHTML == currentMoment["date"]) {
            tds[i].classList.add("current");
            break;
          }
        }
      }
    }
    /*Функция для выставляния нынешнего месяца */
    function showCurrentMonth(showedMonth, options) {
        for(let i = 0; i < options.length; i++) {
            if(options[i].id == showedMonth ) {
                options[i].setAttribute('selected','')
            }
        }
    
      }

      function showCurrentYear(showedYear, options) {
        for(let i = 0; i < 8; i++) {
            if(options[i].id == showedYear ) {
                options[i].setAttribute('selected','')
            }
        }
      }
    /*Функции для кнопок стрелок для вычисления предыдущего месяца и года  /*Отрисовка динамично месяца и года */
    /* function getPrevYear(year, month) {
      if (month === 0) {
        return year - 1;
      } else {
        return year;
      }
    }
  
    function getPrevMonth(month) {
      if (month === 0) {
        return 11;
      } else {
        return month - 1;
      }
    }
  
    function getNextYear(year, month) {
      if (month === 11) {
        return year + 1;
      } else {
        return year;
      }
    }
  
    function getNextMonth(month) {
      if (month === 11) {
        return 0;
      } else {
        return month + 1;
      }
    }*/
  
    /* function showInfo(year, month, elem) {
      elem.innerHTML = getMonthName(month) + " " + year;
    }
  
    function getMonthName(num) {
      let monthes = [
        "Январь",
        "Февраль",
        "Март",
        "Апрель",
        "Май",
        "Июнь",
        "Июль",
        "Август",
        "Сентябрь",
        "Октябрь",
        "Ноябрь",
        "Декабрь",
      ];
  
      return monthes[num];
    }*/
    /*Функция для отрисовка чисел календаря */
    function drawDates(year, month, dates) {
      let arr = [];
      let firstDateOfMonth = 1;
      let lastDateOfMonth = getLastDayOfMonth(year, month);
  
      let unshiftElemsNum = getUnshiftElemsNum(year, month);
      let pushElemsNum = getPushElemsNum(year, month);
  
      arr = createArr(firstDateOfMonth, lastDateOfMonth);
      arr = unshiftElems(unshiftElemsNum, "", arr);
      arr = pushElems(pushElemsNum, "", arr);
      arr = chunkArr(7, arr);
      createTable(arr, dates);
    }
  
    function createTable(arr, parent) {
      parent.innerHTML = "";
  
      for (let i = 0; i < arr.length; i++) {
        let tr = document.createElement("tr");
  
        for (let j = 0; j < arr[i].length; j++) {
          let td = document.createElement("td");
          td.innerHTML = arr[i][j];
          tr.appendChild(td);
        }
        parent.appendChild(tr);
      }
    }
  
    function createArr(from, to) {
      let arr = [];
      for (let i = from; i <= to; i++) {
        arr.push(i);
      }
  
      return arr;
    }
    /*Функции для добавления пустых ячеек и поиска нужных чисел для отрисовки таблицы */
    function unshiftElems(num, elem, arr) {
      for (let i = 0; i < num; i++) {
        arr.unshift(elem);
      }
  
      return arr;
    }
  
    function pushElems(num, elem, arr) {
      for (let i = 0; i < num; i++) {
        arr.push(elem);
      }
  
      return arr;
    }
  
    function getLastDayOfMonth(year, month) {
      if (month == 1) {
        if (isLeap(year)) {
          return 29;
        } else {
          return 28;
        }
      } else {
        let days = [31, undefined, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        return days[month];
      }
    }
  
    function isLeap(year) {
      if ((year % 4 == 0 && year % 100 != 1) || year % 400 == 0) {
        return true;
      } else {
        return false;
      }
    }
  
    function getUnshiftElemsNum(year, month) {
      let jsDayNum = getFirstWeekDayofMonthNum(year, month);
      let realDayNum = getRealDayOFWeekNum(jsDayNum);
  
      return realDayNum - 1;
    }
  
    function getPushElemsNum(year, month) {
      let jsDayNum = getLastWeekDayofMonthNum(year, month);
      let realDayNum = getRealDayOFWeekNum(jsDayNum);
  
      return 7 - realDayNum;
    }
  
    function chunkArr(num, arr) {
      let result = [];
      let chunk = [];
      let iterCount = arr.length / num;
  
      for (let i = 0; i < iterCount; i++) {
        chunk = arr.splice(0, num);
        result.push(chunk);
      }
  
      return result;
    }
  
    function getRealDayOFWeekNum(jsNumOfDay) {
      if (jsNumOfDay == 0) {
        return 7;
      } else {
        return jsNumOfDay;
      }
    }
  
    function getFirstWeekDayofMonthNum(year, month) {
      let date = new Date(year, month, 1);
      return date.getDay();
    }
  
    function getLastWeekDayofMonthNum(year, month) {
      let date = new Date(year, month + 1, 0);
      return date.getDay();
    }
  })(".calendar");
  
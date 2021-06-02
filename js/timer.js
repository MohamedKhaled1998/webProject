      const FULL_DASH_ARRAY = 283;
      const WARNING_THRESHOLD = 10;
      const ALERT_THRESHOLD = 5;
      const stroke_dasharray= 283;


      const COLOR_CODES = {
        info: {
          color: "green",
        },
        warning: {
          color: "orange",
          threshold: WARNING_THRESHOLD,
        },
        alert: {
          color: "red",
          threshold: ALERT_THRESHOLD,
        },
      };

      const TIME_LIMIT = 15;
      let timePassed = 0;
      let timeLeft = TIME_LIMIT;
      let timerInterval = null;
      let remainingPathColor = COLOR_CODES.info.color;

      document.getElementById("timer").innerHTML = `
        <h5>Time Remaining: </h5>
        <h5 id="base-timer-label" class="base-timer__label base-timer-path-remaining base-timer__path-remaining ${remainingPathColor}"> ${formatTime(
          timeLeft
        )}</h5>
      `;

      startTimer();

      function onTimesUp() {
        clearInterval(timerInterval);
      }

      function startTimer() {
        timerInterval = setInterval(() => {
          timePassed = timePassed += 1;
          timeLeft = TIME_LIMIT - timePassed;
          document.getElementById("base-timer-label").innerHTML = formatTime(
            timeLeft
          );
          setCircleDasharray();
          setRemainingPathColor(timeLeft);

          if (timeLeft === 0) {
            onTimesUp();
          }
        }, 1000);
      }

      function formatTime(time) {
        var hours = Math.floor(time / 3600);
        var minutes = Math.floor((time % 3600) / 60);
        var seconds = Math.floor(time % 60);

        var ret = "";
        if (hours > 0) {
          ret += "" + hours + ":" + (minutes < 10 ? "0" : "");
        }
        ret += "" + minutes + ":" + (seconds < 10 ? "0" : "");
        ret += "" + seconds;
        return ret;

      }

      function setRemainingPathColor(timeLeft) {
        const { alert, warning, info } = COLOR_CODES;
        if (timeLeft <= alert.threshold) {
          document
            .getElementsByClassName("base-timer-path-remaining")[0]
            .classList.remove(warning.color);
          document
            .getElementsByClassName("base-timer-path-remaining")[0]
            .classList.add(alert.color);
        } else if (timeLeft <= warning.threshold) {
          document
            .getElementsByClassName("base-timer-path-remaining")[0]
            .classList.remove(info.color);
          document
            .getElementsByClassName("base-timer-path-remaining")[0]
            .classList.add(warning.color);
        }
      }

      function calculateTimeFraction() {
        const rawTimeFraction = timeLeft / TIME_LIMIT;
        return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
      }

      function setCircleDasharray() {
        const circleDasharray = `${(
          calculateTimeFraction() * FULL_DASH_ARRAY
        ).toFixed(0)} 283`;
        document
          .getElementsByClassName("base-timer-path-remaining")[0]
          .setAttribute("stroke_dasharray", circleDasharray);
      }

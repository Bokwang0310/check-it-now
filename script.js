import {
  checkClass,
  classRooms,
  getSchedule,
  changeNumToDay,
} from "./utils.js";

// 해당 데이터가 없으면 에러가 날 수 있으므로 없으면 사전에 생성
if (!localStorage.getItem("board")) {
  localStorage.setItem("board", "");
}

const URLSearch = new URLSearchParams(location.search);
// 쿼리스트링으로 반을 받음
const classRoomName = URLSearch.get("class");

document.querySelector(".submit-btn").addEventListener("click", () => {
  const movingClasses = localStorage.getItem("movingClasses");

  if (!movingClasses) {
    const arr = ["A", "B", "C", "D", "E", "F", "G", "H"].map((alphabet) =>
      prompt(`${alphabet}를 입력`)
    );

    localStorage.setItem("movingClasses", arr);
  }

  const currentDate = new Date();

  const schedule =
    getSchedule(movingClasses.split(",")) ||
    localStorage.getItem("movingClasses").split(",");

  const classNum = checkClass(currentDate);
  const day = changeNumToDay(currentDate.getDay());

  const subject = schedule[day][classNum - 1];
  console.log(subject);
  console.log(classRooms[classRoomName].includes(subject));

  const newOne = `${
    currentDate.getMonth() + 1
  }${currentDate.getDate()}-${classNum}교시`;

  const board = localStorage.getItem("board").split(",");
  if (!board.includes(newOne)) {
    if (!board) board = newOne;
    else board.push(newOne);
  }

  localStorage.setItem("board", board);
});

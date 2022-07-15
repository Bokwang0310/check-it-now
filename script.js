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

const list = document.querySelector(".list");

{
  let board = localStorage.getItem("board").split(",");
  let texts = board.map((item) => document.createTextNode(item));
  let lis = board.map(() => document.createElement("li"));

  lis = lis.map((li, i) => li.appendChild(texts[i]));

  lis.forEach((li) => list.appendChild(li));
}

const URLSearch = new URLSearchParams(location.search);
// 쿼리스트링으로 반을 받음
const classRoomName = URLSearch.get("class");

document.querySelector(".submit-btn").addEventListener("click", () => {
  const movingClasses = localStorage.getItem("movingClasses");

  if (!movingClasses) {
    alert(
      "이동수업 정보가 저장되어 있지 않아 이동수업 정보를 수집하겠습니다. 띄어쓰기 없이 입력해주세요."
    );
    const arr = ["A", "B", "C", "D", "E", "F", "G", "H"].map((alphabet) =>
      prompt(`${alphabet} 수업 이름을 입력`)
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
  const bool = classRooms[classRoomName].includes(subject);

  if (!bool) return 0;

  const newOne = `${
    currentDate.getMonth() + 1
  }${currentDate.getDate()}-${classNum}교시`;

  const board = localStorage.getItem("board").split(",");
  if (!board.includes(newOne)) {
    if (!board) board = newOne;
    else board.push(newOne);
  } else {
    return 0;
  }

  localStorage.setItem("board", board);

  location.reload();
});

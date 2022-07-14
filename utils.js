// currentDate에 기반하여 시간과 분으로 이루어진 두 개의 날짜 객체 반환
const makeDates = (date, [hourA, minA], [hourB, minB]) => {
  const a = new Date(date);
  a.setHours(hourA);
  a.setMinutes(minA);

  const b = new Date(date);
  b.setHours(hourB);
  b.setMinutes(minB);

  return [new Date(a), new Date(b)];
};

// 각 교시의 시작 및 끝 시간을 포함하는 배열을 반환
const getAllClassTimes = () => {
  const currentDate = new Date();
  const one = makeDates(currentDate, [8, 31], [9, 30]);
  const two = makeDates(currentDate, [9, 31], [10, 30]);
  const three = makeDates(currentDate, [10, 31], [11, 30]);
  const four = makeDates(currentDate, [11, 31], [12, 30]);
  const five = makeDates(currentDate, [13, 31], [14, 30]);
  const six = makeDates(currentDate, [14, 31], [15, 30]);
  const seven = makeDates(currentDate, [15, 31], [16, 30]);

  return [one, two, three, four, five, six, seven];
};

// 숫자를 요일 문자로 변경
export const changeNumToDay = (num) => {
  if (num === 1) return "mon";
  else if (num === 2) return "tue";
  else if (num === 3) return "wen";
  else if (num === 4) return "thu";
  else if (num === 5) return "fri";
  else return new Error();
};

// 이동수업 배열을 받아 전체 시간표 반환
export const getSchedule = ([A, B, C, D, E, F, G, H]) => ({
  mon: [C, "class", B, E, "class", D, A],
  tue: [F, D, E, H, "class", A, B],
  wen: ["class", C, "class", "class", "class", "class"],
  thu: ["class", F, E, "class", "class", B, G],
  fri: [G, D, "class", A, H, C, F],
});

// currentDate를 바탕으로 현재가 몇 교시인지 확인
export const checkClass = (date) => {
  const [one, two, three, four, five, six, seven] = getAllClassTimes();

  if (one[0] <= date && date <= one[1]) return 1;
  else if (two[0] <= date && date <= two[1]) return 2;
  else if (three[0] <= date && date <= three[1]) return 3;
  else if (four[0] <= date && date <= four[1]) return 4;
  else if (five[0] <= date && date <= five[1]) return 5;
  else if (six[0] <= date && date <= six[1]) return 6;
  else if (seven[0] <= date && date <= seven[1]) return 7;
  else return new Error();
};

// 각 반에서 진행되는 수업
export const classRooms = {
  one: ["정치와법"],
  two: ["실용경제"],
  three: ["세계사"],
  four: ["경제"],
  five: [],
  six: ["영어독해와작문"],
  seven: ["기하", "언어와매체"],
  eight: ["화법과작문", "심리학"],
  nine: ["미적분"],
  ten: ["확률과통계"],
  creative: ["지구과학2", "물리학2"], // 창융실
  computer: ["프로그래밍"],
};

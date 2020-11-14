const myVar = "hello world";
console.log(myVar);

function sayMyName() {
  let myName = "Elliott";
  myName = "Elly";
  console.log(myName);
}

sayMyName();

function countTo5() {
  const myObj = {};
  for (let i = 0; i < 6; i++) {
    // console.log("i = " + i, myObj);
    console.log(`i = ${i}`);
    /*
    PHP:
     $i = 4;
     echo "i = {$i}";
     */
  }

  console.log(i);
}

function countTo6() {
  let i;
  for (i = 0; i < 7; i++) {
    // console.log("i = " + i, myObj);
    console.log(`i = ${i}`);
  }

  console.log(i);
}

function sum(x, y) {
  return x + y;
}

sum(5, 3); // 8

function avg(...args) {
  let sum = 0;
  for (let i = 0; i < args.length; i++) {
    sum += args[i];
  }

  return sum / args.length;
}

avg(2, 4, 6, 8); // 5

const myArray = [
  1, 2, 3, 8, 7, 4, 12
];
const myObj = {
  "elly": 555555555,
  "sebastian": "meowmeowmeow",
  "sum2": function(x, y) {
    return y + x;
  }
}

// function sumAll(...args) {
const sumAll = function(...args) {
  let sum = 0;
  for (let i = 0; i < args.length; i++) {
    sum += args[i];
    // sum = sum + args[i];
  }

  return sum;
}
sumAll(2, 4, 6, 8); // 20

let i = 7;
i++;
i = i + 1;
i += 1;
i--;
++i;
--i;

if (i < 7) {
  // do something
} else if (i == 7) {
  // do something else
} else {
  // do one other thing
}

const myArrowFunc = () => {};
const summation = (x, y) => x + y;
const summation2 = (x, y) => {
  return x + y;
};
const add5 = y => y+5;
summation(5, 3); // 8


const multiply7 = x => x * 7;
const myFinalNumber = (x, y) => summation(
  add5(x), // 8
  summation2(
    multiply7(x),
    y
  ) // 8
); // 16

const calculateMyFinalNumber = () => (x, y) => myFinalNumber(x, y);
const theResultingFunction = calculateMyFinalNumber()(3, 1);


const elly1 = {
  name: "Elly",
  age: 32,
  phone: 5555555555,
  gender: "other",
  pet: {
    name: "Sebastian",
    age: 6
  }
};

console.log(`${elly1.name} has a pet aged ${elly1.pet.age} that is named ${elly1.pet.age}`);
// Elly has a pet aged 6 that is named Sebastian
// $query->posts;

class Person {
  name;
  age;
  phone;
  gender;
  pet;

  constructor(n, a, p, g, pt) {
    this.name = n;
    this.age = a;
    this.phone = p;
    this.gender = g;
    this.pet = pt;
  }
}

const elly2 = new Person(
  "Elly",
  32,
  5555555555,
  "other",
  {
    name: "Sebastian",
    age: 6
  }
);

let myFormattedString = "(123)456.7890"; // we want this to be like 1234567890
myFormattedString = myFormattedString.replace(".", ""); // 123456 7890
myFormattedString = myFormattedString.replace("(", ""); // 123456 7890
myFormattedString = myFormattedString.replace(")", ""); // 123456 7890
myFormattedString = myFormattedString.replace(" ", ""); // 1234567890

const myFormattedString2 = "(123)456.7890"
  .replace(".", "")
  .replace("(", "")
  .replace(")", "")
  .replace(" ", "");
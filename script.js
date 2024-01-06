const destinationContainer = document.getElementById("destination__container");
const originContainer = document.getElementById("origin__container");
const originalText = document.getElementById("original__text");
const words = document.getElementsByClassName("word");

let destinationPosDefault = destinationContainer.getBoundingClientRect();
let destinationArray = [];
const originArray = [];
let exercise = exercises[Math.floor(Math.random() * exercises.length)];
let englishSentence = exercise.english.split(" ");
let listOfWords = exercise.list;
for (let i = 0; i < englishSentence.length; i++) {
  const spanNode = document.createElement("span");
  spanNode.textContent = englishSentence[i];
  originalText.appendChild(spanNode);
}
for (let i = 0; i < listOfWords.length; i++) {
  const wordNode = document.createElement("div");
  wordNode.textContent = listOfWords[i];
  wordNode.classList.add("word");
  originContainer.appendChild(wordNode);
}
function calibrateDestinationCursorPos(destinationArray) {
  if (destinationArray.length === 0) {
    return destinationPosDefault.x;
  } else {
    let sum = destinationPosDefault.x;
    destinationArray.forEach((element) => {
      sum += element.width + 20;
    });
    return sum;
  }
}
function createOriginArray(word) {
  let wordPosition = word.getBoundingClientRect();
  let newWordObject = Object.assign(wordPosition);
  newWordObject.word = word.textContent;
  newWordObject.location = "origin";
  originArray.push(newWordObject);
}
for (let i = 0; i < words.length; i++) {
  createOriginArray(words[i]);
  words[i].addEventListener("click", () => {
    destinationStartPos = calibrateDestinationCursorPos(destinationArray);
    let yTravel =
      originArray[i].y -
      (destinationPosDefault.y +
        (destinationPosDefault.height - originArray[i].height) / 2);

    let xTravel = 0;
    if (originArray[i].x > destinationStartPos) {
      xTravel = -(originArray[i].x - destinationStartPos);
    } else {
      xTravel = destinationStartPos - originArray[i].x;
    }
    if (originArray[i].location === "origin") {
      originArray[i].location = "destination";
      destinationArray.push(originArray[i]);
    } else if (originArray[i].location === "destination") {
      yTravel = 0;
      xTravel = 0;
      originArray[i].location = "origin";
      let test = destinationArray.filter(
        (wordObject) => wordObject.word !== originArray[i].word
      );
      destinationArray = test;
    }
    words[i].style.transform = `translate(${xTravel}px,-${yTravel}px)`;
  });
}


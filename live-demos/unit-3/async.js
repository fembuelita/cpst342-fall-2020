// how can we make "i'm echoing second" print after the first?

const ex1 = () => {
  setTimeout(() => {
    console.log("I'm echoing first");
  }, 1000);

  console.log("I'm echoing second");
}

const ex2 = () => {

  const handleError = (err) => {
    console.error("An error occurred. Details:", err);
  }

  const prom = new Promise((resolve, reject) => {
    setTimeout(() => {
      console.log("I'm echoing first");
      // resolve("foo");
      reject("something went wrong");
    }, 1000);
  });

  prom.then((data) => {
    console.log("I'm echoing second");
  });

  prom.catch(handleError);
}

const ex3 = () => {
  const handleError = (err) => {
    console.error("An error occurred. Details:", err);
  }

  const i = 1;

  new Promise((resolve, reject) => {
    setTimeout(() => {
      console.log("The value of i is " + i);
      resolve(i + 1);
      // reject("something went wrong");
    }, 1000);
  })
    .then((data) => {
      console.log("The value of i is " + data);
      // return data + 1;
      return new Promise((resolve, reject) => {
        resolve(data + 1);
      })
    })
    .then(data => {
      console.log("The value of i is " + data);
      return data + 1;
    })
    .then(data => {
      console.log("The value of i is " + data);
      return data + 1;
    })
    .catch(handleError)
    .finally(() => {
      console.log("i'm done echoing");
    })
}


const getContent = () => {
  // const url = "https://dev-cpst342-elly.pantheonsite.io/wp-json/wp/v2/posts/1";
  const url = "data.json";

  const contentContainer = document.getElementById("content");

  fetch(url)
    .then(response => response.json())
    // .then((response) => {
    //   return response.json()
    // })
    // .then(function(response) {
    //   return response.json()
    // })
    .then(data => {
      debugger;
      contentContainer.innerHTML =
        `<h1>${data.title.rendered}</h1>`
        + data.content.rendered;

    })
    .catch(err => {
      content.innerHTML = `<strong>An error occurred. Details: </strong> ${err}`;
    })
}

getContent();
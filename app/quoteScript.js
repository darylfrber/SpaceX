// async function populate() {
//     const requestJSON = '../app/quotes.json';
//     const request = new Request(requestJSON);

//     const response = await fetch(request);
//     const quote = await response.json();

//     chooseRandomObject(quote);
// }

quotes = [
    "Great companies are built on great products.",
    "Life is too short for long-term grudges.",
    "Some people don't like change, but you need to embrace change if the alternative is disaster.",
    "I don't create companies for the sake of creating companies, but to get things done.",
    "The factory is the machine that builds the machine.",
    "I had so many people try to talk me out of starting a rocket company, it was crazy.",
    "If you had to buy a new plane every time you flew somewhere, it would be incredibly expensive.",
    "If you want to get highground you first need to farm materials.",
    "When something is important enough, you do it even if the odds are not in your favour.",
    "You should take the approach that you are wrong. Your goal is to be less wrong.",
    "You get paid in direct proportion to the difficulty of problems you solve",
    "It is possible for ordinary people to choose to be extraordinary.",
    "The first step is to establish that something is possible then probability will occur.",
    "When something is important enough, you do it even if the odds are not in your favor.",
    "Constantly think about how you could be doing things better.",
    "Every person in your company is a vector. Your progress is determined by the sum of all vectors."
];


function chooseRandomObject(arr) {
    SpaceXQuote = document.getElementById('quotes');

    let randomIndex = Math.floor(Math.random() * arr.length);
    let randomObject = arr[randomIndex];
    SpaceXQuote.textContent = '“' + randomObject + '”';
}
// populate();

chooseRandomObject(quotes);
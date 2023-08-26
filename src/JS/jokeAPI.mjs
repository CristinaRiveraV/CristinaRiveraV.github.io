const api_url = "https://official-joke-api.appspot.com/random_joke";

let joke_setup = "";
let joke_punchline = "";

/*Gets a joke from the API which can be used to display
returns {type, setup, punchline, id} 
*/
export async function getJoke() {
    // Making an API call (request)
    const response = await fetch(api_url)
    .catch(error => console.error('Unable to get items.', error));

    // Parsing it to JSON format
    const data = await response.json();
    console.log(data);

    // Retrieving data from JSON
    const joke = data;
    joke_setup = joke.setup;
    joke_punchline = joke.punchline;

    // Display the setup of the joke   
    displayJoke();
}

export function displayJoke() {
    // Display the setup of the joke   
    document.getElementById("joke_setup").innerText = joke_setup;
    displayPunchline();

}

export function getFirstWordsFromJokeSetup(setup){
    const setup_split_words = setup.split(" ");
    let first_word = setup_split_words[0];

    //If the first word has apostrophies or any non-letter character it should be trimmed
    if( !(/^[a-z]+$/i.test(first_word)) && first_word.length > 1){
        const index = first_word.indexOf(!(/^[a-z]+$/i));
        let temp_word = first_word.slice(0,index-1);
        first_word = temp_word;
    }
    //Check for How much and how many
    if(first_word.toLowerCase() == "how"){
        let second_word = setup_split_words[1];
        if(second_word == "much" || second_word == "many"){
            first_word = first_word + " " + second_word;
        }
    }
    return first_word;
}


export function getMessageForButton(keyword){
    let word = "...";
    if(keyword == null) return word;
    switch (keyword.toString().toLowerCase()){
        case "what":
        case "which":
        case "who":
        case "where":
        case "why":
        case "when":
        case "how":
        case "whose":
        case "how many":
        case "how much":
            word = keyword.toLowerCase() + "?";
            break;
        default:
           break;
    }
    return word.toString();
}

export function displayPunchline(){
    document.getElementById("joke_punchline").innerText = joke_punchline;
}

getJoke();
const api_url = "https://official-joke-api.appspot.com/random_joke";

/*Gets a joke from the API, returns it as a dictionary
setup: "";
punchline: "";
*/
 async function getJoke() {

    // Making an API call (request)
    const response = await fetch(api_url)
    .catch(error => console.error('Unable to get items.', error));

    // Parsing it to JSON format
    const data = await response.json();
    console.log(data);

    // Retrieving data from JSON
    const joke = data;
    let {type, setup, punchline, id}  = joke;
    
    document.getElementById("joke_setup").innerText = setup;
    document.getElementById("joke_punchline").innerHTML = punchline;

}

getJoke();

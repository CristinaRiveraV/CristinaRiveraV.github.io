import pkg_expect from '../../node_modules/chai/chai.js';
import * as jokeAPI from '../../src/JS/jokeAPI.js';

const {expect} = pkg_expect;

//Testing that the mesage for outputing in the button is correct, This should be a question for question words or 3 dots for anything else
describe("getMessageForButton - basic funtionality", () => {
    let list_of_question_words = ["what", "which", "Who", "Where", "why", "when", "How", "Whose", "How many", "How much"];
    list_of_question_words.forEach(word => {
        it('returns the word plus an question mark is it is a question word - '+ word, () => {
            const expected = word.toLowerCase()+"?";
            const result = jokeAPI.getMessageForButton(word);
            expect(result).to.deep.equal(expected);
        })
    });
    let list_of_random_words_and_items = ["hello", "tesing", "A whole Sentence", 123, null];
    list_of_random_words_and_items.forEach(word => {
        it('returns three dots \"...\" for any other string - '+word, () => {
            const expected = "...";
            const result = jokeAPI.getMessageForButton(word);
            expect(result).to.deep.equal(expected);
        })
    })
})

//Checks if the first word is recovered properly, including exceptions
describe("getFirstWordsFromJokeSetup - basic funtionality", () => {
    let list_of_test_sentences = ["What did one plate say to the other plate?",
                                  "Where do you learn to make banana splits?",
                                  "Finally realized why my plant sits around doing nothing all day...",
                                  "Why did the melons plan a big wedding?",
                                  "A termite walks into a bar and says...",
                                  "What’s the difference between an African elephant and an Indian elephant?",
                                  "Which song would an exception sing?"];
    let list_of_expected_words = ["What",
                                   "Where",
                                   "Finally",
                                   "Why",
                                   "A",
                                   "What",
                                   "Which"];
    for(let i = 0; i<list_of_test_sentences.length; i++){
        let sentence = list_of_test_sentences[i];
        let word = list_of_expected_words[i];
        it('gets the very first word from a full sentence - \"'+ sentence+'\"', () => {
            const expected = word;
            const result = jokeAPI.getFirstWordsFromJokeSetup(sentence);
            expect(result).to.deep.equal(expected);
        });
    }
})
describe("getFirstWordsFromJokeSetup - special Cases", () => {
    let list_of_test_sentences = ["How many fish are there in the sea?",
                                  "How much does a bar of chocolate cost?"];
    let list_of_expected_words = ["How many",
                                   "How much"];
    for(let i = 0; i<list_of_test_sentences.length; i++){
        let sentence = list_of_test_sentences[i];
        let word = list_of_expected_words[i];
        it('gets the very first word from a full sentence - \"'+ sentence+'\"', () => {
            const expected = word;
            const result = jokeAPI.getFirstWordsFromJokeSetup(sentence);
            expect(result).to.deep.equal(expected);
        });
    }
})

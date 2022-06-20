import Deck from "../JavaScript/deck.js"
const deck = new Deck()

const computerCardSlot = document.querySelector('.computer-card-slot')

const playerCardSlot = document.querySelector('.player-card-slot')

const computerDeck = document.querySelector('.computer-deck')

const  playerDeck = document.querySelector('player-deck')

const text = document.querySelector('.text')

var playDeck, computerDeck;

startGame()
function startGame() {
    const deck = new Deck()
    deck.shuffle()

    /*
    Takes number of cards within our deck and divides by 2.
    Reason why I divide by two is because if there is a deck of 51 / 2 = 25.5 it will convert it self to 26
     */
    const deckMidpoint = Math.ceil(deck.numberOfCards / 2)

    playDeck = new Deck(deck.cards.slice(0, deckMidpoint))

    /*
    The reason I did this was because I want to start at the end this way it will give me back the rest of the 26 cards left in the deck
     */
    computerDeck = new Deck(deck.cards.slice(deckMidpoint, deck.numberOfCards))

    cleanBeforeround()
}
function  cleanBeforeround()
{
    computerCardSlot.innerHTML = ''
    playerCardSlot.innerHTML = ''
    text.innerText = ''

    updateDeckCount()
}

function updateDeckCount()
{
    computerDeckElement.innerText = computerDeck.numberOfCards
    playerDeckElement.innerText = playerDeck.numberOfCards
}


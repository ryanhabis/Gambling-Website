const SUITS = ["♠","♣","♥","♦"]
const  VALUES = ["A","2","3","4","5","6","7","9","10","J","Q","K"]

export default class Deck{
    constructor(cards = freshDeck())
    {
        this.cards = cards
    }
    get numberOfCards()
    {
        return this.cards.length
    }

    shuffle()
    {
        /*
        The code below creates a new random index before the current card that I am on, then it swaps the old card with the new one.

        I am over writing this value of oldValue to a new card value, and I am looping is for every card.

        This mixes up the card with better affects so that other cards dont reacquires more often, this way the game is more fair and the user can't guess
        whats the next card.
         */
        for(let i = this.numberOfCards - 1; i> 0; i--)
        {
            const newIndex = Math.floor(Math.random() * (i + 1))
            const oldValue = this.cards[newIndex]
            this.cards[newIndex] = this.cards[i]
            this.cards[i] = oldValue
        }
    }
}

class Card {
    constructor(suit, value) {
        this.suit = suit
        this.value = value
    }


/*
This will check if the card is either spades or clubs other wise it will return a black color
 */
    get color() {
        return this.suit === '♠' || this.suit === '♣' ? 'black' : 'red'
    }


        getHTML() {
        const cardDiv = document.createElement("div")
        cardDiv.innerText = this.suit
        cardDiv.classList.add("card")

        cardDiv.classList.add("card", this.color)

        /*
        not so self ' is different then `
        one is a string value other is a dataset
         */
        cardDiv.dataset.value = `${this.value} ${this.suit}`
        return cardDiv
    }
}

function freshDeck()
{
    /*
    flatMap condenses all the arrays in to one for example
    These are two different arrays
    [[1,2], [3,4]]

    once flatmap is used it will turn it to one array
    [[1,2,3,4]]
     */
    return SUITS.flatMap(suit => {
        return VALUES.map(value => {
        return new Card(suit, value)
    })
    })
}







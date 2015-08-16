//This is from a book on C and not my own work. It is incomplete as of 
//Saturday August 15th

#include <stdio.h>
#include <time.h>
#include <ctype.h>
#include <stdlib.h>

#define FALSE 0
#define TRUE 1


void printGreeting();
int getBet();
char getSuit(int suit);
char getRank(int rank);
void getFirstHand(int cardRank[], int cardSuit[]);
void getFinalHand(int cardRank[], int cardSuit[], int finalRank[],
                    int finalSuit[], int ranksinHand[],
                    int suitsinHand[]);
int analyzeHand(int ranksinHand[], int suitsinHand[]);

main() {
    int bet;
    int bank = 100;
    int i;
    int cardRank[5];
    int cardSuit[5];

    int finalRank[5];
    int finalSuit[5];
    int ranksinHand[13];
    int suitsinHand[4];
    int winnings;
    time_t t;
    char suit, rank, stillPlay;

    printGreeting();

    do {
        bet = goBet();
        srand(time(&t));
        getFirstHand(cardRank, cardSuit);
        printf("Your five cards: \n");
        
        for (i=0; i<5; i++) {
            suit = getSuit(cardSuit[i]);
            rank = getRank(cardRank[i]);
            printf("Card #%d: %c%c\n", i+1, rank, suit);
        }

        for (i=0; i<4; i++) {
            suitsinHand[i] = 0;
        }

        for (i=0; i<13; i++) {
            ranksinHand[i] = 0;
        }

        getFinalHand(cardRank, cardSuit, finalRank, finalSuit,
                        ranksinHand, suitsinHand);

        printf("Your final five cards: \n");
        for (i = 0; i < 5; i++) {
            suit = getSuit(finalSuit[i]);
            rank = getRank(finalRank[i]);
            printf("Card #%d: %c%c\n", i+1, rank, suit);
        }

        winnings = analyzeHand(ranksinHand, suitsinHand);
        printf("You won %d!\n", bet*winnings);
        bank = bank - bet + (bet*winnings);
        printf("\nYour bank is now %d.\n", bank);
        printf("\nDo you want to play again? ");
        scanf(" %c", &stillPlay);
    } while (toupper(stillPlay) == 'Y');


    return;
}

void printGreeting() {
    printf("***************************************************\n");
    printf("\n\n\tWelcome to the Absolute Beginner's Casino\n\n");
    printf("\tHome of Video Draw Poker\n\n");
    printf("***************************************************\n");

    printf("Here are the rules: \n");
    printf("You start with 100 credits, and you make a bet from ");
    printf("1 to 5 credits. \n");
    printf("You are dealt 5 cards, and then you choose which ");
    printf("cards to keep ");
    printf("or discard.\n");
    printf("You want to make the best possible hand. \n");
    printf("\nHere is the table for winnings (assuming a ");
    printf("bet of 1 credit):");
    printf("\nPair\t\t\t\t1 credit");
    printf("\nTwo Pairs\t\t\t2 credits");
    printf("\nThree Pairs\t\t\t3 credits");
    printf("\nStraight\t\t\t4 credits");
    printf("\nFlush\t\t\t\t5 credits");
    printf("\nFull House\t\t\t8 credits");
    printf("\nFour of a Kind\t\t\t10 credits");
    printf("\nStraight Flush\t\t\t20 credits");
    printf("\n\nHave Fun!!\n\n");
}

void getFirstHand(int cardRank[], int cardSuit[]) {
    int i, j;
    int cardDup;

    for (i=0; i < 5; i++) {
        cardDup = 0;
        do {
            cardRank[i] = (rand() %13);
            cardSuit[i] = (rand() %4);

            for (j=0; j < i; j++) {
                if ((cardRank[i] == cardRank[j]) && 
                        (cardSuit[i] == cardSuit[j])) {
                    cardDup = 1;
                }
            } 
        } while (cardDup == 1);
    }
}

char getSuit(int suit) {
    switch (suit) {
        case 0: 
            return('c');
        case 1:
            return('d');
        case 2:
            return('h');
        case 3: 
            return('s');
    }
}

char getRank(int rank) {}
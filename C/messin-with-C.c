#include <stdio.h>
// void printWords();
// // char words[15];
// // This function prints words, randomly pulled from an array *eventually*
// void printWords(/*char array[]*/) {
//     printf("These are words");
// }

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
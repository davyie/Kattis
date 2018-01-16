#include <stdio.h>
#include <iostream>
#include <map>
#include <vector>
#include <string>
#include <algorithm>

using namespace std;

int main(void) 
{ 
  string word;
  string suits = "PKHT";
  std::vector<string> rCards;
  std::vector<string>::iterator it = rCards.begin();
  cin >> word; 
  map<const char, int> deck;
  deck['P'] = 13;
  deck['K'] = 13;
  deck['H'] = 13;
  deck['T'] = 13;

  for(int i = 0; i <= word.size(); i+=3) 
  {
    char n = word[i];
    deck[n] = deck[n] - 1;
    if(std::find(rCards.begin(), rCards.end(), word.substr(i, i+3)) != rCards.end())
    {
      cout << "GRESKA" << std::endl; // Print out GRESKA   
      exit (0); // exit the program
    } else {
        rCards.push_back(word.substr(0, 3));
        word.erase(0, 3); 
    }
  }
  for(int a = 0; a < rCards.size(); a++)
      cout << rCards.at(a) << std::endl;
  //Print out the numbers 
  for(int j = 0; j < suits.size(); j++) {
      char m = suits[j];
      cout << deck[m] << std::endl;
  }
}

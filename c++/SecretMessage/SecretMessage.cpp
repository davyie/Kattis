#include <iostream>
#include <string>
#include <vector>
#include <cmath>
using namespace std;

int main() {
    int numberOfMessages;
    std::vector<string> messages;    
    std::vector<string> secrets;
    string delimiter = "";
    string secretMessage; 

    cin >> numberOfMessages; 
    string m;
    cin >> m;
    messages.push_back(m);
    for(int n = 0; n < numberOfMessages; n++) { 
        // Gets the square of the word. 
        int square = sqrt(messages[n].size());
        for(int i = 0; i < square; i++) {
            // Start append from something. 
            secretMessage.append(messages[n].substr(square, messages[n].find(delimiter)));
            for(int j = 0; j < square; j++) {
                secretMessage.append(messages[n].substr(j, messages[n].find(delimiter)));
            }
        }
        std::cout << secretMessage << std::endl;
    }
}

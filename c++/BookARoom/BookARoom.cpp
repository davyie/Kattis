#include <iostream>
#include <string>
#include <stdlib.h>
#include <set>


using namespace std;


int main() {
    std::set<int> rooms;
    int amountOfBookedRooms, roomNumber, availableRooms;
    cin >> availableRooms >> amountOfBookedRooms; // Input from user. 
    //std::cout << amountOfBookedRooms << std::endl;
    for(int j = 0; j < availableRooms; j++) {
        // Change here
        rooms.insert(j);
    }
    
    // Change in the if-statements
    if(amountOfBookedRooms == rooms.size()) {
        std::cout << "too late" << std::endl;
    } else {    
        int i = 0;
        while(i != amountOfBookedRooms) {
            cin >> roomNumber; 
            // Change here
           rooms.erase(rooms.find(roomNumber)); 
           i++;
        }
        //int randomRoom = std::distance(rooms.begin(), rooms.find(rand()));
        std::cout << << std::endl;
    }
} 

#include <stdio.h> 
#include <iostream>
#include <math.h>

using namespace std;

int main() {
    double height=0; 
    double angle=0; 
    double ladderheightB=0;
    double ladderheightA=0;
    cin >> height >> angle; 
    // Convert degree to radian
    angle = angle*(M_PI/180);
    // Calculate the hypotenus 
    ladderheightA = height/(sin(angle));
    //Print out the length of the ladder
    cout << ceil(ladderheightA) << endl;
}

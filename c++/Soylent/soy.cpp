#include <iostream>
#include <math.h>

using namespace std;

int main() {
	double numberOfTestcases = 0;
	double currentNumberOfCalories = 0;
	cin >> numberOfTestcases;
	for (double i = 0; i < numberOfTestcases; i++) {
		cin >> currentNumberOfCalories; 
		std::cout << ceil(currentNumberOfCalories / 400) << std::endl;
	}	
}

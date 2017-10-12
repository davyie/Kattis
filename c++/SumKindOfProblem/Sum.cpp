#include <stdio.h>
#include <iostream>

using namespace std;

int main(void) {
  int dataSets = 0; 
  int num, datasetnum;
  cin >> dataSets;

  for(int i = 0; i < dataSets; i++) {
    cin >> datasetnum;
    cin >> num;
    std::cout << datasetnum << " " << (num * (num + 1) / 2) << " " << (num * num) << " " << (num * (num + 1)) << std::endl;
  }
}

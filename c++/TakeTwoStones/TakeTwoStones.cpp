#include <iostream>
#include <string>

using namespace std;

int main() {
    int stones;
    cin >> stones;
    if(stones % 2) {
        std::cout << "Alice" << std::endl;
    } else {
        std::cout << "Bob" << std::endl;
    }
}

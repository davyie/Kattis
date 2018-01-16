#include <iostream>
#include <stdio.h>
#include <vector> 

using namespace std;

int binarySearch(std::vector<int> arr, int l, int r, int x)
{
   if (r >= l)
   {
        int mid = l + (r - l)/2;
 
        // If the element is present at the middle itself
        if (arr[mid] == x)  return mid;
 
        // If element is smaller than mid, then it can only be present
        // in left subarray
        if (arr[mid] > x) return binarySearch(arr, l, mid-1, x);
 
        // Else the element can only be present in right subarray
        return binarySearch(arr, mid+1, r, x);
   }
 
   // We reach here when element is not present in array
   return -1;
}

int main() 
{
    std::vector<int> numArr;
    int numOfElements, numEl, numOfTimes, complement;
    cin >> numOfElements;
    for(int i = 0; i < numOfElements; i++) {
        cin >> numEl;
        numArr.push_back(numEl);
    }
    for(int j = 0; j < numArr.size(); j++)
    {
        for(int k = 0; k < numArr.size(); k++)
        {
            if(k == j)
                continue;
            complement = numArr.at(j) - numArr.at(k); 
            if(complement < 0)
                complement = complement * -1;
            if(binarySearch(numArr, 0, numArr.size(), complement) != -1 && binarySearch(numArr, 0, numArr.size(), complement) != j)
                numOfTimes++;
            complement = 0;
        }
    }
    cout << numOfTimes << endl;
}

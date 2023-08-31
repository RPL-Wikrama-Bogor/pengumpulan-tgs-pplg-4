#include <iostream>
#include <string>

using namespace std;

int main()
{
    for(int i = 0; i <= 50; i++) {
        if (i % 2 != 0) {
            cout << i << " Ganjil" << endl;
        } else {
            cout << i << " Genap" << endl;
        }
    }
}
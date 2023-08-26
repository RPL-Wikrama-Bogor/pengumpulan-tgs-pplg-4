#include <iostream>
#include <string>

using namespace std;

int main() {
    int a, b ,c;

    cout << "No A";
    cin >> a;
    cout << "No B";
    cin >> b;
    cout << "No C";
    cin >> c;

    if (a > b && a > c) {
        cout << "Nilai terbesar adalah " << a;
    } else if (b > a && b > c ) {
        cout << "Nilai terbesar adalah " << b;
    }  else if (c > a && c > b) {
        cout << "Nilai terbesar adalah " << c;
    } else {
        cout << "Nilai terbesar sama semua";
    }
}

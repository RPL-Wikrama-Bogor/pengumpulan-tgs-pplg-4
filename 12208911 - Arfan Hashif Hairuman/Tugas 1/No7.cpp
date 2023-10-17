#include <iostream>
#include <string>

using namespace std;

int main()
{
    int mtk, ing, ind, dpk, agm, tot, nt, k;
    int no = 1;
    string  n, j;

    for (int i = 0; i < 15; i++) {
        cout << "Siswa ke " << no << endl;
        no++;
        cout << "Nama siswa : ";
        cin >> n;
        cout << "Kehadiran siswa : ";
        cin >> k;
        cout << "Input nilai (MTK, ING, IND, DPK, AGM)" << endl;
        cin >> mtk;
        cin >> ing;
        cin >> ind;
        cin >> dpk;
        cin >> agm;

        tot = mtk + ing + ind + dpk + agm;

        if (k == 100) {
            if (tot > 475) {
                if (tot > nt) {
                    nt = tot;
                    j = n;
                }
            }
        }
    }

    cout << "Juaranya adalah " << j;
}

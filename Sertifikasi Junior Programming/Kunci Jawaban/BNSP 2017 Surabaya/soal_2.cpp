#include <iostream>

using namespace std;

int main(){
		int A[2][2];
		int B[2][2];
		cout << "Matriks A:\n";
		for(int i=0;i<2;i++){
			for(int j=0;j<2;j++){
					cin >> A[i][j];
				}
			}
		cout << "Matriks B:\n";
		for(int i=0;i<2;i++){
			for(int j=0;j<2;j++){
					cin >> B[i][j];
				}
			}
		cout << "Matriks perkalian:\n";
		int C[2][2] = {{0,0},{0,0}};
		for(int i=0;i<2;i++){
			for(int j=0;j<2;j++){
				C[i][j] = 0;
				for(int k=0;k<2;k++){
					C[i][j] += A[i][k]*B[k][j];
				}
			}
		}
		for(int i=0;i<2;i++){
			for(int j=0;j<2;j++){
				cout << C[i][j] << " ";
			}
			cout <<endl;
		}
	}

import numpy as np
from numpy import linalg as LA

a = np.array([
    [1.1, 2.3, 5.5, 2.3],
    [3.3, 1.3, 1.8, 3.1],
    [2.6, 4.3, 1.1, 1.7],
    [1.1, 3.8, 2.9, 2.7]
])

print('Matritsa elementlari')
print(a)

s = np.linalg.inv(a)
print('Teskari matritsa')
print(s)

b = np.array([-8.4, 4.5, 3.3, 14.3])
print('Ozod had elementlari')
print(b)

x = LA.solve(a, b)
print('x ning qiymatlari', x)

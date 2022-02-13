def addition():
    a = int(input("Please enter value A : "))
    b = int(input("Please enter value B : "))
    return a+b

def sum2():
    sum = 1
    for i in range(1, x+1):
        sum = sum * i
    return sum

def num():
    a = 1
    while a <= b :
        print(b, end="")
        a = a + 1

def  find_minimum ( amount ) :
  min = int(input("enter number ----> "))
  i = 2
  while ( i <= amount ) :
    y = int(input("enter number ----> "))
    if( y < min ) :
      	min  =  y
    i=i+1
  return  min

while ( 1 ) :
  print("Press 1 : Program find Minimum value\n")
  print("Press 2 : Program find the multiplication from 1 to the value received through input\n")
  print("Press 3 : Program find A+B\n")
  print("Press 4 : Program print (input number) (input number) round\n")
  sel = int(input("Select Program --> "))
  if( sel == 1 ) :
    m = find_minimum(int(input("Enter the amount --> ")))
    print("Minimum value = ", m)
  if( sel == 2 ) :
    x = int(input("Enter number --> "))
    summary = sum2()
    print("Summary --> " ,summary)
  if( sel == 3 ) :
    sum = addition()
    print("Summary of A and B  is ", sum)
  if( sel == 4 ):
    b = int(input("Enter number --> "))
    print("Summary ↓ ")
    done = num()
    print("\n")

num=int(input('enter number :'))

def is_prime(x):
    flag=0
    for i in range(1,num+1):
        if(num%i)==0:
            flag=flag+1
    if(flag==2):
        print('prime',flag)
    else:
        print('non prime',flag)
is_prime(num)

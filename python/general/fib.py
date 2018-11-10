fib_cache = {}

def fib(n):
    # if we find the n number in our cache return it. 
    if n in fib_cache:
        return fib_cache[n]

    # if the parameter is 1 return 1 
    if n == 1:
        return 1
    # if the parameter is is 2 then return 1 
    if n == 2:
        return 1 
    else:
        # Calculate the next fibonacci value
        value = fib(n-1) + fib(n-2)
    # store the value in our dictionary 
    fib_cache[n] = value
    # return the value
    return value

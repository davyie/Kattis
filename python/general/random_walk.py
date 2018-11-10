import random 

def random_walk(step):
    """return the coordinates after a walk """
    x = 0
    y = 0
    
    # walk the steps 
    for n in range(step):
        # The direction 
        direction = random.choice(['N', 'E', 'S', 'W'])
        if direction == "N":
            y += 1
        elif direction == "E":
            x += 1
        elif direction == "S":
            y -= 1
        else:
            x -= 1
    return (x, y)

# Monte Carlo simulation 
number_of_walks = 20000
# Number of steps we take 
for steps in range(1, 31):
    no_transport = 0 # Number of walks that ends within less than 4 blocks away. 
    for i in range(number_of_walks):
        (x, y) = random_walk(steps)
        distance = abs(x) + abs(y)
        if distance <= 4:
            no_transport += 1
        no_transport_percentage = float(no_transport) / number_of_walks
    print ( "Walk size = ", steps, " / % of no transport = ", 100 * no_transport_percentage) 




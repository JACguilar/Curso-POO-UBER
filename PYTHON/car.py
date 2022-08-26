from account import Account


class Car:
    driver = Account("", "")
    id = int
    license = str
    Passenger = int

    def __init__(self, license, driver):
        self.license = license
        self.driver = driver

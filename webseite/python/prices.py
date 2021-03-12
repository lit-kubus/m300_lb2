import sys
from yahoo_fin import stock_info as si

stock = str(sys.argv[1])

price = si.get_live_price(stock)
price_str = str(price)
file_price = "C:/Users/belchior/Modul300/m300_lb2/webseite/python/tmp/prices.txt"
file_stock = "C:/Users/belchior/Modul300/m300_lb2/webseite/python/tmp/stock.txt"

with open(file_price, 'w') as fileowrite:
        fileowrite.write(price_str+"<br>")

with open(file_stock, 'w') as fileowrite:
        fileowrite.write(stock+"<br>")
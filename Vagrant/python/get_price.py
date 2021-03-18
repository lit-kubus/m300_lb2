import sys
from yahoo_fin import stock_info as si

stock = str(sys.argv[1])

price = si.get_live_price(stock)
price_str = str(price)
file_price = "./tmp/price"
file_stock = "./tmp/stock"

with open(file_price, 'w') as fileowrite:
        fileowrite.write(price_str+"<br>")

with open(file_stock, 'w') as fileowrite:
        fileowrite.write(stock+"<br>")

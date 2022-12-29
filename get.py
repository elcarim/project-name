#pip install beautifulsoup4 
#pip install requests
#pip install fake-useragent

# 1. parse
# 2. add to DB

# Плучить список мужских имен

from bs4 import BeautifulSoup
from fake_useragent import UserAgent
import requests
from collections import defaultdict

ua = UserAgent()

URL = ['https://kakzovut.ru/man.html', 'https://kakzovut.ru/woman.html'] #man , woman

all_names_url = [] # defaultdict(None)
# names_url[0] = ('a',)
for gender, url in enumerate(URL):
    page = requests.get(url=url, headers={'User-Agent': ua.random})
    print (page.status_code)
    soup = BeautifulSoup(page.text, "html.parser")
    
    divs = soup.findAll('div', class_='nameslist')
    gender_names_url = set()
    for div in divs:
        a_href = div.find('a').get('href')
        gender_names_url.add(a_href)
    
    all_names_url.append(gender_names_url)
        
print (all_names_url)

    




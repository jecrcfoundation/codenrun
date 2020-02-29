`##import requests
##from bs4 import BeautifulSoup
####url='https://en.wikipedia.org/wiki/Forbes_Celebrity_100'
####page = requests.get(url)
####soup = BeautifulSoup(page.text,'html5lib')
####eve=soup.find_all('a')
####lst={}
####for i in eve:
####    
####    lst[i.get_text()]=i.href
####    #lst[(i.get_text())]=i.a['href'
####
####print(lst)
####
##import wikipediaapi
##
##link='Lists_of_celebrities'
##def get_matter(link):
##    print('==============')
##    print('i got so far')
##    print('==============')
##    wiki_wiki = wikipediaapi.Wikipedia('en')
##    page_py = wiki_wiki.page(link)
##    print("Page - Title: %s" % page_py.title)
##    # Page - Title: Python (programming language)
##
##    print("Page - Summary: %s" % page_py.summary[0:])
##    # Page - Summary: Python is a widely used high-level programming language for
##    wiki_wiki = wikipediaapi.Wikipedia(
##    language='en',
##    extract_format=wikipediaapi.ExtractFormat.WIKI
##    )
##
##    p_wiki = wiki_wiki.page("Test 1")
##    print('=========================================')
##    print(p_wiki.text)
##
##    wiki_html = wikipediaapi.Wikipedia(
##            language='en',
##            extract_format=wikipediaapi.ExtractFormat.HTML
##    )
##    p_html = wiki_html.page("Test 1")
##    print('===================================')
##    print(p_html.text)
##    
##    return "done bro"
##print(get_matter(link))
##
##
##def print_links(page):
##
##        links = page.links
##        for title in sorted(links.keys()):
##            print("%s: %s" % (title, links[title]))
##
##
##wiki_wiki = wikipediaapi.Wikipedia('en')
##page_py = wiki_wiki.page(link)
##print_links(page_py)

'''============================================================'''
import spacy
import nltk.data

from youtube_transcript_api import YouTubeTranscriptApi

x=(YouTubeTranscriptApi.get_transcript("OTmQOjsl0eg"))
tot=""
for i in x :
    tot+=i['text']
    tot+=" "


import en_core_web_sm
nlp = en_core_web_sm.load()
tokens = nlp(tot)
article_text=""
print('============= ')
for sent in tokens.sents:
##    print(sent.string.strip())
    article_text+=sent.string.strip()
    article_text+=" "

print('============= ')    
#print(article_text)

#5cb67e09f8bf2d07d77ed3028fe53063
from eazymind.nlp.eazysum import Summarizer

#---key from eazymind website---
key = "5cb67e09f8bf2d07d77ed3028fe53063"

sentence = """(CNN)The White House has instructed former
    White House Counsel Don McGahn not to comply with a subpoena
    for documents from House Judiciary Chairman Jerry Nadler, 
    teeing up the latest in a series of escalating oversight 
    showdowns between the Trump administration and congressional Democrats."""
    
summarizer = Summarizer(key)
print(summarizer.run(article_text))

    

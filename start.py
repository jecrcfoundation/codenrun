from __future__ import absolute_import
from __future__ import division, print_function, unicode_literals
import spacy
import nltk.data
from youtube_transcript_api import YouTubeTranscriptApi
import en_core_web_sm
from sumy.parsers.html import HtmlParser
from sumy.parsers.plaintext import PlaintextParser
from sumy.nlp.tokenizers import Tokenizer
from sumy.summarizers.lsa import LsaSummarizer as Summarizer
from sumy.nlp.stemmers import Stemmer
from sumy.utils import get_stop_words

LANGUAGE = "english"
SENTENCES_COUNT = 10


def final_fuck_for_yt(sentence_list):
    count=1
    documents=[]
    try:
        print('======================================================================================================')            

        new_list=[]
        for sentence in sentence_list:
          new_list.append((str(count)+' : '+sentence))
          count+=1
        sentence_list=new_list
        
       
        word_frequencies = {}
        for word in nltk.word_tokenize(formatted_article_text):
            if word not in stopwords:
                if word not in word_frequencies.keys():
                    word_frequencies[word] = 1
                else:
                    word_frequencies[word] += 1
        maximum_frequncy = max(word_frequencies.values())

        for word in word_frequencies.keys():
            word_frequencies[word] = (word_frequencies[word]/maximum_frequncy)
        sentence_scores = {}
        for sent in sentence_list:
            for word in nltk.word_tokenize(sent.lower()):
                if word in word_frequencies.keys():
                        if sent not in sentence_scores.keys():
                            sentence_scores[sent] = word_frequencies[word]
                        else:
                            sentence_scores[sent] += word_frequencies[word]
        
        summary_sentences = heapq.nlargest(10, sentence_scores, key=sentence_scores.get)



        summary_dict={}
        for sent in summary_sentences:
          index=sent.find(':')
          summary_dict[int(sent[:index-1])]=sent[index+2:]
        
        order_details=sorted(summary_dict.keys())
        i=1
        print(order_details)
        for j in order_details:
          print(i,' : ',summary_dict[j])
          i+=1
        
    except ValueError:
      pass







def ytsearch(obj,word):
    for i in obj:
        if word.lower() in i['text'].lower():
            print(i['text']," at ",i['start'])

def yt():
    idd=input("enter video id..... ")
    x=(YouTubeTranscriptApi.get_transcript( idd=input("enter video id..... ")))
    while True:
    inp=input("search ....... ")
    ytsearch(x,inp)

def yt_tot_text():
    idd=input("enter video id..... ")
    x=(YouTubeTranscriptApi.get_transcript(idd))
 
    tot=""
    ind=0
    for i in x :
        tot+=str(ind)
        tot+=i['text']
        tot+=" "
        ind++
    return tot

def sumy(tot):
    
    file = open('document.txt', 'w')
    file.write(tot)

##    url = "https://en.wikipedia.org/wiki/Automatic_summarization"
##    parser = HtmlParser.from_url(url, Tokenizer(LANGUAGE))
    # or for plain text files
    parser = PlaintextParser.from_file("document.txt", Tokenizer(LANGUAGE))
    stemmer = Stemmer(LANGUAGE)

    summarizer = Summarizer(stemmer)
    summarizer.stop_words = get_stop_words(LANGUAGE)

    for sentence in summarizer(parser.document, SENTENCES_COUNT):
        print(sentence)



def yt_summary():
    nlp = en_core_web_sm.load()
    tokenizer = nlp.Defaults.create_tokenizer(nlp)
    text = 'I am working'
    tokens = [token.orth_ for token in tokenizer(text)]








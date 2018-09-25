//Строки для поиска
UrlYandex = "http://www.yandex.ru/yandsearch?rpt=rad&text=";
    UrlGoogle = "http://www.google.ru/search?hl=ru&newwindow=1&q=";
    UrlMailRu = "http://go.mail.ru/search?fm=1&rf=e.mail.ru&q=";
    UrlDuckDuckGo = "https://duckduckgo.com/?q=";
    UrlYahoo = "https://search.yahoo.com/search?p=";
    UrlBing = "http://www.bing.com/search?q=";
    UrlYahoo = "https://search.yahoo.com/search?p=";
    UrlRambler = "https://nova.rambler.ru/search?query=";
    UrlWikipedia = "ttps://ru.wikipedia.org/w/index.php?search=";
    UrlAport = "https://www.aport.ru/search/?q=";
    UrlSearch = "https://www.search.com/web?q=";
    UrlClarivate = "https://clarivate.com/?s=";
    UrlWebcrawler = "http://www.webcrawler.com/serp?q=";
    UrlIRR = "https://irr.ru/searchads/search/keywords=";
    UrlPrice = "https://price.ru/search/?query=";
    UrlAsk = "https://www.ask.com/web?q=";



function FindText(Url){
    var FullUrl=Url+document.find.searchtext.value;
    //Проверяем установлен ли флажок
    if (document.find.newwin.checked){
        var FindWin=window.open(FullUrl);
    }
    else {
        location.href = FullUrl;
    }
}
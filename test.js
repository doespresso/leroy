var request = require('request');
var jsdom = require("jsdom");


//
//var Db = require('mongodb').Db,
//    MongoClient = require('mongodb').MongoClient,
//    Server = require('mongodb').Server,
//    ReplSetServers = require('mongodb').ReplSetServers,
//    ObjectID = require('mongodb').ObjectID,
//    Binary = require('mongodb').Binary,
//    GridStore = require('mongodb').GridStore,
//    Grid = require('mongodb').Grid,
//    Code = require('mongodb').Code,
//    BSON = require('mongodb').pure().BSON,
//    assert = require('assert'),
//    iconv = require('iconv').iconv;
//
//var db = new Db('biz1', new Server('188.226.240.224', 27017));




var col = 10,
    start = 1000,
    stop = 1060,
    urlmask = 'http://odintsovo.biz/map/?geo=55.677,37.2663,13&id=81660';

var counter = 0,
    tick = 0;


function getpage(err, resp, html) {
    if (err) throw err;
    var url = resp.request.uri.href;
    if (resp.statusCode === 200 && html) {


        console.log('URI HREF', resp.request.uri.href);
        jsdom.env(
            html,
            ["http://code.jquery.com/jquery.js"],
            function (errors, window) {
                var $ = window.$;
                var coord = null;
                coord = $("script[src*='/jscript/googlemap/v3/googlemap.js?geo=']").attr("src");
                console.log(coord);
                if (++counter>=col){
                    counter = 0;
                    if((col*(++tick)+start)<stop) {
                        newrange(tick);
                    } else {
//                db.close();
                    }
                }
            }
        );

    } else {
        console.log(err);
        if (++counter>=col){
            counter = 0;
            if((col*(++tick)+start)<stop) {
                newrange(tick);
            } else {
//                db.close();
            }
        }
    }

}


function newrange(t){

    for (var i = start + t*col; i <= start + col*(t+1); i++) {
        var url = urlmask + i;

        request({url: url, followRedirect: false},function (err, res, html) {
            console.log(url);
            getpage(err, res, html);
        });
    }
}


//db.open(function (err, db) {});
newrange(tick);




//request(url, function(err, res, body){
//    if(err){
//        console.log(err);
//    }
//    else{
//        $ = cheerio.load(body);
//        var cards = [];
//        $('.card').each(function(){
//            cards.push({
//                title:$('.title',this).text(),
//                url:$('a',this).attr('href')
//            });
//        });
//    }
//});
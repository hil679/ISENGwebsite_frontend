//기본파일인 server.js

const express = require('express');
const app = express();

app.use(express.static('./public'));
app.use(express.static('./common'));
app.use(express.static('./asset'));

app.listen(8000, function(){
  console.log('Listening at 8000');
});
app.get('/',function(req,res){
    res.sendFile(__dirname + '/index.html');
});
app.get('/about',function(req,res){
    res.sendFile(__dirname + '/kr/about/about.html');
});
app.get('/industry',function(req,res){
    res.sendFile(__dirname + '/kr/industry/industry.html');
});
app.get('/manufacture/',function(req,res){
    res.sendFile(__dirname + '/kr/product/items.html');
});
app.get('/machine/',function(req,res){
    res.sendFile(__dirname + '/kr/machine/machine.html');
});
app.get('/contact/',function(req,res){
    res.sendFile(__dirname + '/kr/contact/contact.html');
});
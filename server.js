//기본파일인 server.js

const express = require('express');
const app = express();

app.use(express.static('public'));
app.use(express.static('asset'));

app.listen(8000, function(){
  console.log('Listening at 8000');
});
app.get('/',function(req,res){
    res.sendFile(__dirname + '/index.html');
});
app.get('/abou',function(req,res){
    res.sendFile(__dirname + '/detailPage/about/about.html');
});
app.get('/industr',function(req,res){
    res.sendFile(__dirname + '/detailPage/industry/industry.html');
});
app.get('/manufacture',function(req,res){
    res.sendFile(__dirname + '/detailPage/product/items.html');
});
app.get('/machine',function(req,res){
    res.sendFile(__dirname + '/detailPage/machine/machine.html');
});
app.get('/contact',function(req,res){
    res.sendFile(__dirname + '/detailPage/contact/contact.html');
});
var express = require('express');
var router = express.Router();
var Chance = require('chance');
// Instantiate Chance so it can be used
var chance = new Chance();

/* GET /json. */
router.get('/', function(req, res, next) {
    var jsonRes = {};
    jsonRes.name = chance.name();
    jsonRes.age = chance.age();
    jsonRes.avatar = chance.avatar();
    jsonRes.favImage = "http://loremflickr.com/800/600/"+chance.word();
    res.json(jsonRes);
});

module.exports = router;

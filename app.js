
const express = require('express')
const bodyParser = require('body-parser');
const app = express();
const path = require('path');
const hbs = require('hbs');
app.use(express.json())
app.use(express.urlencoded({extends:true}))
let publicPath = path.join(__dirname,'./public')
app.use(express.static(publicPath));
app.set("view engine","hbs");
app.use('/',require('./routes/user'));

app.listen(4000, (err, result) => {
    if (err) {
        throw (err)
    }
    else {
        console.log("app running: 4000")
    }

})



var server = require('./public/Js/connection')
const express = require('express')
const bodyParser = require('body-parser');
const app = express();
const path = require('path');
app.use(express.static('public'));
app.use(express.json())
app.use(express.urlencoded({extends:true}))


app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'public', 'index.html'));
})
app.post('/register', (req, res) => {
    // res.sendFile(path.join(__dirname,'public','create_Account.html'));
    console.log(req.body)
    let datas = [
        id= req.body.id,
        firstname=req.body.Firstname,
        lastname=req.body.Lastname,
        emai= req.body.email,
        password=req.body.password,
        confrompassword=req.body.conformpassword]
    
   
    var sqlInsert = "insert into registerform Values(?)"
    server.query(sqlInsert, [datas], function (error, result) {
        if (error) {
            res.send({status:false, message:"failed"})
        }
        else {
            console.log(result)
            console.log("posted into database")
            res.send({message:"succssfully posted"})
           
        }
    })
  
})

app.listen(4000, (err, result) => {
    if (err) {
        throw (err)
    }
    else {
        console.log("app running: 4000")
    }

})
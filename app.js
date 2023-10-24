var server = require('./Backend/DB_Connection/dbconnection')
const express = require('express')
const bodyParser = require('body-parser');
const app = express();
const path = require('path');
const { send } = require('process');
app.use(express.static('public'));
app.use(express.json())
app.use(express.urlencoded({extends:true}))
let publicPath = path.join(__dirname,'/Frontend/public/')

app.get('/', (req, res) => {
    res.sendFile((`${publicPath}/index.html`));
})
app.get('/signup', (req, res) => {
    res.sendFile((`${publicPath}/signup.html`));
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
        confrompassword=req.body.conformpassword
    ]
    
   
    var sqlInsert = "insert into registerform Values(?)"
    server.query(sqlInsert, [datas], function (error, result) {
        if (error) {
            res.send({status:false, message:"failed"})
        }
        else {
            console.log(result)
            console.log("posted into database")
            res.send({message:"succssfully posted",data: datas})
           
        }
    })
  
})


// 

    app.get('/viewProductDetails',(req,res)=>{
        // res.send("new page")
        res.sendFile((`${publicPath}/cartPage.html`));
    })


app.listen(4000, (err, result) => {
    if (err) {
        throw (err)
    }
    else {
        console.log("app running: 4000")
    }

})
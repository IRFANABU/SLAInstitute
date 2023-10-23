var con = require('./connection')
const  express = require('express')
var app = express()
const path = require('path')
// const PORT = process.env.PORT||4000;
const PORT = 4000;
// app.use(express.json())

 app.use(express.static('./public'));
// app.use('/static', express.static(path.join(__dirname, 'public')))
    //  connect the server on this port number 4000
app.get('/', (req, res) => {

    res.sendFile(path.join(__dirname,'view','create_Account.html'));
    // res.send("<h1 style=text-align:center>helloworld</h1>");
    con.query('select * from from2', (err, result) => {
        if (err) {
            console.log(err)
        }
        else {
            console.log("data fetched");
            res.send({status:true ,data:result})
            console.log(result)
        }

    })


})

app.get('*',(req,res)=>{
    res.sendFile('/public/index.html');

})


app.listen(PORT, (err) => {
    if (err) {
        console.log(err+"failed to connect the server")
    }
    else {
        console.log(`connected to server on this Port:${PORT}`);

    }
})

module.exports = app;
var app = require('./server')
var con = require('./connection')

app.get('/register', (req, res) => {

    res.sendFile(path.join(__dirname,'./create_Account.html'))


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


app.post('/registerForm', (req, res) => {
    // const id = req.body.id
    // const email = req.body.email
    // const password = req.body.password
    let datas = {
        id: req.body.id,
        email: req.body.email,
        password: req.body.password

    }
   
    con.query('insert into from2 Values(?,?,?)',datas, (err, result) => {
        if (err) {
            console.log(err)
        }
        else {
            console.log("data posted");
            res.send({message:"data saved sucessfully"});
        }

    })
    
})
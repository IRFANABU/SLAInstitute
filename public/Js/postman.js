
var app = require('./server')
var con = require('./connection')
    
    //  ( crud Operation using NodeJs and Express Framework with mySQL)
    // post the data with using PostMan tool

    app.post('/api/register', (req, res) => {
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

    // get all details from the  database using express

    app.get('/', (req, res) => {

        res.sendFile(app.path.join(__dirname,'./create_Account.html'))

    
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

    // // get particular details from the database by given ID

    app.get('/api/getBy/:id', (req, res) => {
        var studentid = req.params.id;
        var stuName = req.params.email;
        var queryForId = 'select * from from2 where id=' + studentid;
        con.query(queryForId, (err, result) => {
            if (err) {
                console.log(err+"there is not data here")
            }
            else {
                    console.log("data fetched by given id");
                //   var conn =  JSON.parse(result)
                    res.send(result);
                    var conn =  JSON.stringify(result)
                   console.log(conn); 
            }

        })

    })

       



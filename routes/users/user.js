const express = require ('express');
var routers = express.Router();
const server = require("../../Backend/DB_Connection/dbconnection")

// routers.use((res,req)=>{
//     console.log("please Help")
// })

routers.get('/',(req, res) => {
    // res.sendFile((`${publicPath}/signup.html`));
    res.render("signup")
})
routers.get('/login',(req, res) => {
    // res.sendFile((`${publicPath}/signup.html`));
    res.render("login")
})

// separate routes using in node js for router to post data

routers.route('/post').post( (req, res) => {

        console.log(req.body)
        let datas = [
            id= req.body.id,
            firstname=req.body.Firstname,
            lastname=req.body.Lastname,
            email= req.body.email,
            password=req.body.password,
            conformpassword=req.body.conformpassword
        ] 
            
    // /  let datas { [id=id,firstname=Firstname,lastname=Lastname,email=email,password=password,confrompassword = conformpassword]}=req.body;
        var sqlInsert = "insert into registerform Values(?)"
        server.query(sqlInsert, [datas], function (error, result) {
            if (error) {
                res.send({status:false, message:"failed"})
            }
            else {
                console.log(result)
                console.log("posted into database")
                res.render('login')
            }
        })
      
    })
// C:\work\React\Website\views\login.hbs: Cannot set headers after they are sent to the client 
//  res.render("login")
              
    

        routers.get('/viewProductDetails',(req,res)=>{
            // res.send("new page")
            res.sendFile((`${publicPath}/cartPage.html`));
        })
    

module.exports = routers;
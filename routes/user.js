const express = require ('express');
const routers = express.Router();
const server = require("../Backend/DB_Connection/dbconnection")

routers.get("/", (req, res) => {
    // res.sendFile((`${publicPath}/index.html`));
    res.render("index")
})
routers.get("/login", (req, res) => {
    // res.sendFile((`${publicPath}/index.html`));
    res.render("login")
})
routers.get('/signup', (req, res) => {
    // res.sendFile((`${publicPath}/signup.html`));
    res.render("signup")
})
routers.get('/login',(req,res)=>{
    res.render()
})
routers.post('/register', (req, res) => {
   
        console.log(req.body)
        let datas = [
            id= req.body.id,
            firstname=req.body.Firstname,
            lastname=req.body.Lastname,
            email= req.body.email,
            password=req.body.password,
            confrompassword=req.body.conformpassword
        ] 

    //   let datas = [id=id,firstname=Firstname,lastname=Lastname,email=email,password=password,confrompassword = conformpassword]
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
        routers.get('/viewProductDetails',(req,res)=>{
            // res.send("new page")
            res.sendFile((`${publicPath}/cartPage.html`));
        })
    

module.exports = routers;
const express = require ('express');
const routers = express.Router();
const server = require("../../Backend/DB_Connection/dbconnection");

routers.get("/",(req, res) => {
    res.render("login")
})
routers.get("/signup",(req, res) => {
    res.render("signup")
})


routers.post("/loginpost",(req,res)=>{
               
                const emails = req.body.Email;
                const pwd= req.body.Password;
    sqlQuery= ("SELECT * from registerform WHERE email = ? and password = ?");
    server.query(sqlQuery,[emails,pwd],function(err,results){
       if (results.length > 0) {
        console.log(req.body)
        res.render('index')
    } 
       else {
        console.log(err+"mismatched");
        // res.send(emails+pwd);
       }
       console.log(results)
    })

})
routers.get('/index',(req,res)=>{
    res.render('index')
})
// routers.route('/auth').post( (req, res) => {
//     res.render('/index')
// })
module.exports = routers;
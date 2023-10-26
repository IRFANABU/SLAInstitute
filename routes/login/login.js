const express = require ('express');
const routers = express.Router();
const server = require("../../Backend/DB_Connection/dbconnection")
routers.get("/",(req, res) => {
    res.render("login")
})
routers.get("/signup",(req, res) => {
    res.render("signup")
})
routers.route('/home').post((req,res)=>{
    // res.send("hello welcome")
    sqlQuery= "select id from formdata where email = ? and password = ?"
    server.query(function(err,result){
       
    })
    res.render('index',{message:req.body});
    
})
// routers.route('/auth').post( (req, res) => {
//     res.render('/index')
// })
module.exports = routers;
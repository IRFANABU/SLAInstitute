const express = require ('express');
const routers = express.Router();
const server = require("../../Backend/DB_Connection/dbconnection")
routers.get('/',(req,res)=>{
    res.render("index")
})







module.exports=routers;
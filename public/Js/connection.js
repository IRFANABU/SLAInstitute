
var mysql = require('mysql');
var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "password",
    port: 3306,
    database: 'formData'
});
// var sql = "CREATE DATABASE SLA";
// con.query(sql, function (err, result) {
//     if (err) {
//         console.log("database creation is failed")

//     }
//     else {
//         console.log(result);
//     }
// })
// con.query("Create table registerData (id INT Auto_Increment primary key,email VARCHAR (255),password VARCHAR(255))", function (error, result2) {
//     if (error) throw error;
//     console.log("created")
// })
con.connect(function (error) {
    if (error) {
        console.log(error + "failed to connect")
    }
    else {
        console.log("connected to Database using mySQL workbench");
    }
})

module.exports = con;

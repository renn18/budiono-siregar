const mysql = require('mysql');
const express = require('express');


const app = express();

app.use(express.json());

const con = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'datakapal'
});

const PORT = 3001;

con.connect(function(err) {
    if (err) throw err;
    con.query("SELECT nama_kapal FROM schedules", function (err, result, fields) {
      if (err) throw err;
      console.log(result[0].nama_kapal);
    });
  });

// async function countKapal() {
//     const [rows] = await pool.query("SELECT COUNT(id) FROM kapal");
//     return rows;
// }

// const notes = await countKapal();
// console.log(notes);
// const any = pool.query('SELECT COUNT(id) FROM kapal', (error, res, field) => {
//     if(error) throw error;
//     res.json(any);
// });








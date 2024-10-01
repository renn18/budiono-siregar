const mysql = require('mysql');
const express = require('express');
const cors = require('cors');

const app = express();

app.use(express.json());

const pool = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'datakapal'
});

const PORT = 3001;

app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
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

app.use('/datacreate', cors());
app.use('/datacreate2', cors());

app.get('/datacreate', (req, res) => {
    pool.query('SELECT COUNT(nama_kapal) AS data FROM kapal UNION SELECT COUNT(nama_kapal) AS data2 FROM schedules', (err, results) => {
        if(err) throw err;
        res.json(results);
        // console.log(results[1].data);
        
    });
});

app.get('/datacreate2', (req, res) => {
    pool.query('SELECT COUNT(nama_kapal) AS data2 FROM schedules', (err, results) => {
        if(err) throw err;
        res.json(results);
        
    });
});

  








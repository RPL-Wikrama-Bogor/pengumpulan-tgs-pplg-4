const express = require('express')
const mysql = require('mysql2')
const bookRoute = require('../day3/routes/book')
const authorRoute = require('../day3/routes/author')
const authRoute = require('../day3/routes/auth')
const dbConfig = require('../day3/config/database')
const pool = mysql.createPool(dbConfig)
const authenticateJWT = require('../day3/middleware/auth')
const cors = require('cors')

pool.on('error', (err) =>{
    console.log(err)
})

const app = express();
const PORT = 2000;

app.use(express.json());
app.use(express.urlencoded({
    extended: true
}))

// membuat parameter yang diawali titik dua':' dan dipanggil dengan req.params(harus)
app.get('/parameter/:username/:rombel/:rayon', (req, res) => {
    res.json(req.params)
    res.end();
})

app.get('/param', (req, res) => {
    res.json(req.query)
    res.end();
})

app.get('/', (req, res) =>{
    res.write('Hello World')
    res.end();
})
app.use(cors())
app.use('/auth', authRoute)
app.use('/book', authenticateJWT, bookRoute);
app.use('/author',  authorRoute);

app.listen(PORT, () =>{
    console.log(`Server berjalan di http://localhost:${PORT}`);
})
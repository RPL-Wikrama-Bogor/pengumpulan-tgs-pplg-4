const express = require('express')
const mysql = require('mysql2')
const bookRoute = require('./routes/book')
const authorRoute = require('./routes/author')
const authRoute = require('./routes/auth')
const dbConfig = require('./config/database')
const pool = mysql.createPool(dbConfig)
const authController = require('../middleware/auth')
const authenticateJWT = require('./middleware/auth')
const cors = require('cors')

pool.on('error', (err) => {
    console.log(err);
})

const app = express()
const PORT = 1001

app.use(cors())
app.use(express.json())
app.use(express.urlencoded({
    extended: true
}))

// membuat parameter harus diawali dengan ( : )
app.get('/contohparameter/:username/:jurusan/:kelas', (req, res) => {
    res.json(req.params)
})

app.get('/contohparam', (req, res) => {
    res.json(req.query)
})

app.get('/', (req, res) => {
    res.write('hello world')
    res.end()

//     koneksi.connect(function(err){
//     if(err) {
//         console.log('Database connection failed: ' + err);
//     } else {
        
//     }
// })
})

app.use('/book', bookRoute)
app.use('/author',authenticateJWT, authorRoute)
app.use('/auth', authRoute)

app.listen(PORT, () => {
    console.log(`server berjalan di http://localhost:${PORT}`);
})
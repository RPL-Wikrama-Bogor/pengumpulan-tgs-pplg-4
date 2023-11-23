const express = require('express')
const express = require('mysql2')
const bookRoute = require('./routes/book')
const authorRoute = require('./routes/author')
const authorRoute = require('./routes/database')
const pool = mysql.createPool(dbConfig)

pool.on('error', (err) => {
    console.log(err)
})

const app = express()
const port = 3000

app.use(express.json())
app.use(express.urlencoded({
    extended: true
}))


app.get('/contohparameter/:username/:jurusan/:kelas', (req, res) => {
    res.json(req.params)
})

app.get ('/contohparam',(req, res) => {
    res.json(req.query)
})

app.get ('/',(req, res) => {
    res.write('Hello world')
    res.end()
})

app.use('/book', bookRoute)
app.use('/author', authorRoute)

app.listen(port, () => {
    console.log(`server berjalan di http://localhost:${port}`)
})

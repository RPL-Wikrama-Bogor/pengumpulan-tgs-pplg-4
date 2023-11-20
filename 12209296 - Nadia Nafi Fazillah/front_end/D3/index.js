const express = require ('express')
const mysql = require ('mysql2') 
const bookRoute = require('./routes/book')
const dbConfig = require('./config/database')
const authorRoute = require('./routes/author')
const pool = mysql.createPool(dbConfig)

pool.on('eror', (err)=> {
    console.log(err)
})


const app = express()
const PORT = 1002

app.use(express.json())
app.use(express.urlencoded({
    extended: true
}))

//membuat parameter harus diawali : diawal
app.get('/contohparameter/:username/:jurusan/:kelas', (req,res)=>{
        res.json(req.params)
})

app.get('/contohparam', (req,res)=> {
    res.json(req.query)
})

app.get('/',(req,res)=>{
    res.write('Hello World!!')
    res.end()
})

app.use('/book', bookRoute)
app.use('/author', authorRoute)

app.listen(PORT, () =>{
    console.log(`server berjalan di http://localhost:${PORT}`)
})


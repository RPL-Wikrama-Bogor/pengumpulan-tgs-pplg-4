const express = require('express')
const app = express()

const port  = 600

app.get('/', (req, res)  => {
    res.write('Coba express')
    res.end()
})
app.get('/wikrama', (req, res)  => {
    res.write('Hello Wikrama')
    res.end()
})
app.get('/about', (req, res)  => {
    res.write('About')
    res.end()
})

 
app.listen(port, () => {
    console.log(`sever berjalan di http://localhost:${port}`);
})


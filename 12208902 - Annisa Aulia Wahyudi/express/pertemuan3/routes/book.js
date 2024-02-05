const express = require('express')
const router = express.Router()
const {
    getBooks
} = require('../controllers/BookController')


// route untuk menampilkan data 
router.get('/', getBooks)

router.get('/', (req, res) => {
    res.write('GET book node')
    res.end()
})

// route untuk mengirim data    
router.get('/',)

router.post('/', (req, res) => {
    res.write('POST book node')
    res.end()
})

router.get('/:id', (req, res) => {

})

// route untuk memperbarui / update data
router.put('/:id', (req, res) => {
    res.write('PUT book node')
    res.end()
})

// route untuk menghapus data
router.delete('/:id', (req, res) => {
    res.write('DELETE book node')
    res.end()
})

module.exports = router
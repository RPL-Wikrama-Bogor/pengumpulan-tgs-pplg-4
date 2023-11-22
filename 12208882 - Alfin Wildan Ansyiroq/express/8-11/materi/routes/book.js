const express = require('express')
const router = express.Router()
const {
    getBooks
} = require('../controllers/BookController')

//untuk menampilkan data
router.get('/',getBooks)

//untuk mengirim data 
router.post('/', getBooks)

router.get('/:id', (req,res) => {

})

// unruk memperbarui/update data
router.put('/:id', (req,res) => {
    res.write('PUT book code')
    res.end()
})

//untuk menghapus data
router.delete('/:id', (req,res) => {
    res.write('DELETE book code')
    res.end()
})

module.exports = router
const express = require('express')
const router = express.Router()
const {
    getBooks,
    getBook,  
    addBook,
    updateBook,
    deleteBook
} = require('../controllers/BookController')

//route untuk menampilkan data
router.get('/', getBooks)

//route untuk mengirim data
router.post('/', addBook)

//routebuntuk mengrim data
router.get('/:id', getBook)

//
router.put('/:id', updateBook)

//route untuk menghapus data
router.delete('/:id', deleteBook )
  
module.exports = router
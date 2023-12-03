const express = require('express')
const router = express.Router();
const {
    getBooks,
    getBookById,
    createBook,
    updateBook,
    deleteBook,
    search,
    sortBy
} = require('../controllers/BookController')

router.get('/search', search)

// cara nyarinya http://localhost:post/search?order=DESC / ASC
router.get('/sort', sortBy)

router.get('/', getBooks)

router.get('/:id', getBookById)

// route untuk mengrim data
router.post('/', createBook)


// route untuk memperbaharui data
router.put('/:id', updateBook )

// route untuk mendelete/menghapus
router.delete('/:id', deleteBook)

module.exports = router
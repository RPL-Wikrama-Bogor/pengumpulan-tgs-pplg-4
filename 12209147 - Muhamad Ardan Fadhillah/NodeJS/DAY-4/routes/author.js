const express = require('express')
const router = express.Router()
const {
    getAuthors,
    getAuthor,
    addAuthor,
    updateAuthor,
    deleteAuthor
} = require('../controllers/AuthorsController')

//route untuk menampilkan data
router.get('/', getAuthors)

//route untuk mengirim data
router.post('/', addAuthor)

//route unutk menanmpilkan data berdasarkan id buku
router.get('/:id', getAuthor)

//route untuk memperbaharui/update berdasarkan id buku
router.put('/:id', updateAuthor)

//route untuk menghapus berdasarkan id buku
router.delete('/:id', deleteAuthor)


module.exports = router